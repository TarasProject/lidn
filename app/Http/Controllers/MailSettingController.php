<?php

namespace App\Http\Controllers;

use App\Mail\BriefClass;
use App\Mail\MailClass;
use App\Mail\Upload;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\Captcha;

class MailSettingController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendForm(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'msg' => ['required', 'string'],
            'g-recaptcha-response' => new Captcha(),
        ]);

        Mail::to(config('mail.email'))->send(
            new MailClass(
                $request->get('name'),
                $request->get('email'),
                $request->get('msg')

            )
        );
        return response()
            ->json(['status' => true]);
    }
}
