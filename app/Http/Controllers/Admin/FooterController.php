<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'social_media_links' => 'nullable|array',
            'useful_links' => 'nullable|array',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $footer->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'social_media_links' => json_decode($request->input('social_media_links', '[]'), true),
            'useful_links' => json_decode($request->input('useful_links', '[]'), true),
            'logo' => $request->input('logo'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.footer.index')->with('success', 'Footer updated successfully.');
    }
}
