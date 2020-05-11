<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Question;
use App\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }

    public function contactUsGet()
    {
        return view('front.contactus');
    }

    public function contactUsPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'الاسم مطلوب',
            'phone.required' => 'الهاتف مطلوب',
            'email.required' => 'البريد مطلوب',
            'subject.required' => 'الموضوع مطلوب',
            'message.required' => 'الرسالة مطلوب',
        ]);

        ContactUs::create($request->all());
        alert()->success('تم ارسالة الرسالة ستقوم الادارة بالرد عليك');
        return redirect()->back();
    }
}
