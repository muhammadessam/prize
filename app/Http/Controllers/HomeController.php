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
        return view('front.result', compact('res'));
    }


    public function getGift(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');

        $check_value = $_SERVER['REMOTE_ADDR']; //lets use the customers ip to check for leads with.

        $feedurl = 'http://www.cpagrip.com/common/lead_check_rss.php?user_id=96777&key=b4a92c73f424a97e8b3af1c75c171181&time=1day&check=ip&value=' . $request->getClientIp();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $feedurl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $xml_string = curl_exec($ch);
        curl_close($ch);

        try {
            $xml = simplexml_load_string($xml_string, 'SimpleXMLElement', [LIBXML_NOCDATA, LIBXML_ERR_NONE]);
        } catch (\ErrorException $exception) {
            alert()->error('هناك خطا', 'عنوان الاي بي الخاص بك غير صحيح');
            return redirect()->back();
        }
        if ($xml = simplexml_load_string($xml_string, 'SimpleXMLElement', [LIBXML_NOCDATA, LIBXML_ERR_NONE])) {
            if ($xml->lead_info->lead_found == 'true') {

                $ip = Ip::where('visitor_ip', $request->ip())->first();
                try {
                    $gift = Gift::where('used', false)->get();
                    $gift = $gift->random(1);

                } catch (\Exception $exception) {

                    alert()->error('لا يتوفر هدايا وجوائز حاليا');
                    return redirect()->back();
                }

                if ($ip) {
                    if ($ip->updated_at->diffInHours(now()) < 24) {
                        alert()->error('من فضلك انتظر 24 ساعة ');
                        return redirect()->back();
                    } else {
                        $ip['updated_at'] = now();
                        $gift['used'] = true;
                        $ip->save();
                        $gift->save();
                        return view('front.prize', compact('gift'));
                    }
                } else {
                    Ip::create([
                        'visitor_ip' => $request->ip()
                    ]);
                    $gift['used'] = true;
                    $gift->save();
                    return view('front.prize', compact('gift'));
                }
            } else {
                alert()->error('لم تكمل الاعلان', 'من فضلك اقفل مانع الاعلانات وتاكد من اتصالك بالانترنت حتي تتاح لك الهدية');
                return redirect()->back();
            }
        } else {
            alert()->error('هناك خطا', 'لم نتسطع جلب الاعلانات لاكمال استلام الجائزة');
            return redirect()->back();
        }


    }
}

