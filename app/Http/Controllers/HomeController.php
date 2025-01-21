<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Network;
use App\Models\RemoteService;
use App\Models\RuralService;
use App\Models\UpIdea;
use App\Models\UrbanService;
use App\Models\WhoArewe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function serviceUrbanDetails()
{
    // Get the latest UrbanService record based on id (descending order)
    $urbanService = UrbanService::orderBy('id', 'desc')->first();
    return view('service.ServiceUrbanDetails', compact('urbanService'));
}


  public function serviceRuralDetails()
{
    // Get the latest RuralService record based on id (descending order)
    $ruralService = RuralService::orderBy('id', 'desc')->first();
    return view('service.ServiceRuralDetails', compact('ruralService'));
}

public function serviceRemoteDetails()
{
    // Get the latest RemoteService record based on id (descending order)
    $remoteService = RemoteService::orderBy('id', 'desc')->first();
    return view('service.ServiceRemoteDetails', compact('remoteService'));
}

    public function BlogService()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('service.BlogService', compact('blogs'));
    }
    public function UploadIdea()
    {
        $uploadIdea = UpIdea::first();
        return view('service.UploadIdea', compact('uploadIdea'));
    }

    public function showWelcomePage()
    {
        $networkData = Network::orderBy('created_at', 'desc')->first();
        $aboutData = About::orderBy('created_at', 'desc')->first();
        $whoAreWeData = WhoArewe::orderBy('created_at', 'desc')->first();
        $urbanServiceData = UrbanService::orderBy('created_at', 'desc')->first();
             $ruralServiceData = RuralService::orderBy('created_at', 'desc')->first();
        $remoteServiceData = RemoteService::orderBy('created_at', 'desc')->first();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(6)->get();
        $upIdea = UpIdea::orderBy('created_at', 'desc')->first();
        $contactData = Contact::orderBy('created_at', 'desc')->first();

        return view('welcome', compact(
            'aboutData',
            'whoAreWeData',
            'urbanServiceData',
            'ruralServiceData',
            'remoteServiceData',
            'recentBlogs',
            'upIdea',
            'networkData',
            'contactData'
        ));
    }



}
// ServiceRemoteDetails
