<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ContactUsRespond;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactUs::all();
        return view('admin.contactus.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }


    public function respondGet(ContactUs $contact)
    {
        return view('admin.contactus.respond', compact('contact'));
    }

    public function respondPost(Request $request, ContactUs $contact)
    {
        Mail::to($contact->email)->send(new ContactUsRespond($request['message']));
        alert()->success('تم الرد');
        return redirect()->route('contact.index');
    }
}
