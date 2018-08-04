<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function settingindex(){
        return view('admin.setting.index');
    }

    public function settingpost(Request $request){

        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,' . $user->id,
        ]);

       

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password == !null) {
            $this->validate($request, [
                'password' => 'string|min:6|confirmed',
            ]);
            $user->password = bcrypt($request->password);
        }
        
        $user->save();

        return back()->with('status', 'Profile Updated Success');
    }

    public function index(){
    	return view('admin.index');
    }

    public function productcreate(){
        return view('admin.product.index');
    }
}
