<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::all() // alle blogs meegeven aan mijn view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = Blog::create([ // dit maakt 1 blog item aan//
            'title' => $request->input('title'), //dit request alles op wat in de input met de name title//
            'description' => $request->input('description'),//dit request alles op wat in de input met de name description//
            'content' => $request->input('content') //dit request alles op wat in de input met de name content//
        ]);

        return redirect('blogs'); //returnt het naar de /blogs //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit')->with('blog', $blog); //returnt de blog als $blog//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update([ // dit update 1 blog//
            'title' => $request->input('title'), //dit request alles op wat in de input met de name title//
            'description' => $request->input('description'),//dit request alles op wat in de input met de name description//
            'content' => $request->input('content') //dit request alles op wat in de input met de name content//
        ]);

        return redirect('blogs'); //returnt het naar de /blogs //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete(); //verwijderd de model//
        return redirect('blogs');
    }
}
