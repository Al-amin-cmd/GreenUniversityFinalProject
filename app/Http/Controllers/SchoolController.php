<?php

namespace App\Http\Controllers;

use App\Models\Campe;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $school = School::all();
        $campes = Campe::all();
        return view('../admin/school.index', compact('school','campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campes = Campe::pluck('name','id')->toArray();
        // dd($campes);
        return view('../admin/school.create', compact('campes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $number = mt_rand(1000000000,9999999999);
        if($this->schoolCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $school_code = $request['school_code'] = "SC".$number;

        $requestData = [
            'school_code'=>$school_code,
            'campe_id' =>$request->campe_id,
            'name' =>$request->name,
            'location' =>$request->location,


        ];



        School::create($requestData,$number);

        // School::create($request->all());
        return redirect()->route('school.create')->withMessage('Successfully created');
    }
    public function schoolCodeExists($number){
        return School::whereSchoolCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        // $school = School::find($id);
        // return view('../admin/school/show', compact('school'));
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
        $school = School::find($id);
        return view('../admin/school.edit',compact('school','campes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $campes = Campe::pluck('name','id');
        $school = School::find($id);

        //dd($school);
        $requestData = [

            'name' =>$request->name,
            'location' =>$request->location,


        ];

        $school->update($requestData);

        // School::create($request->all());
        return redirect()->route('school.index', compact('campes'))->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $school = School::find($id);
        $school->delete();
        return redirect()->route('school.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $school = School::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/school.trash',compact('school'));
    }

    public function restore($id){
        $school = School::onlyTrashed()->find($id);
        $school->restore();

        return redirect()->route('school.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        // dd('fjds');
        $school = School::onlyTrashed()->find($id);
        $school->forceDelete();

        return redirect()->route('school.index')->withMessage('Successfully deleted');

    }


}