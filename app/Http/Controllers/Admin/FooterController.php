<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\SocialMediaLink;
use App\Models\UsefulLink;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        $socialMediaLinks = SocialMediaLink::all();
        $usefulLinks = UsefulLink::all();

        return view('admin.footer.index', compact('footer', 'socialMediaLinks', 'usefulLinks'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $footer->update($request->all());

        return redirect()->route('admin.footer.index')->with('success', 'Footer updated successfully.');
    }

    public function storeSocialMediaLink(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        SocialMediaLink::create($request->all());
        return redirect()->route('admin.footer.index')->with('success', 'Social media link added successfully.');
    }

    public function destroySocialMediaLink(SocialMediaLink $link)
    {
        $link->delete();
        return redirect()->route('admin.footer.index')->with('success', 'Social media link deleted successfully.');
    }

    public function storeUsefulLink(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        UsefulLink::create($request->all());
        return redirect()->route('admin.footer.index')->with('success', 'Useful link added successfully.');
    }

    public function destroyUsefulLink(UsefulLink $link)
    {
        $link->delete();
        return redirect()->route('admin.footer.index')->with('success', 'Useful link deleted successfully.');
    }

}
