<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request)
    {
        try {
            // Get validated data
            $validatedData = $request->validated();

            // Send email to admin
            Mail::to('dilpreet@pearlshipping.co.in')
                ->send(new ContactFormMail($validatedData));

            Mail::to('info@adsvizion.net')
                ->send(new ContactFormMail($validatedData));

            // Return response based on request type
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for contacting us. We will get back to you soon!'
                ]);
            }

            return back()->with('success', 'Thank you for contacting us. We will get back to you soon!');

        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred. Please try again.'
                ], 500);
            }

            return back()->with('error', 'An error occurred. Please try again.');
        }
    }
}
