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

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Method to show the A_admin page
    public function showAdminPage()
    {
        return view('admin.A_about');
    }
    public function storeAbout(Request $request)
    {
        $request->validate([
            'mission' => 'nullable|string|max:500',
            'vision' => 'nullable|string|max:500',
            'rightImg' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'leftImg' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $about = About::first();

        if (!$about) {
            $about = new About();
        }

        if ($request->has('mission')) {
            $about->mission = $request->input('mission');
        }

        if ($request->has('vision')) {
            $about->vision = $request->input('vision');
        }

        $about->status = 1;

        if ($request->hasFile('rightImg')) {
            $rightImg = $request->file('rightImg');
            $rightImgName = time() . '_' . $rightImg->getClientOriginalName();
            $rightImg->move(public_path('Photo/about'), $rightImgName);
            $about->rightImg = 'http://ds.dstudio.com.bd/Photo/about/' . $rightImgName;
        }

        if ($request->hasFile('leftImg')) {
            $leftImg = $request->file('leftImg');
            $leftImgName = time() . '_' . $leftImg->getClientOriginalName();
            $leftImg->move(public_path('Photo/about'), $leftImgName);
            $about->leftImg = 'http://ds.dstudio.com.bd/Photo/about/' . $leftImgName;
        }

        $about->save();
        return back()->with('success', 'About information saved successfully!');
    }

    public function showWhoPage()
    {
        return view('admin.A_whoArewe');
    }
    public function storeWhoDetails(Request $request)
    {
        $request->validate([
            'details' => 'required|string|max:5000',
        ]);

        $whoAreWe = WhoAreWe::first();

        if ($whoAreWe) {
            $whoAreWe->update([
                'details' => $request->input('details'),
            ]);
        } else {
            WhoAreWe::create([
                'details' => $request->input('details'),
                'status' => 1, // Default status
            ]);
        }

        session()->flash('success', 'Details saved successfully!');
        return back()->with('success', 'Details saved successfully!');
    }

    public function showUrbanPage()
    {
        return view('admin.A_urban');
    }

    public function storeUrbanService(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
            'imgOne' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgTwo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgThree' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgFour' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $urbanService = UrbanService::first();

        $imagePaths = [];
        foreach (['imgOne', 'imgTwo', 'imgThree', 'imgFour'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $imgFile = $request->file($imgField);
                $imgName = time() . '_' . $imgFile->getClientOriginalName();
                $imgFile->move(public_path('Photo/service/urban'), $imgName);
                $imagePaths[$imgField] = 'http://ds.dstudio.com.bd/Photo/service/urban/' . $imgName;
            } else {
                if (isset($urbanService->{$imgField})) {
                    $imagePaths[$imgField] = $urbanService->{$imgField};
                }
            }
        }

        if (!$urbanService) {
            $urbanService = new UrbanService();
        }

        $urbanService->details = $request->input('details');
        $urbanService->imgOne = $imagePaths['imgOne'];
        $urbanService->imgTwo = $imagePaths['imgTwo'];
        $urbanService->imgThree = $imagePaths['imgThree'];
        $urbanService->imgFour = $imagePaths['imgFour'];

        $urbanService->save();

        return redirect()->back()->with('success', 'Urban Service saved successfully!');
    }


    public function showRuralPage()
    {
        return view('admin.A_rural');
    }
    public function showUpIdeaPage()
    {
        return view('admin.A_upIdea');
    }
    public function storeUpIdea(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
            'imgOne' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgTwo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgThree' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgFour' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ruralService = UpIdea::first();

        $imagePaths = [];
        foreach (['imgOne', 'imgTwo', 'imgThree', 'imgFour'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $imgFile = $request->file($imgField);
                $imgName = time() . '_' . $imgFile->getClientOriginalName();
                $imgFile->move(public_path('Photo/idea'), $imgName);
                $imagePaths[$imgField] = 'http://ds.dstudio.com.bd/Photo/idea/' . $imgName;
            } else {
                if (isset($ruralService->{$imgField})) {
                    $imagePaths[$imgField] = $ruralService->{$imgField};
                }
            }
        }

        if (!$ruralService) {
            $ruralService = new UpIdea();
        }

        $ruralService->details = $request->input('details');
        $ruralService->imgOne = $imagePaths['imgOne'];
        $ruralService->imgTwo = $imagePaths['imgTwo'];
        $ruralService->imgThree = $imagePaths['imgThree'];
        $ruralService->imgFour = $imagePaths['imgFour'];

        // Save the data to the database
        $ruralService->save();

        return redirect()->back()->with('success', 'Data saved successfully!');
    }


    public function storeRuralService(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
            'imgOne' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'imgTwo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'imgThree' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'imgFour' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ], [
            'imgOne.max' => 'Image 1 exceeds the maximum size of 5 MB.',
            'imgTwo.max' => 'Image 2 exceeds the maximum size of 5 MB.',
            'imgThree.max' => 'Image 3 exceeds the maximum size of 5 MB.',
            'imgFour.max' => 'Image 4 exceeds the maximum size of 5 MB.',
        ]);

        try {
            $ruralService = new RuralService();

            $imagePaths = [];
            foreach (['imgOne', 'imgTwo', 'imgThree', 'imgFour'] as $imgField) {
                if ($request->hasFile($imgField)) {
                    $imgFile = $request->file($imgField);
                    $imgName = time() . '_' . $imgFile->getClientOriginalName();
                    $imgFile->move(public_path('Photo/service/rural/'), $imgName);
                    $imagePaths[$imgField] = 'Photo/service/rural/' . $imgName;
                } else {
                    $imagePaths[$imgField] = null;
                }
            }

            $ruralService->details = $request->input('details');
            $ruralService->imgOne = $imagePaths['imgOne'];
            $ruralService->imgTwo = $imagePaths['imgTwo'];
            $ruralService->imgThree = $imagePaths['imgThree'];
            $ruralService->imgFour = $imagePaths['imgFour'];

            $ruralService->save();

            return redirect()->back()->with('success', 'New Rural Service data saved successfully!');
        } catch (\Exception $e) {
            \Log::error('Error saving RuralService: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while saving data. Please try again.');
        }
    }



    public function showRemotePage()
    {
        return view('admin.A_remote');
    }

    public function storeRemoteService(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
            'imgOne' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgTwo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgThree' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgFour' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $remoteService = RemoteService::first();

        $imagePaths = [];
        foreach (['imgOne', 'imgTwo', 'imgThree', 'imgFour'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $imgFile = $request->file($imgField);
                $imgName = time() . '_' . $imgFile->getClientOriginalName();
                $imgFile->move(public_path('Photo/service/rural'), $imgName);
                $imagePaths[$imgField] = 'http://ds.dstudio.com.bd/Photo/service/rural/' . $imgName;
            } else {
                if (isset($remoteService->{$imgField}) && $remoteService->{$imgField}) {
                    $imagePaths[$imgField] = $remoteService->{$imgField};
                }
            }
        }

        if (!$remoteService) {
            $remoteService = new RemoteService();
        }

        $remoteService->details = $request->input('details');
        $remoteService->imgOne = $imagePaths['imgOne'] ?? null;
        $remoteService->imgTwo = $imagePaths['imgTwo'] ?? null;
        $remoteService->imgThree = $imagePaths['imgThree'] ?? null;
        $remoteService->imgFour = $imagePaths['imgFour'] ?? null;

        $remoteService->save();

        return redirect()->back()->with('success', 'Remote Service saved successfully!');
    }


    public function showBlogPage()
    {
        return view('admin.A_blog');
    }
    public function storeBlog(Request $request)
    {
        // Validate the request data
        $request->validate([
            'details' => 'required|string',
        ]);

        // Create a new blog entry every time
        $blog = new Blog();
        $blog->details = $request->input('details');
        $blog->save();

        // Return with success message
        return redirect()->back()->with('success', 'Blog saved successfully!');
    }


    public function showNetworkPage()
    {
        return view('admin.A_network');
    }
    public function storeNetwork(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
        ]);

        $network = new Network();
        $network->details = $request->input('details');
        $network->save();

        return redirect()->back()->with('success', 'Network details saved successfully!');
    }


    public function showContactPage()
    {
        return view('admin.A_contact');
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            'details' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->details = $request->input('details');
        $contact->save();

        return redirect()->back()->with('success', 'Contact details saved successfully!');
    }
}
