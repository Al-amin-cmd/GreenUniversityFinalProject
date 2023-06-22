<?php

namespace App\Http\Controllers;

use App\Models\Campe;
use App\Models\Hostipal;
use Illuminate\Http\Request;

class HostipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $hospital = Hostipal::all();
        $campes = Campe::all();
        return view('../admin/hospital.index', compact('hospital','campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campes = Campe::all();
        return view('../admin/hospital.create', compact('campes'));
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

        $station_code = $request['station_code'] = "HC".$number;



        // $requestData = [
        //     'station_code'=>$station_code,
        //     'campe_id' =>$request->campe_id,
        //     'name' =>$request->name,
        //     'present_capacity' =>$request->present_capacity,


        // ];

        $campe = Campe::findOrFail($request->campe_id);

        $campe->hostipals()->create([

            'station_code'=>$station_code,
            'campe_id' =>$request->campe_id,
            'name' =>$request->name,
            'present_capacity' =>$request->present_capacity,
        ]);

        // dd($campe);



        // Hostipal::create();

        // Hostipal::create($request->all());
        return redirect()->route('hospital.create')->withMessage('Successfully created');
    }
    public function nidCodeExists($number){
        return Hostipal::whereStationCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        // $hospital = Hostipal::find($id);
        // return view('../admin/hospital/show', compact('hospital'));
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
        $hospital = Hostipal::find($id);
        return view('../admin/hospital.edit',compact('hospital','campes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $campes = Campe::pluck('name','id');
        $hospital = Hostipal::find($id);

        //dd($hospital);
        $requestData = [
            'name' =>$request->name,
            'present_capacity' =>$request->present_capacity,
        ];

        $hospital->update($requestData);

        // Hostipal::create($request->all());
        return redirect()->route('hospital.index', compact('campes'))->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $hospital = Hostipal::find($id);
        $hospital->delete();
        return redirect()->route('hospital.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $hospital = Hostipal::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/hospital.trash',compact('hospital'));
    }

    public function restore($id){
        $hospital = Hostipal::onlyTrashed()->find($id);
        $hospital->restore();

        return redirect()->route('hospital.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        // dd('fjds');
        $hospital = Hostipal::onlyTrashed()->find($id);
        $hospital->forceDelete();

        return redirect()->route('hospital.index')->withMessage('Successfully deleted');

    }


}