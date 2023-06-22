<?php

namespace App\Http\Controllers;

use App\Models\PrayerPlace;
use App\Models\PrayerStaff;
use Illuminate\Http\Request;

class PrayerStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //PrayerStaff

        $prayerPlace = PrayerPlace::all();
        $prayerStaff = PrayerStaff::all();
        return view('../admin/prayerStaff/index', compact('prayerStaff', 'prayerPlace'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $prayerPlace = PrayerPlace::pluck('name','id')->toArray();
        return view('../admin/prayerStaff/create', compact('prayerPlace'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd('dsjfo');
        $number = mt_rand(1000000000,9999999999);
        if($this->prayerStaffCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $prayerStaff_code = $request['prayerStaff_code'] = "PSFC".$number;

        // dd($ploice_code);

        $requestData = [
            'prayerStaff_code'=>$prayerStaff_code,
            'name' =>$request->name,
            'designation' =>$request->designation,
            'prayer_places_id' =>$request->prayer_places_id,
            'image' => $this->uploadImage($request->file('image'))
        ];



        PrayerStaff::create($requestData);

        // People::create($request->all());
        return redirect()->route('prayerStaff.create')->withMessage('Successfully created');
    }
    public function prayerStaffCodeExists($number){
        return PrayerStaff::wherePrayerStaffCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $prayerStaff = PrayerStaff::find($id);
        return view('../admin/prayerStaff/show', compact('prayerStaff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $prayerStaff = PrayerStaff::find($id);
        return view('../admin/prayerStaff.edit',compact('prayerStaff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $prayerStaff = PrayerStaff::find($id);

        //dd($prayerStaff);
        $requestData = [
            'name' =>$request->name,
            'designation' =>$request->designation,

        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }


        $prayerStaff->update($requestData);

        // People::create($request->all());
        return redirect()->route('prayerStaff.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $prayerStaff = PrayerStaff::find($id);
        $prayerStaff->delete();
        return redirect()->route('prayerStaff.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $prayerStaff = PrayerStaff::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/prayerStaff.trash',compact('prayerStaff'));
    }

    public function restore($id){
        $prayerStaff = PrayerStaff::onlyTrashed()->find($id);
        $prayerStaff->restore();

        return redirect()->route('prayerStaff.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $prayerStaff = PrayerStaff::onlyTrashed()->find($id);
        $prayerStaff->forceDelete();

        return redirect()->route('prayerStaff.index')->withMessage('Successfully deleted');

    }


    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/Prayer_staff_image'), $fileName);


        return $fileName;
    }
}
