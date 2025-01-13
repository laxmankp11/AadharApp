<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AadharRequest; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;


class AadharController extends Controller
{
    public function showUpdateAadhar()
    {
        $user = auth()->user();
        $decryptedAadhar = $user->aadhar_number ? Crypt::decryptString($user->aadhar_number) : null;
        $lastFour = substr($decryptedAadhar, -4);
        
        return view('aadhar.update', compact('lastFour'));
    }

    public function updateAadhar(AadharRequest $request)
    {
        
        $user = auth()->user();
        $encryptedAadhar = Crypt::encryptString($request->aadhar_number);

        $data = $user->update(['aadhar_number' => $encryptedAadhar]);
        return redirect()->back()->with('success', 'Aadhar number updated successfully!');
    }
}
