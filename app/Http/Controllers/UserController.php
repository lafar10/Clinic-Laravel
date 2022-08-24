<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('pages.User.Users', compact('users'));
    }

    public function create()
    {
        return view('pages.User.AddUser');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'tele' => 'required|min:8|max:20',
            'role_as' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'tele' => $request->input('tele'),
            'role_as' => $request->input('role_as'),
            'password' => Hash::make($request->input('password')),
        ]);

        alert()->success('success', 'User Created With Success ^+^');
        return redirect()->route('users');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->input('user_id'));

        if (!$user) {
            return back();
        }

        $user->delete();

        alert()->success('success', 'User Deleted With Success ^+^');
        return redirect()->back();
    }

    public function edit($id)
    {
        $users = User::find($id);

        if (!$users)
            return back();


        return view('pages.User.UpdateUser')->with('users', $users);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'tele' => 'required|min:8|max:20',
            'role_as' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $user = User::find($request->input('user_id'));

        if (!$user)
            return back();

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'tele' => $request->input('tele'),
            'role_as' => $request->input('role_as'),
            'password' => Hash::make($request->input('password')),
        ]);

        toast('User Updated With Success ^+^', 'success');
        return redirect()->route('users');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('id', 'like', "%$search%")
            ->orwhere('name', 'like', "%$search%")
            ->orwhere('tele', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->paginate(10);

        return view('pages.User.Users')->with('users', $users);
    }
}
