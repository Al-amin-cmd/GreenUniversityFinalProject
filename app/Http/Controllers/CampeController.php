<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampeReqest;
use App\Models\Campe;
use Illuminate\Http\Request;

class CampeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $campes = Campe::all();
        return view('../admin/campes.index', compact('campes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('../admin/campes.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
        $number = mt_rand(1000000000,9999999999);
        if($this->campeCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }

        $campe_code = $request['campe_code'] = "CC".$number;

        $requestData = [
            'campe_code'=>$campe_code,
            'name' =>$request->name,
            'address' =>$request->address,
            'location' =>$request->location,


        ];

        // dd($requestData);
        Campe::create($requestData,$number);

        // Hostipal::create($request->all());
        return redirect()->route('campes.create')->withMessage('Successfully created');
    }

    public function campeCodeExists($number){
        return Campe::whereCampeCode($number)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $campes = Campe::find($id);
        return view('../admin/campes.show', compact('campes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $campes = Campe::find($id);
        return view('../admin/campes.edit', compact('campes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $campes = Campe::find($id);
        $campes->update($request->all());

        // dd($campes);
        return redirect()->route('campes.index')->withMessage('Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $campes = Campe::find($id);
        $campes->delete();
        return redirect()->route('campes.index')->withMessage('Successfully delete');
    }

    public function trash()
    {
        //

        $campes = Campe::onlyTrashed()->get();

        //dd($posts);
        return view('../admin/campes.trash',compact('campes'));
    }

    public function restore($id){
        $campes = Campe::onlyTrashed()->find($id);
        $campes->restore();

        return redirect()->route('campes.index')->withMessage('Successfully restore');

    }

    public function delete($id){
        $campes = Campe::onlyTrashed()->find($id);
        $campes->forceDelete();

        return redirect()->route('campes.index')->withMessage('Successfully deleted');

    }
}
