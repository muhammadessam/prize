<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Ip;
use App\Models\Question;
use App\Setting;
use App\User;
use Awssat\Visits\Models\Visit;
use Awssat\Visits\Visits;
use Carbon\Carbon;
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

    public function getPrize(Request $request, $res)
    {
        $ip = Ip::where('visitor_ip', $request->ip())->first();
        if ($ip) {
            if ($ip->updated_at->diffInHours(now()) < 1) {
                alert()->error('من فضلك انتظر ساعة ');
                return redirect()->back();
            } else {
                return view('front.result', compact($res));
            }
        } else {
            Ip::create([
                'visitor_ip' => $request->ip()
            ]);
        }
        return view('front.result', compact('res'));
    }
}
