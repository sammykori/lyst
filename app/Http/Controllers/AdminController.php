<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function usersIndex()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }
    public function usersDelete($id)
    {
        $del = User::find($id);
        $del->delete();

        return back()->withSuccess('success', 'User Removed Successfully');
    }
    public function usersStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        //create
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('admin/users')->withSuccess('New User Created');
    }


//service

    public function serviceIndex()
    {
        $users = Service::all();
        return view('admin.services.index')->with('users', $users);
    }
    public function serviceDelete()
    {
        $del = Service::find($id);
        $del->delete();

        return back()->withSuccess('success', 'User Removed Successfully');
    }
    public function serviceStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        //create
        $user = new Service;
        $user->name = $request->input('name');
        $user->description = $request->input('description');
        $user->duration = $request->input('duration');
        $user->save();

        return redirect('admin/services')->withSuccess('New Service Created');
    }

}
