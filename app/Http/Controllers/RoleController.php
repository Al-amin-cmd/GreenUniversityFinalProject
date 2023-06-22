<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $users = User::all();
        //dd($users);
        return view('../admin/userRole.index',compact('users'));
    }

    public function show($id){
        //dd($id);
        $users = User::find($id);
        //dd($users);
        return view('../admin/userRole.show', compact('users'));
    }


    public function edit(string  $id)
    {
        //
        // dd('sjdfks');
        $users = User::find($id);

        //dd($users);
        return view('../admin/userRole.edit',compact('users'));
    }

    public function update(Request $request, string $id)
    {
        //
        $users = User::find($id);

        //dd($prayerStaff);
        $requestData = [
            'name' =>$request->name,

        ];

        $users->update($requestData);

        // People::create($request->all());
        return redirect()->route('../admin/userRole.index')->withMessage('Successfully update');
    }


    public function destroy($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->route('role')->withMessage('Successfully deleted');
    }
}
