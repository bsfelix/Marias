<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = new Post;

        $newPost->name = $request->name;
        $newPost->content = $request->content;
        $newPost->id_theme = $request->id_theme;

        $newPost->save();
        return response()->json('Post salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorfail($id);

        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated = Post::findorfail($id);

        if($request->name)
        {
            $updated->name = $request->name;
        }

        if($request->content)
        {
            $updated->content = $request->content;
        }

        if($request->id_theme)
        {
            $updated->id_theme = $request->id_theme;
        }
        
        $updated->save();
        return response()->json('Post alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($post->id);
        
        return response()->json('Post deletado com sucesso');
    }
}
