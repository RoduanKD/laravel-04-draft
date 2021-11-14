<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
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
            return redirect()->route('admin.users.index')->withStatus(__('User is successfully added.'));
        else
            return redirect()->route('admin.users.index')->withError(__('a mistake in the deletion process'));
    }


    public function show($id)
    {
        //
    }



    public function edit(User $user)
    {
        return view('admin.users.edit',['user'=> $user]);
    }



    public function update(AdminRequest $request, User $user)
    {

        $user->update($request->all());
        return redirect()->route('admin.users.index')->withStatus(__('User is successfully updated.'));

        // if(! $request->password)
        //     $user = $user->update($request->except('password'));
        // else
        //     $user = $user->update($request->all());

        // if($user)
        //     return redirect()->route('admin.users.index')->with(['success' => 'User Updated Successfully']);
        // else
        //     return redirect()->route('admin.users.index')->with(['error' => 'User Updated Failed']);
    }


    public function destroy(User $user)
    {
        if ($user->delete())
            return redirect()->route('admin.users.index')->withStatus(__('User is successfully deleted.'));
        else
            return redirect()->route('admin.users.index')->withError(__('a mistake in the deletion process'));
    }

}
