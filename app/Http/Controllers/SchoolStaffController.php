<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\schoolStaff;
use Illuminate\Http\Request;

class SchoolStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //schoolStaff

        $school = School::all();
        $schoolStaff = schoolStaff::all();
        return view('../admin/schoolStaff/index', compact('schoolStaff','school'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $school = School::pluck('name','id')->toArray();
        return view('../admin/schoolStaff/create', compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd('dsjfo');
        $number = mt_rand(1000000000,9999999999);
        if($this->schoolStaffCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $school_staff_code = $request['school_staff_code'] = "SCSFC".$number;

        // dd($ploice_code);

        $requestData = [
            'school_staff_code'=>$school_staff_code,
            'name' =>$request->name,
            'designation' =>$request->designation,
            'school_id' =>$request->school_id,
            'position' =>$request->position,
            'image' => $this->uploadImage($request->file('image'))
        ];



        schoolStaff::create($requestData);

        // People::create($request->all());
        return redirect()->route('schoolStaff.create')->withMessage('Successfully created');
    }
    public function schoolStaffCodeExists($number){
        return schoolStaff::whereschoolStaffCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $schoolStaff = schoolStaff::find($id);
        return view('../admin/schoolStaff/show', compact('schoolStaff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $schoolStaff = schoolStaff::find($id);
        return view('../admin/schoolStaff.edit',compact('schoolStaff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $schoolStaff = schoolStaff::find($id);

        //dd($schoolStaff);
        $requestData = [
            'name' =>$request->name,
            'designation' =>$request->designation,

            'position' =>$request->position,
        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }


        $schoolStaff->update($requestData);

        // People::create($request->all());
        return redirect()->route('schoolStaff.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $schoolStaff = schoolStaff::find($id);
        $schoolStaff->delete();
        return redirect()->route('schoolStaff.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $schoolStaff = schoolStaff::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/schoolStaff.trash',compact('schoolStaff'));
    }

    public function restore($id){
        $schoolStaff = schoolStaff::onlyTrashed()->find($id);
        $schoolStaff->restore();

        return redirect()->route('schoolStaff.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $schoolStaff = schoolStaff::onlyTrashed()->find($id);
        $schoolStaff->forceDelete();

        return redirect()->route('schoolStaff.index')->withMessage('Successfully deleted');

    }


    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/School_staff_image'), $fileName);


        return $fileName;
    }
}
