<?php

namespace App\Http\Controllers;

use App\lapangan;
use Illuminate\Http\Request;

use Redirect;
use Validator;
use Session;

use Faker\Factory as Faker;


class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[ 
            // 'pitches' => lapangan::paginate(15),
        'pitches' => \DB::table('venues')
                    ->join('lapangans', 'venues.id', '=', 'lapangans.venue_id')
                    ->paginate(15),
            ];
        return view('admin.pitch.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
        'venue_id' => \App\venue::pluck('nama_venue', 'id' ),
        ];
        return view('admin.pitch.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nama_lapangan'  => 'required|min:5|max:20',
            'status_lapangan' => 'required|min:5|max:100',
            'harga_lapangan'  => 'required|min:5|max:6',
            'foto_lapangan'  => 'nullable',
            'jadwal_id'  => 'nullable',
            'booking_id'  => 'nullable',
            'venue_id'  => 'required',
        ])->validate();
        
        $faker = Faker::create();

        $pitch                      = new lapangan;
        $pitch->nama_lapangan       = $request->input('nama_lapangan');
        $pitch->status_lapangan     = $request->input('status_lapangan');
        $pitch->harga_lapangan      = $request->input('harga_lapangan');
        $pitch->foto_lapangan       = $faker->imageUrl($width = 640, $height = 480, 'city');
        
        $pitch->jadwal_id           = 0;
        $pitch->booking_id          = 0;
        $pitch->venue_id            = $request->input('venue_id');
        $pitch->save();
        
        $request->session()->flash('success', 'The pitch was successfully saved!');
        return redirect('dashboard/pitch');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function show( $lapangan)
    {
        $data = ['pitches' => lapangan::findOrFail($lapangan)];
        return view('admin.pitch.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function edit( $lapangan)
    {
        $data = [
        'pitches' => lapangan::findOrFail($lapangan),
        'title' => 'coba',
        'venue_id' => \App\venue::pluck('nama_venue', 'id' )

        ];
        return view('admin.pitch.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lapangan)
    {
        Validator::make($request->all(), [
            'nama_lapangan'  => 'required|min:5|max:20',
            'status_lapangan' => 'required|min:5|max:100',
            'harga_lapangan'  => 'required|min:5|max:6',
            'foto_lapangan'  => 'nullable',
            'jadwal_id'  => 'nullable',
            'booking_id'  => 'nullable',
        ])->validate();
        
        $pitch                      = lapangan::findOrFail($lapangan);
        $pitch->nama_lapangan       = $request->input('nama_lapangan');
        $pitch->status_lapangan     = $request->input('status_lapangan');
        $pitch->harga_lapangan      = $request->input('harga_lapangan');
        $pitch->foto_lapangan       = $request->input('foto_lapangan');
        $pitch->jadwal_id           = rand(1,3);
        $pitch->booking_id          = rand(1,3);
        $pitch->venue_id            = $request->input('venue_id');;
        $pitch->save();
        
        $request->session()->flash('success', 'The pitch was successfully updated!');
        return redirect('dashboard/pitch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $lapangan)
    {
        $pitches = lapangan::findOrFail($lapangan);
        $pitches->delete();
        Session::flash('success', 'The data was successfully deleted!');
        return redirect('dashboard/pitch');
    }
}
