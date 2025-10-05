<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('email-form');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        return redirect()
            ->back()
            ->with('success', 'Email is valid: ' . $validated['email']);
    }
}
