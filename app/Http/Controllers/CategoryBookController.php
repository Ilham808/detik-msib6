<?php

namespace App\Http\Controllers;

use App\Models\CategoryBook;
use Illuminate\Http\Request;

class CategoryBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categorybook.index',
            [
                'datas' => CategoryBook::paginate(10),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorybook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $save = CategoryBook::create([
            'name' => $request->name,
        ]);

        if ($save) {
            return redirect()->route('categorybooks.index')->with('success', 'Data saved successfully!');
        }else{
            return redirect()->route('categorybooks.index')->with('error', 'Data not saved!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryBook $categoryBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBook $categorybook)
    {
        return view('categorybook.edit', [
            'data' => $categorybook
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryBook $categorybook)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $update = $categorybook->update([
            'name' => $request->name,
        ]);

        if ($update) {
            return redirect()->route('categorybooks.index')->with('success', 'Data updated successfully!');
        }else{
            return redirect()->route('categorybooks.index')->with('error', 'Data not updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryBook $categorybook)
    {
        $delete = $categorybook->delete();
        if ($delete) {
            return redirect()->route('categorybooks.index')->with('success', 'Data deleted successfully!');
        }else{
            return redirect()->route('categorybooks.index')->with('error', 'Data not deleted!');
        }
    }
}
