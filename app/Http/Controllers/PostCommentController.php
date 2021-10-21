<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{

    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'content'   => 'required',
        ]);

        // Comment::create(array_merge($validated, ['post_id' => $post->id]));
        $added = $post->comments()->create($validated);

        // if($added){
        //     return response()->json([
        //         'status' => true ,
        //         'message'   => 'comment added successfully',
        //     ]);
        // }else {
        //     return response()->json([
        //         'status' => false ,
        //         'message'   => 'comment added failed ',
        //     ]);
        // }
        return redirect()->route('posts.show', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit',['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $validation = $request->validate([
            'name'  => 'required|min:2',
            'email'  => 'required|min:2',
            'content'  => 'required|min:2',
        ]);

        $comment->update($validation);
        return redirect()->route('posts.show', $comment->post);
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
