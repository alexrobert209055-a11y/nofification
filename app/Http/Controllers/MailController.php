<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckRequest;
use App\Helpers\ApiResponse;
use App\Mail\SendConfirmationMail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {

        // Artisan::call('app:send-confirmation')
        // return ApiResponse::success($user, 'User created successfully', Response::HTTP_CREATED);

        // Mail::to('recipient@example.com')->send(new SendConfirmationMail())
    }

    public function test()
    {

        // Artisan ::call('app:send-confirmation');
        return ApiResponse::success('', 'Message sent successfully', 200);
        // Mail::to('recipient@example.com')->send(new SendConfirmationMail())
    }

    public function hello()
    {

        // Artisan ::call('app:send-confirmation');
        Mail::to('recipient@example.com')->send(new SendConfirmationMail());
        return ApiResponse::success('', 'Message sent successfully', 200);

        // if (count(Mail::failures()) > 0) {
        //     // Handle failures
        //     return ApiResponse::error('', 'Message sent successfully', 500);
        // } else {
        //     // Success
        //     return ApiResponse::success('', 'Message sent successfully', 200);
        // }
        // Mail::to('recipient@example.com')->send(new SendConfirmationMail())
    }

    
    public function sendTestEmail(CheckRequest $request)
    {

        $request->validated();

        $username = $request->username;
        $password = $request->password;
        $recipientEmail = 'edetobisung@gmail.com'; // Any email address, it will be caught by Mailtrap
        Mail::to($recipientEmail)->send(new SendConfirmationMail($username, $password));

        return response()->json(['message' => 'Test email sent successfully!']);
    }
}
