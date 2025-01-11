<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function serviceUrbanDetails()
    {
        return view('service.ServiceUrbanDetails');
    }
    public function serviceRuralDetails()
    {
        return view('service.ServiceRuralDetails');
    }
    public function serviceRemoteDetails()
    {
        return view('service.ServiceRemoteDetails');
    }
    public function BlogService()
    {
        return view('service.BlogService');
    }
    public function UploadIdea()
    {
        return view('service.UploadIdea');
    }
}
// ServiceRemoteDetails
