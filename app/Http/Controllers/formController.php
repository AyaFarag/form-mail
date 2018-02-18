<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Mail;
use Session;
use Redirect;
use App\Mailfile;
class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forminput = App\form::get();

       return view('form',['form'=>$forminput , 'title' => 'Book Ticket']);
    }

    public function postcontact(Request $request)
    {
        $data = array(
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'title'=>$request->title,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'companyname'=>$request->companyname,
            'country'=>$request->country,
            'companysize'=>$request->companysize,
            'companyphone'=>$request->companyphone,
            'companywebsite'=>$request->companywebsite,
            'companywebsite'=>$request->companywebsite,
            'heardaboutus'=>$request->heardaboutus,
        );

        Mail::send('emails.form', $data, function($message) use ($data)
        {
            $message->firstname($data['firstname']);
            $message->lastname($data['lastname']);
            $message->from('ayasaid94.as@gmail.com');
        
            
        });

        session::flash('success'," Congrats !! Data Sent Successfuly");
        return Redirect::to('/form.index');
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
      //  $myinput = new App\post();
      //  $myinput->firstname = $request->input('postContent');
     //   $myinput->Owner_id = 0;
      //  $myinput->Parent_id = 1;
    //    $myinput->save();
      //  return redirect()->route(form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
