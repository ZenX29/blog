<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items =Blog::all();
        $categorys = Category::all();
        return view('blogs.index',compact('items','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = Category::all();
        return view('blogs.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $blog = New Blog;
        $blog ->title =$request->input('title');
        $blog ->category_id =$request->input('category_id');
        $blog ->body =$request->input('body');
        $blog ->img =$request->input('img');
        $blog ->save();
        return redirect('/blogs')->with('success','Post was successfully create!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Blog::find($id);
        return view('blogs.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorys =Category::all();
        $blog = Blog::find($id);
        return view('blogs.edit',compact('blog','categorys'));
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
        //
        $blog =Blog::findOrFail($id);
        $blog ->title =$request->input('title');
        $blog ->category_id =$request->input('category_id');
        $blog ->body =$request->input('body');
        $blog ->img =$request->input('img');
        $blog ->save();
        return redirect('/blogs')->with('success','Post was successfully update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog =Blog::find($id);
        $blog ->delete();
        return back()->with('error','Post was successfully delete!');
    }
}
