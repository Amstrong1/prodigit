<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\ProjectMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'tel' => 'required',
            'status' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'status' => $request->input('status'),
            'service' => $request->input('service'),
            'message' => $request->input('message'),
        ];

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactForm($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function projet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'firstname' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'siret' => 'required',
            'project_name' => 'required',
            'service' => 'required',
            'description' => 'required',
            'paiement' => 'required',
            'delai' => 'required',
            'hoster' => 'required',
            'domain' => 'required',
            'parrain' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'nom' => $request->input('name'),
            'prenom' => $request->input('firstname'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'entreprise' => $request->input('company'),
            'siret' => $request->input('siret'),
            'projet' => $request->input('project_name'),
            'service' => $request->input('service'),
            'description' => $request->input('description'),
            'paiement' => $request->input('paiement'),
            'delai' => $request->input('delai'),
            'hebergeur' => $request->input('hoster'),
            'domaine' => $request->input('domain'),
            'parrain' => $request->input('parrain'),
        ];

        $attachmentPaths = [];
        if (!empty($request->file('attachment'))) {
            foreach ($request->file('attachment') as $attachmentFile) {
                $fileName = time() . '-' . str::random(10) . '.' . $attachmentFile->getClientOriginalExtension();
                $attachmentPaths[] = $attachmentFile->storeAs('attachments', $fileName, 'public');
            }
        }

        if (!empty($attachmentPaths)) {
            Mail::to('admin@test.com')->send(new ProjectMail($data, $attachmentPaths));
        } else {
            Mail::to('admin@test.com')->send(new ProjectMail($data));
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
