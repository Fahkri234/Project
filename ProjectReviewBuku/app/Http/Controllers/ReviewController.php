<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use App\Models\Buku;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'buku'])->get();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $users = User::all();
        $bukus = Buku::all();
        return view('reviews.create', compact('users', 'bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ulasan' => 'required',
            'rating' => 'required|integer',
            'pendapat' => 'nullable',
            'user_id' => 'required|exists:users,id',
            'buku_id' => 'required|exists:buku,id',
        ]);

        Review::create($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        $users = User::all();
        $bukus = Buku::all();
        return view('reviews.edit', compact('review', 'users', 'bukus'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'ulasan' => 'required',
            'rating' => 'required|integer',
            'pendapat' => 'nullable',
            'user_id' => 'required|exists:users,id',
            'buku_id' => 'required|exists:buku,id',
        ]);

        $review->update($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}


