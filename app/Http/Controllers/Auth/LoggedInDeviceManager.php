<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LoggedInDeviceManager extends Controller
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

       /**
     * Logout a session based on session id.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutDevice(Request $request, $device_id)
    {
        $session = Session::where('id', $device_id)->first();

        // update logout
        $db = \DB::table('authentication_log')
        ->where('authenticatable_id', $session->user_id)
        ->where('ip_address', $session->ip_address)
        ->where('login_at', $session->login_at)->update([
            'logout_at' => Carbon::now()->toDateTimeString()
        ]);

        Session::where('id', $device_id)->delete();

        return redirect()->back();
    }



    /**
     * Logouts a user from all other devices except the current one.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutAllDevices(Request $request)
    {
        $session = Session::where('user_id', \Auth::user()->id)
            ->where('id', '!=', \Session::getId())->get();

        // update logout
        foreach ($session as $key => $val) {
            $db = \DB::table('authentication_log')
            ->where('authenticatable_id', $val->user_id)
            ->where('ip_address', $val->ip_address)
            ->where('login_at', $val->login_at)->update([
                'logout_at' => Carbon::now()->toDateTimeString()
            ]);
        }

        Session::where('user_id', \Auth::user()->id)
        ->where('id', '!=', \Session::getId())->delete();

        return redirect()->back();
    }
}
