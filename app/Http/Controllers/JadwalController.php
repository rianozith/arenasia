<?php

namespace App\Http\Controllers;

use App\jadwal;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;    
use Redirect;
use Session;
use DateTime;
use Validator;
use ValidatesRequests;



class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.schedule.index');
    }

    public function daftar()
    {
        $data = [
            'page_title' => 'Events',
            'events'     => jadwal::orderBy('start_time')->get(),
        ];
        return view('admin.schedule.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('admin.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'name'  => 'required|min:5|max:15',
            'title' => 'required|min:5|max:100',
            'time'  => 'required');

        $message = array(
            'name.required'  => 'harus diisi',
            'title.required' => 'harus diisi',
            'time.required'  => 'harus diisi');
        
        $validator = Validator::make($input, $rules, $message);

        if ($validator->fails()){
            return redirect::back()->withErrors($validator)->withinput();
        }
        else {
        $time = explode(" - ", $request->input('time'));
        
        $event                  = new jadwal;
        $event->name            = $request->input('name');
        $event->title           = $request->input('title');
        $event->start_time      = $this->change_date_format($time[0]);
        $event->end_time        = $this->change_date_format($time[1]);
        $event->save();
        $request->session()->flash('success', 'The data was successfully saved!');
        }
        
        return redirect('dashboard/schedule');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $jadwal = jadwal::findOrFail($id);
        
        $first_date = new DateTime($jadwal->start_time);
        $second_date = new DateTime($jadwal->end_time);
        $difference = $first_date->diff($second_date);

        $data = [
            'page_title'    => $jadwal->title,
            'event'         => $jadwal,
            'duration'      => $this->format_interval($difference)
        ];
        
        return view('admin.schedule.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = jadwal::findOrFail($id);
        $event->start_time =  $this->change_date_format_fullcalendar($event->start_time);
        $event->end_time =  $this->change_date_format_fullcalendar($event->end_time);
        
        $data = [
            'page_title'    => 'Edit '.$event->title,
            'event'         => $event,
        ];
        return view('admin.schedule.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jadwal)
    {
        $this->validate($request, [
            'name'  => 'required|min:5|max:15',
            'title' => 'required|min:5|max:100',
            'time'  => 'required'
        ]);
        
        $time = explode(" - ", $request->input('time'));
        
        $event                  = jadwal::findOrFail($jadwal);
        $event->name            = $request->input('name');
        $event->title           = $request->input('title');
        $event->start_time      = $this->change_date_format($time[0]);
        $event->end_time        = $this->change_date_format($time[1]);
        $event->save();
        
                
        $request->session()->flash('success', 'The venue was successfully Updated!');
        return redirect('dashboard/schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = jadwal::find($id);
        $event->delete();
        Session::flash('success', 'The data was successfully deleted!');
        return redirect('dashboard/schedule');
    }

    public function change_date_format($date)
    {
        $time = DateTime::createFromFormat('d/m/Y H:i:s', $date);
        return $time->format('Y-m-d H:i:s');
    }

    public function format_interval(\DateInterval $interval)
    {
        $result = "";
        if ($interval->y) { $result .= $interval->format("%y year(s) "); }
        if ($interval->m) { $result .= $interval->format("%m month(s) "); }
        if ($interval->d) { $result .= $interval->format("%d day(s) "); }
        if ($interval->h) { $result .= $interval->format("%h hour(s) "); }
        if ($interval->i) { $result .= $interval->format("%i minute(s) "); }
        if ($interval->s) { $result .= $interval->format("%s second(s) "); }
        
        return $result;
    }

    public function change_date_format_fullcalendar($date)
    {
        $time = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $time->format('d/m/Y H:i:s');
    }
}
