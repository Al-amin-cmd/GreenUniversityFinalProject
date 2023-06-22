<?php

namespace App\Http\Controllers;

use App\Models\Police;
use App\Models\PoliceStation;
use Illuminate\Http\Request;

class PoliceStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $police = Police::all();
        $station = PoliceStation::all();

        return view('../admin/police/index', compact('police','station'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $station = PoliceStation::pluck('name','id')->toArray();
        return view('../admin/police/create', compact('station'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd('dsjfo');
        $number = mt_rand(1000000000,9999999999);
        if($this->policeCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $police_code = $request['police_code'] = "PC".$number;

        // dd($ploice_code);

        $requestData = [
            'police_code'=>$police_code,
            'name' =>$request->name,
            'designation' =>$request->designation,
            'police_station_id' =>$request->police_station_id,
            'status' =>$request->status,
            'image' => $this->uploadImage($request->file('image'))
        ];



        Police::create($requestData);

        // People::create($request->all());
        return redirect()->route('police.create')->withMessage('Successfully created');
    }
    public function policeCodeExists($number){
        return Police::wherePoliceCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $police = Police::find($id);
        return view('../admin/police/show', compact('police'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $police = Police::find($id);
        return view('../admin/police.edit',compact('police'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $police = Police::find($id);

        //dd($police);
        $requestData = [
            'name' =>$request->name,
            'designation' =>$request->designation,
            'status' =>$request->status,

        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }


        $police->update($requestData);

        // People::create($request->all());
        return redirect()->route('police.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $police = Police::find($id);
        $police->delete();
        return redirect()->route('police.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $police = Police::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/police.trash',compact('police'));
    }

    public function restore($id){
        $police = Police::onlyTrashed()->find($id);
        $police->restore();

        return redirect()->route('police.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $police = Police::onlyTrashed()->find($id);
        $police->forceDelete();

        return redirect()->route('police.index')->withMessage('Successfully deleted');

    }


    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/Police_image'), $fileName);


        return $fileName;
    }
}