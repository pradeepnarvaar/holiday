<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins= DB::table('tbl_webusers')->get();
        $roles=DB::table('tbl_roles')->get();
        $locations=DB::table('tbl_locations')->get();
        $arrayName = array('roles' => $roles, 'locations'=>$locations,'admins'=>$admins,);
        return view('admin.admin_users.index')->with($arrayName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=DB::table('tbl_roles')->get();
        $locations=DB::table('tbl_locations')->get();
        $arrayName = array('roles' => $roles, 'locations'=>$locations);
        return view('admin.admin_users.add')->with($arrayName);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $update_admins = Admin::find($id)->get();

        $roles=DB::table('tbl_roles')->get();
        $locations=DB::table('tbl_locations')->get();
        $arrayName = array('roles' => $roles, 'locations'=>$locations,'update_admins'=>$update_admins);
        return view('admin.admin_users.edit')->with($arrayName);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
