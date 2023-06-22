<?php

namespace App\Http\Controllers;

use App\Models\Hostipal;
use App\Models\HostipalStaff;
use Illuminate\Http\Request;

class HostipalStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //hospitalStaff.index

        $hospital = Hostipal::all();
        $hospitalStaff = HostipalStaff::all();
        return view('../admin/hospitalStaff/index', compact('hospitalStaff','hospital'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $hospital = Hostipal::pluck('name','id')->toArray();
        return view('../admin/hospitalStaff/create', compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd('dsjfo');
        $number = mt_rand(1000000000,9999999999);
        if($this->hospitalStaffCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $hostipal_staff_code = $request['hostipal_staff_code'] = "HSFC".$number;

        // dd($ploice_code);

        $requestData = [
            'hostipal_staff_code'=>$hostipal_staff_code,
            'name' =>$request->name,
            'designation' =>$request->designation,
            'hostipal_id' =>$request->hostipal_id,
            'image' => $this->uploadImage($request->file('image'))
        ];



        HostipalStaff::create($requestData);

        // People::create($request->all());
        return redirect()->route('hospitalStaff.create')->withMessage('Successfully created');
    }
    public function hospitalStaffCodeExists($number){
        return HostipalStaff::whereHostipalStaffCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $hospitalStaff = HostipalStaff::find($id);
        return view('../admin/hospitalStaff/show', compact('hospitalStaff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $hospitalStaff = HostipalStaff::find($id);
        return view('../admin/hospitalStaff.edit',compact('hospitalStaff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $hospitalStaff = HostipalStaff::find($id);

        //dd($people);
        $requestData = [
            'name' =>$request->name,
            'designation' =>$request->designation,

        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }


        $hospitalStaff->update($requestData);

        // People::create($request->all());
        return redirect()->route('hospitalStaff.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $hospitalStaff = HostipalStaff::find($id);
        $hospitalStaff->delete();
        return redirect()->route('hospitalStaff.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $hospitalStaff = HostipalStaff::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/hospitalStaff.trash',compact('hospitalStaff'));
    }

    public function restore($id){
        $hospitalStaff = HostipalStaff::onlyTrashed()->find($id);
        $hospitalStaff->restore();

        return redirect()->route('hospitalStaff.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $hospitalStaff = HostipalStaff::onlyTrashed()->find($id);
        $hospitalStaff->forceDelete();

        return redirect()->route('hospitalStaff.index')->withMessage('Successfully deleted');

    }


    // public function uploadImage($image){
    //     $originalName = $image->getClientOriginalExtension();
    //     $fileName = date('Y-m-d').time().$originalName;
    //     $image->move( storage_path('/app/public/Hospital_staff_image'), $fileName);


    //     return $fileName;
    // }

    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/Hospital_staff_image'), $fileName);


        return $fileName;
    }
}