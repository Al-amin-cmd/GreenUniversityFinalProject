<?php

namespace App\Http\Controllers;

use App\Models\Campe;
use App\Models\PrayerPlace;
use Illuminate\Http\Request;

class PrayerPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $prayerPlace = PrayerPlace::all();
        $campes = Campe::all();
        return view('../admin/prayerPlace.index', compact('prayerPlace','campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campes = Campe::pluck('name','id')->toArray();
        // dd($campes);
        return view('../admin/prayerPlace.create', compact('campes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $number = mt_rand(1000000000,9999999999);
        if($this->nidCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $station_code = $request['station_code'] = "PPC".$number;

        $requestData = [
            'station_code'=>$station_code,
            'campe_id' =>$request->campe_id,
            'name' =>$request->name,
            'location' =>$request->location,


        ];



        PrayerPlace::create($requestData,$number);

        // PrayerPlace::create($request->all());
        return redirect()->route('prayerPlace.create')->withMessage('Successfully created');
    }
    public function nidCodeExists($number){
        return PrayerPlace::whereStationCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        // $prayerPlace = PrayerPlace::find($id);
        // return view('../admin/prayerPlace/show', compact('prayerPlace'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $campes = Campe::all();

        // dd($campes);
        $prayerPlace = PrayerPlace::find($id);
        return view('../admin/prayerPlace.edit',compact('prayerPlace','campes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $campes = Campe::pluck('name','id');
        $prayerPlace = PrayerPlace::find($id);

        //dd($prayerPlace);
        $requestData = [

            'name' =>$request->name,
            'location' =>$request->location,


        ];

        $prayerPlace->update($requestData);

        // PrayerPlace::create($request->all());
        return redirect()->route('prayerPlace.index', compact('campes'))->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $prayerPlace = PrayerPlace::find($id);
        $prayerPlace->delete();
        return redirect()->route('prayerPlace.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $prayerPlace = PrayerPlace::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/prayerPlace.trash',compact('prayerPlace'));
    }

    public function restore($id){
        $prayerPlace = PrayerPlace::onlyTrashed()->find($id);
        $prayerPlace->restore();

        return redirect()->route('prayerPlace.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        // dd('fjds');
        $prayerPlace = PrayerPlace::onlyTrashed()->find($id);
        $prayerPlace->forceDelete();

        return redirect()->route('prayerPlace.index')->withMessage('Successfully deleted');

    }


}