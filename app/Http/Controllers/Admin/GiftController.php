<?php

namespace App\Http\Controllers\Admin;

use App\Gift;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('admin.gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_value' => 'required',
            'text' => 'required_if:type_value,T',
            'image' => 'required_if:type_value,I'
        ]);
        if ($request['type_value'] == 'I') {
            $path =  $this->storeFile("uploads", "image");
            Gift::create([
                'img_path' => $path
            ]);
        } else {
            Gift::create([
                'text' => $request['text']
            ]);
        }
        alert()->success('تم ');
        return redirect()->route('gifts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gift $gift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
        alert()->success('تم ');
        return redirect()->route('gifts.index');
    }
}
