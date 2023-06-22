<?php

namespace App\Http\Controllers;

use App\Models\Campe;
use App\Models\PoliceStation;
use Illuminate\Http\Request;


class PoliceStationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $station = PoliceStation::all();
        $campes = Campe::all();
        return view('../admin/policeStation.index', compact('station','campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campes = Campe::pluck('name','id')->toArray();
        // dd($campes);
        return view('../admin/policeStation.create', compact('campes'));
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

        $station_code = $request['station_code'] = "PSTC".$number;

        $requestData = [
            'station_code'=>$station_code,
            'campe_id' =>$request->campe_id,
            'name' =>$request->name,
            'active_force' =>$request->active_force,
            'exat_force' =>$request->exat_force,

        ];



        PoliceStation::create($requestData,$number);

        // PoliceStation::create($request->all());
        return redirect()->route('policeStation.create')->withMessage('Successfully created');
    }
    public function nidCodeExists($number){
        return PoliceStation::whereStationCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        // $station = PoliceStation::find($id);
        // return view('../admin/station/show', compact('station'));
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
        $station = PoliceStation::find($id);
        return view('../admin/policeStation.edit',compact('station','campes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $campes = Campe::pluck('name','id');
        $station = PoliceStation::find($id);

        //dd($station);
        $requestData = [

            'name' =>$request->name,
            'active_force' =>$request->active_force,
            'exat_force' =>$request->exat_force,

        ];

        $station->update($requestData);

        // PoliceStation::create($request->all());
        return redirect()->route('policeStation.index', compact('campes'))->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $station = PoliceStation::find($id);
        $station->delete();
        return redirect()->route('policeStation.index')->withMessage('Successfully delte');
    }

    public function trash()
    {
        //

        $station = PoliceStation::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/policeStation.trash',compact('station'));
    }

    public function restore($id){
        $station = PoliceStation::onlyTrashed()->find($id);
        $station->restore();

        return redirect()->route('policeStation.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        // dd('fjds');
        $station = PoliceStation::onlyTrashed()->find($id);
        $station->forceDelete();

        return redirect()->route('policeStation.index')->withMessage('Successfully deleted');

    }


}