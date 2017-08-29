<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Mail;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Etc/GMT-3');

        if (Request::get("source") == "shkaf-kupe") {
            $data = array(
                'source' => Request::server("HTTP_REFERER"),
                'cta' => Request::get('cta'),

                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),

                'comment' => Request::get('comment'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            );

            DB::table('wardrobes')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("info.lpio.ru@gmail.com");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
            });

            return redirect('pages/thanks');
        }

        if (Request::get("source") == "beton") {
            $data = array(
                'source' => Request::server("HTTP_REFERER"),
                'cta' => Request::get('cta'),

                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),

                'comment' => Request::get('comment'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            );

            DB::table('concrete_leads')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("info.lpio.ru@gmail.com");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
            });

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("saintbeton@gmail.com");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
            });

            return redirect('pages/thanks');
        }

        if (Request::get("source") == "gazifikacija") {
            $lead_last_id = DB::table("gazifikacija_leads")->insertGetId([
                "name" => Request::get("name"),
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "source" => Request::server("HTTP_REFERER"),
                "cta" => Request::get("cta"),
                "calc" => Request::get("calc"),
                "nar" => Request::get("nar"),
                "vn" => Request::get("vn"),
                "kol" => Request::get("kol"),
                "davl" => Request::get("davl"),
                "dlina" => Request::get("dlina"),
                "dym" => Request::get("dym"),
                "kotel" => Request::get("kotel"),
                "ob" => Request::get("ob"),
                "op1" => Request::get("op1"),
                "op2" => Request::get("op2"),
                "op3" => Request::get("op3"),
                "op4" => Request::get("op4"),
                "op5" => Request::get("op5"),
                "op6" => Request::get("op6"),
                "op7" => Request::get("op7"),
                "op8" => Request::get("op8"),
                "op9" => Request::get("op9"),
                "op10" => Request::get("op10")
            ]);

            $email = array(
                "name" => Request::get("name"),
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "source" => Request::server("HTTP_REFERER"),
                "ip" => Request::server("REMOTE_ADDR"),
                "cta" => Request::get("cta"),
                "calc" => Request::get("calc"),
                "nar" => Request::get("nar"),
                "vn" => Request::get("vn"),
                "kol" => Request::get("kol"),
                "davl" => Request::get("davl"),
                "dlina" => Request::get("dlina"),
                "dym" => Request::get("dym"),
                "kotel" => Request::get("kotel"),
                "ob" => Request::get("ob"),
                "op1" => Request::get("op1"),
                "op2" => Request::get("op2"),
                "op3" => Request::get("op3"),
                "op4" => Request::get("op4"),
                "op5" => Request::get("op5"),
                "op6" => Request::get("op6"),
                "op7" => Request::get("op7"),
                "op8" => Request::get("op8"),
                "op9" => Request::get("op9"),
                "op10" => Request::get("op10"),
                "lead_id" => $lead_last_id
            );

            Mail::send("emails.gazifikacija", $email, function ($message) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("domshowaltair@gmail.com");
                $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
            });

            return redirect("pages/thanks");
        }

        if (Request::get("source") == "ashmedia") {
            $data = array(
                'source' => Request::server("HTTP_REFERER"),
                'cta' => Request::get('cta'),

                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),

                'comment' => Request::get('comment'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            );

            DB::table('ashmedia_leads')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("shevtsovpiter@mail.ru");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
            });

            return redirect('pages/thanks');
        }

        if (Request::get("source") == "pryzhok-parashyut") {
            $data = array(
                'source' => Request::server("HTTP_REFERER"),
                'cta' => Request::get('cta'),

                'email' => Request::get('email'),
                'phone' => Request::get('phone'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            );

            DB::table('parashyut_leads')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("nitrolovsky@gmail.com");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
            });

            return redirect('pages/thanks');
        }

        if (Request::get("source") == "all_leads") {
            $data = array(
                'source' => Request::server("HTTP_REFERER"),
                'cta' => Request::get('cta'),

                'fio' => Request::get('fio'),
                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),
                'comment' => Request::get('comment'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

                'to' => Request::get('to')
            );

            DB::table('all_leads')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("nitrolovsky@gmail.com");
                $message->subject("Заявка от " . $data['source'] . " в " . $data['created_at']);
            });

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to($data['to']);
                $message->subject("Заявка от " . $data['source'] . " в " . $data['created_at']);
            });

            return redirect('pages/thanks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
