<?php

namespace App\Http\Controllers;

use App\Models\Campe;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $campes = Campe::all();
        $peoples = People::all();
        return view('../admin/people/index', compact('peoples','campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $campes = Campe::all();
        return view('../admin/people/create', compact('campes'));
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

        $nid_code = $request['nid_code'] = "RMS".$number."2023";

        $requestData = [
            'nid_code'=>$nid_code,
            'campe_id' =>$request->campe_id,
            'first_name' =>$request->first_name,
            'middile_name' =>$request->middile_name,
            'last_name' =>$request->last_name,
            'full_name_bangla' =>$request->full_name_bangla,
            'father_name' =>$request->father_name,
            'father_name_bangla' =>$request->father_name_bangla,
            'father_nid_no' =>$request->father_nid_no,
            'mother_name' =>$request->mother_name,
            'mother_name_bangla' =>$request->mother_name_bangla,
            'mother_nid_no' =>$request->mother_nid_no,
            'spouses_name' =>$request->spouses_name,
            'spouses_name_bangla' =>$request->spouses_name_bangla,
            'spouses_nid_no' =>$request->spouses_nid_no,
            'dob' =>$request->dob,
            'mobile_no' =>$request->mobile_no,
            'birth_place' =>$request->birth_place,
            'nationality' =>$request->nationality,
            'religion' =>$request->religion,
            'blood_group' =>$request->blood_group,
            'gender' =>$request->gender,
            'eduction_level' =>$request->eduction_level,
            'befor_profession' =>$request->befor_profession,
            'disables' =>$request->disables,
            'permament_village' =>$request->permament_village,
            'permament_post_office' =>$request->permament_post_office,
            'permament_post_code' =>$request->permament_post_code,
            'permament_thana' =>$request->permament_thana,
            'permament_district' =>$request->permament_district,
            'permament_division' =>$request->permament_division,
            'present_campe_name' =>$request->present_campe_name,
            'present_campe_address' =>$request->present_campe_address,
            'present_campe_location' =>$request->present_campe_location,
            'document' =>$request->document,
            'image' => $this->uploadImage($request->file('image'))
        ];



        People::create($requestData,$number);

        // People::create($request->all());
        return redirect()->route('people.create')->withMessage('Successfully created');
    }
    public function nidCodeExists($number){
        return people::whereNidCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $people = People::find($id);
        return view('../admin/people/show', compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        //dd('dfdd');
        $campes = Campe::all();
        $people = People::find($id);
        return view('../admin/people.edit',compact('people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $people = People::find($id);

        //dd($people);
        $requestData = [

            'first_name' =>$request->first_name,
            'middile_name' =>$request->middile_name,
            'last_name' =>$request->last_name,
            'full_name_bangla' =>$request->full_name_bangla,
            'father_name' =>$request->father_name,
            'father_name_bangla' =>$request->father_name_bangla,
            'father_nid_no' =>$request->father_nid_no,
            'mother_name' =>$request->mother_name,
            'mother_name_bangla' =>$request->mother_name_bangla,
            'mother_nid_no' =>$request->mother_nid_no,
            'spouses_name' =>$request->spouses_name,
            'spouses_name_bangla' =>$request->spouses_name_bangla,
            'spouses_nid_no' =>$request->spouses_nid_no,
            'dob' =>$request->dob,
            'mobile_no' =>$request->mobile_no,
            'birth_place' =>$request->birth_place,
            'nationality' =>$request->nationality,
            'religion' =>$request->religion,
            'blood_group' =>$request->blood_group,
            'gender' =>$request->gender,
            'eduction_level' =>$request->eduction_level,
            'befor_profession' =>$request->befor_profession,
            'disables' =>$request->disables,
            'permament_village' =>$request->permament_village,
            'permament_post_office' =>$request->permament_post_office,
            'permament_post_code' =>$request->permament_post_code,
            'permament_thana' =>$request->permament_thana,
            'permament_district' =>$request->permament_district,
            'permament_division' =>$request->permament_division,
            'present_campe_name' =>$request->present_campe_name,
            'present_campe_address' =>$request->present_campe_address,
            'present_campe_location' =>$request->present_campe_location,
            'document' =>$request->document
        ];

        if($request ->hasFile('image')){
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }


        $people->update($requestData);

        // People::create($request->all());
        return redirect()->route('people.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $people = People::find($id);
        $people->delete();
        return redirect()->route('people.index')->withMessage('Successfully delte');
    }

    public function trash()
    {
        //

        $people = People::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/people.trash',compact('people'));
    }

    public function restore($id){
        $people = People::onlyTrashed()->find($id);
        $people->restore();

        return redirect()->route('people.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $people = People::onlyTrashed()->find($id);
        $people->forceDelete();

        return redirect()->route('people.index')->withMessage('Successfully deleted');

    }


    public function uploadImage($image){
        $originalName = $image->getClientOriginalExtension();
        $fileName = date('Y-m-d').time().$originalName;
        $image->move( storage_path('/app/public/People_image'), $fileName);


        return $fileName;
    }
}