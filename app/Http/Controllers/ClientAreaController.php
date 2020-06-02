<?php


namespace App\Http\Controllers;


class ClientAreaController
{
    /**
     * Show home page
     *
     * @return Response
     */

    public function logged(){
        return view('clientarea.home');
    }

    public function home()
    {
        return view('clientarea.projects.home');
    }

    public function tasks()
    {
    return view('clientarea.projects.tasks');
     }

     public function activity()
     {
        return view('clientarea.projects.activity');
     }

    public function calendar()
    {
        return view('clientarea.projects.calendar');
    }

    public function files()
    {
        return view('clientarea.projects.files');
    }

    public function  team(){
        return view('clientarea.teams.home');
    }
    public  function settings(){
        return view('clientarea.profile.settings');
    }
}
