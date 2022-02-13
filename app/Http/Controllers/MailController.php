<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function sendmail()
     {
        $details= [
            'title'=>'Congratulations !! your ticket have been booked.',
            'body'=>' From:'
               ];
              
               Mail:: to("beejay.basnet234@gmail.com")->send(new TestMail($details));
               return "Email Sent";  
      }
}
