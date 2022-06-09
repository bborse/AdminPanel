<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        $users = User::get();
        return view('admin.user.index',compact('users'));
    }
    public function create()
    {
        return  view('admin.user.create');
    }
    public function store(UserRequest $request)
    {
        // return $request->all();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->status = $request->status;
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $user->profile_photo_path = $imageName; 
        $user->save();
        return redirect('user-index')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}
