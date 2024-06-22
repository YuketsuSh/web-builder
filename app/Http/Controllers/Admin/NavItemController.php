<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NavItem;
use Illuminate\Http\Request;

class NavItemController extends Controller
{
    public function index()
    {
        $navItems = NavItem::with('children')->whereNull('parent_id')->get();
        return view('admin.nav-items.index', compact('navItems'));
    }

    public function create()
    {
        $navItems = NavItem::whereNull('parent_id')->get();
        return view('admin.nav-items.create', compact('navItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'parent_id' => 'nullable|exists:nav_items,id',
        ]);

        NavItem::create($request->all());

        return redirect()->route('admin.nav-items.index')->with('success', 'Nav item created successfully.');
    }

    public function edit(NavItem $navItem)
    {
        $navItems = NavItem::whereNull('parent_id')->get();
        return view('admin.nav-items.edit', compact('navItem', 'navItems'));
    }

    public function update(Request $request, NavItem $navItem)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'parent_id' => 'nullable|exists:nav_items,id',
        ]);

        $navItem->update($request->all());

        return redirect()->route('admin.nav-items.index')->with('success', 'Nav item updated successfully.');
    }

    public function destroy(NavItem $navItem)
    {
        $navItem->delete();

        return redirect()->route('admin.nav-items.index')->with('success', 'Nav item deleted successfully.');
    }
}
