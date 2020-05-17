<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Gift;
use App\Models\Ip;
use App\Models\Question;
use App\Setting;
use App\User;
use Awssat\Visits\Models\Visit;
use Awssat\Visits\Visits;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Ramsey\Collection\Exception\InvalidArgumentException;

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
        $gifts = [];
        $ip = Ip::where('visitor_ip', $request->ip())->first();
        try {
            $gifts = Gift::where('used', false)->get();
            $gifts = $gifts->random(3);

        } catch (\Exception $exception) {
            try {
                $gifts = Gift::all()->where('used', false)->random(1);
            } catch (\Exception $exception) {
                $gifts = [];
                alert()->error('لا توجد هدايا كافية فضلا انتظر');
                return view('front.result', compact('res', 'gifts'));
            }
        }

        if ($ip) {
            if ($ip->updated_at->diffInHours(now()) < 24) {
                alert()->error('من فضلك انتظر 24 ساعة ');
                return redirect()->back();
            } else {
                return view('front.result', compact('res', 'gifts'));
            }
        } else {
            Ip::create([
                'visitor_ip' => $request->ip()
            ]);
        }
        return view('front.result', compact('res', 'gifts'));
    }


    public function getGift(Request $request, Gift $gift)
    {


        $ip = Ip::where('visitor_ip', $request->ip())->first();
        $ip['updated_at'] = now();
        $gift['used'] = true;

        $ip->save();
        $gift->save();

        return view('front.prize', compact('gift'));
    }

    public function offerCallback(Request $request)
    {
        dd($request->all());
    }

}

