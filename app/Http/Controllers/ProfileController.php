<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.index');
    }

    public function update_profile(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];

        if ($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        User::findOrfail(auth()->user()->id)->update($data);

        $msg = [
            'type' => 'success',
            'text' => 'Your profile has been updated successfully!'
        ];

        return redirect()->route('profile')->withMsg($msg);
    }
}
