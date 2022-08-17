<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewletterController extends Controller
{
    public function newsletterForm()
    {
        return view('news_letter');
    }
}
