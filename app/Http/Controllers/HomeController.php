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
        $urbanService = UrbanService::first();
        return view('service.ServiceUrbanDetails', compact('urbanService'));
    }

    public function serviceRuralDetails()
    {
        $ruralService = RuralService::first();
        return view('service.ServiceRuralDetails', compact('ruralService'));
    }
    public function serviceRemoteDetails()
    {
        $remoteService = RemoteService::first();
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
        $aboutData = About::first();
        $whoAreWeData = WhoArewe::first();
        $urbanServiceData = UrbanService::first();
        $ruralServiceData = RuralService::orderBy('created_at', 'desc')->first();
        $remoteServiceData = RemoteService::first();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(6)->get();
        $upIdea = UpIdea::first();
        $contactData = Contact::first();

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
