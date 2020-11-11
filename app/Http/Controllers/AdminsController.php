<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\LoginAdminFormRequest;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
        return view('/admin', ['title' => 'Admin Page']);
    }

    public function login(LoginAdminFormRequest $request)
    {
        $input = $request->all();
        $admins = Admin::all();
        
        foreach ($admins as $admin) {
            if ($admin->email == $input['email'] && $admin->password == $input['password']) {
                $request->session()->put('sessionEmail', $input['email']);
                return redirect(route('projects'));
            } else {
                $request->session()->flash('notValidAdmin', 'Погрешни креденцијали');
                return redirect(route('admin'));
            }
        }
        return redirect('/projects');
    }

    public function logout(Request $request) {
        $request->session()->forget('sessionEmail');
        return redirect(route('admin'));
    }
}
