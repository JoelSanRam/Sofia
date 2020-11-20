<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
    	$msg = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

    	try {

	        Mail::to('skrillex.ja14@gmail.com')->queue(new SendMail($msg));

			return response()->json("success");

    	} catch (Exception $e) {
    		return response()->json("danger");
    	}
        
    }
}
