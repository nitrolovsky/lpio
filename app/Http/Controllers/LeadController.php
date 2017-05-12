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

                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),

                'comment' => Request::get('comment'),

                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            );

            DB::table('wardrobes')->insert($data);

            Mail::send("emails.lead", $data, function ($message) use ($data) {
                $message->from("info@lpio.ru", "lpio.ru");
                $message->to("info@lpio.ru");
                $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
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
