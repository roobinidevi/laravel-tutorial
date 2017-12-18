<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailChimpController extends Controller
{
    protected $mailchimp;
    protected $listId = '29bba85f6d';
    
    public function __construct(\Mailchimp $mailchimp)
    {
            $this->mailchimp = $mailchimp;
    }
    
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
//        phpinfo();
        $email = array(
            'EMAIL' => 'imarunkumargm@gmail.com',
            'FNAME' => 'first name',
            'LNAME' => 'last name'
        );
        try {
            $this->mailchimp
                ->lists
                ->subscribe(
                        $this->listId,
                        [
                            'email' => 'imarunkumargm@gmail.com',
                            'merge_vars' => [
                                'FNAME' => 'first name',
                                'LNAME' => 'last name'
                                ]
                        ]
                );
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
        	echo "your email already subscribed";
        } catch (\Mailchimp_Error $e) {
        	echo dd($e);
        }
        dd('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
