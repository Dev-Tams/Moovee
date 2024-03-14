<?php

namespace App\Http\Controllers;

use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Requests\UserComments;

class CommentController extends Controller
{
    public function index()
    {
        return view('comment');
    }

    public function store(UserComments $request)
    {

        UserComment::create($request->validated());
        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('success', 'Comment stored successfully!');
    }
}
