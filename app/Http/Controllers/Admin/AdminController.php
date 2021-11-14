<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(10,['name', 'id', 'email',]);
        return view('admin.users.index',['users' => $users]);
    }



    public function create()
    {
        $user = new User();
        return view('admin.users.create', ['user' => $user]);
    }



    public function store(Request $request)
    {
        // dd($request->all());
        $user = User::create($request->all());
        if($user)
            return redirect()->route('admin.users.index')->with(['success' => 'User Addedd Successfully']);
        else
            return redirect()->route('admin.users.index')->with(['error' => 'User Addedd Failed']);
    }


    public function show($id)
    {
        //
    }



    public function edit(User $user)
    {
        return view('admin.users.form',['user'=> $user]);
    }



    public function update(UserRequest $request, User $user)
    {

        if(! $request->password)
            $user = $user->update($request->except('password'));
        else
            $user = $user->update($request->all());

        if($user)
            return redirect()->route('admin.users.index')->with(['success' => 'User Updated Successfully']);
        else
            return redirect()->route('admin.users.index')->with(['error' => 'User Updated Failed']);
    }


    public function destroy(User $user)
    {
        if ($user->delete())
            return redirect()->route('admin.users.index')->with('success', 'User Deleted Successfully');
        else
            return redirect()->back()->with('error', 'User Deleted Failed');
    }

}
