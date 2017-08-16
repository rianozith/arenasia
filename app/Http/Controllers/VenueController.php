<?php

namespace App\Http\Controllers;

use App\venue;
use App\lapangan;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Session;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
                'venues' => venue::paginate(15),
                'hitung' => lapangan::where('id', '=', 'venue_id')->count(),
                ];
        return view('admin.venue.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.venue.create');
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
            'nama_venue'  => 'required|min:5|max:15',
            'alamat_venue' => 'required|min:5|max:100',
            'telp_venue'  => 'required',
            'info_venue'  => 'required',
        ])->validate();
        
        $venue                      = new venue;
        $venue->nama_venue            = $request->input('nama_venue');
        $venue->alamat_venue           = $request->input('alamat_venue');
        $venue->telp_venue           = $request->input('telp_venue');
        $venue->info_venue           = $request->input('info_venue');
        $venue->lapangan_id           = 0;
        $venue->lokasi_id           = 0;
        $venue->save();
        
        $request->session()->flash('success', 'The venue was successfully saved!');
        return redirect('dashboard/venue');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ['venue' => venue::find($id)];
        return view('admin.venue.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
        'venue' => venue::findOrFail($id),
        'title' => 'coba'
        ];
        return view('admin.venue.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venue $venue)
    {
        $this->validate($request, [
            'nama_venue'  => 'required|min:5|max:15',
            'alamat_venue' => 'required|min:5|max:100',
            'telp_venue'  => 'required',
            'info_venue'  => 'required',
        ]);
        
        $venue                  = venue::findOrFail($venue);
        $venue->nama_venue      = $request->input('nama_venue');
        $venue->alamat_venue    = $request->input('alamat_venue');
        $venue->telp_venue      = $request->input('telp_venue');
        $venue->info_venue      = $request->input('info_venue');
        $venue->lapangan_id     = 0;
        $venue->lokasi_id       = 0;
        $venue->save();
        
        $request->session()->flash('success', 'The venue was successfully Updated!');
        return redirect('dashboard/venue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venue = venue::find($id);
        $venue->delete();
        Session::flash('success', 'The data was successfully deleted!');
        return redirect('dashboard/venue');
    }

    public function daftar($id)
    {
        $data =[ 
            'lists' => \DB::table('lapangans')
                        ->join('venues', 'lapangans.venue_id', '=', 'venues.id')
                        ->select(
                            'lapangans.id',
                            'lapangans.nama_lapangan',
                            'lapangans.status_lapangan',
                            'lapangans.harga_lapangan',
                            'lapangans.foto_lapangan',
                            'lapangans.jadwal_id',
                            'lapangans.booking_id',
                            'venues.nama_venue'
                            )->where('lapangans.venue_id', '=', $id)
                        ->paginate(10)
            // 'lists' => \DB::table('lapangans')->select('*')->where('venue_id','=',$id)->get()
            ];
        return view('admin.venue.list',$data);
    }


   
}
