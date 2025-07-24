<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Index()
    {
        $setting = \App\Models\SiteSetting::first();
        return view('frontend.index', compact('setting'));
    }

    public function UserProfile()
    {
        return view('frontend.dashboard.edit_profile');
    }

    public function UserProfileStore(Request $request)
    {
        // Handle profile update logic
        return redirect()->back()->with('message', 'Profile updated successfully');
    }

    public function UserLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function UserChangePassword()
    {
        return view('frontend.dashboard.change_password');
    }

    public function UserPasswordUpdate(Request $request)
    {
        // Handle password update logic
        return redirect()->back()->with('message', 'Password updated successfully');
    }

    public function UserScheduleRequest()
    {
        return view('frontend.dashboard.schedule_request');
    }

    public function LiveChat()
    {
        return view('frontend.dashboard.live_chat');
    }
}