<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('permission:create pages')->only(['create', 'store']);
        $this->middleware('permission:edit pages')->only(['edit', 'update']);
        $this->middleware('permission:delete pages')->only(['destroy']);
    }

    public function index()
    {
        $pages = Page::all();
        return view('admin/pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin/pages.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Page::create($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Page created successfully.');
    }

    public function show(Page $page){
        return view('pages.show', compact('page'));
    }

    public function edit(Page $page){
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $page->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page){
        $page->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Page deleted successfully.');
    }
}
