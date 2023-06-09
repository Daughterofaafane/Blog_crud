<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Data', ['datas' => Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $request->validate(
        ['title'=>'required|max:255|',
        'description'=>'required|max:255|',
        'image'=>'required|url',
        'link'=>'required|max:255|url',
        'active'=>'required'
        ]
    );

    $blog = new Blog();
    $blog->title = $request->input('title');
    $blog->image = $request->input('image');
    $blog->description = $request->input('description');
    $blog->link = $request->input('link');
    $blog->active = $request->input('active');
    $blog->save();
    session()->flash('Nom du session', 'The blog was successfully added.');
    return redirect()->route('resource.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('DataSingle', [
            'datas' => Blog::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('update', ['blogs' => Blog::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
 {        
       $blog = Blog::find($id);
       $blog->title = $request->input('title'); 
       $blog->image = $request->input('image');
       $blog->description = $request->input('description');
       $blog->link = $request->input('link');
       $blog->active = $request->input('active');
       $blog->save();
       session()->flash('Session update', 'The blog was successfully updated.');
       return redirect()->route('resource.index');    
 }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();  
        session()->flash('Session delete', 'The blog was successfully deleted.');
        return redirect()->route('resource.index'); 
    }
}
