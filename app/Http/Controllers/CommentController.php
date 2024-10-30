<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;



class CommentController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate that either `employee_id` or `product_id` is required, but not both
        $request->validate([
            'content' => 'required|string|max:500',
            'employee_id' => 'nullable|exists:employees,id',
            'product_id' => 'nullable|exists:products,id',
        ]);
    
        // Check that at least one of `employee_id` or `product_id` is filled
        if (!$request->employee_id && !$request->product_id) {
            return redirect()->back()->withErrors(['error' => 'Either employee or product must be specified.']);
        }
    
        // Create the comment with either `employee_id` or `product_id`
        Comment::create([
            'user_id' => auth()->id(),
            'employee_id' => $request->employee_id, // This will be null if commenting on a product
            'product_id' => $request->product_id,   // This will be null if commenting on an employee
            'content' => $request->content,
        ]);
    
        return redirect()->back()->with('success', 'Your comment has been posted.');
    }
    
    
}
