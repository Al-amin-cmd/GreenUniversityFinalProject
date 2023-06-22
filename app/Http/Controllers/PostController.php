<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $posts = Post::all();
        return view('../admin/post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('../admin/post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = [
            'title' =>$request->title,
            'description' =>$request->description,
            'image' => $this->uploadImage($request->file('image'))
        ];

        Post::create($requestData);



        return redirect()->route('post.index')->withMessage('Successfully created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $posts = Post::find($id);
        return view('../admin/post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $posts = Post::find($id);

        $requestData = [
            'title' =>$request->title,
            'description' =>$request->description,
        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }

        $posts->update($requestData);


        return redirect()->route('post.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $posts = Post::find($id);
        $posts->delete();

        return redirect()->route('post.index')->withMessage('Successfully delete');
    }


    public function trash()
    {
        //

        $posts = Post::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/post.trash',compact('posts'));
    }

    public function restore($id){
        $posts = Post::onlyTrashed()->find($id);
        $posts->restore();

        return redirect()->route('post.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $posts = Post::onlyTrashed()->find($id);
        $posts->forceDelete();

        return redirect()->route('post.index')->withMessage('Successfully deleted');

    }

    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/Post_image'), $fileName);


        return $fileName;
    }

}