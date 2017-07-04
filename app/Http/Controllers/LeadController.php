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
            $lead_last_id = DB::table("leads")->insertGetId([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "source" => $request->server("HTTP_REFERER"),
                "cta" => $request->input("cta"),
                "calc" => $request->input("calc"),
                "nar" => $request->input("nar"),
                "vn" => $request->input("vn"),
                "kol" => $request->input("kol"),
                "davl" => $request->input("davl"),
                "dlina" => $request->input("dlina"),
                "dym" => $request->input("dym"),
                "kotel" => $request->input("kotel"),
                "ob" => $request->input("ob"),
                "op1" => $request->input("op1"),
                "op2" => $request->input("op2"),
                "op3" => $request->input("op3"),
                "op4" => $request->input("op4"),
                "op5" => $request->input("op5"),
                "op6" => $request->input("op6"),
                "op7" => $request->input("op7"),
                "op8" => $request->input("op8"),
                "op9" => $request->input("op9"),
                "op10" => $request->input("op10")
            ]);

            $email = array(
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "source" => $request->server("HTTP_REFERER"),
                "cta" => $request->input("cta"),
                "calc" => $request->input("calc"),
                "nar" => $request->input("nar"),
                "vn" => $request->input("vn"),
                "kol" => $request->input("kol"),
                "davl" => $request->input("davl"),
                "dlina" => $request->input("dlina"),
                "dym" => $request->input("dym"),
                "kotel" => $request->input("kotel"),
                "ob" => $request->input("ob"),
                "op1" => $request->input("op1"),
                "op2" => $request->input("op2"),
                "op3" => $request->input("op3"),
                "op4" => $request->input("op4"),
                "op5" => $request->input("op5"),
                "op6" => $request->input("op6"),
                "op7" => $request->input("op7"),
                "op8" => $request->input("op8"),
                "op9" => $request->input("op9"),
                "op10" => $request->input("op10"),
                "lead_id" => $lead_last_id
            );

            Mail::send("emails.gazifikacija", $email, function ($message) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("domshowaltair@gmail.com");
                $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
            });

            Mail::send("emails.gazifikacija", $email, function ($message) {
                $message->from("info.lpio.ru@gmail.com", "lpio.ru");
                $message->to("nitrolovsky@gmail.com");
                $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
            });

            return redirect("pages/thanks");
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
