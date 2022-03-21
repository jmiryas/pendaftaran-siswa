<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index() {
        return view("login.index");
    }

    public function store() {
        $attributes = request()->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!auth()->attempt($attributes)) {
            return back()->withInput()->withErrors([
                "email" => "Your provided credentials could not be verified."
            ]);   
        }

        session()->regenerate();

        Alert::success("Sukses", "Login sukses!");
            
        return redirect("/");
    }

    public function destroy() {
        auth()->logout();

        Alert::success("Sukses", "Logout sukses!");

        return redirect("/");
    }
}
