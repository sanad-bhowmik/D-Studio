<?php

namespace App\Http\Controllers;

use App\Models\UserIdea;
use Illuminate\Http\Request;

class IdeaFormController extends Controller
{
    public function showForm()
    {
        return view('partials.ideaForm');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('imageUpload')) {
            $image = $request->file('imageUpload');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Generate a unique name
            $image->move(public_path('Photo/user_idea'), $imageName); // Save image to public/Photo/user_idea directory
            $fullImageUrl = url('Photo/user_idea/' . $imageName); // Generate URL for the image
        }

        // Store the form data in the database
        $userIdea = UserIdea::create([
            'firstName' => $validatedData['firstName'],
            'lastName' => $validatedData['lastName'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'image' => $fullImageUrl,
            'status' => 'pending', // Default status
        ]);

        // Return a JSON response
        return response()->json([
            'message' => 'Your idea has been submitted!',
            'redirectUrl' => url('/'),
        ]);
    }

    public function showIdeaPage()
    {
        $userIdeas = UserIdea::paginate(10); 
        return view('admin.A_idea', compact('userIdeas'));
    }

}
