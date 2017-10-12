<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snapshot;
use Alert;
use Validator, Redirect;

class SnapshotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$snapshots = Auth::user()->snapshots()->get();
        $snapshots = Snapshot::get();
        return $snapshots;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validate url
        $validator = Validator::make($request->all(), [
            'website' => 'required|url',
        ]);

        if ($validator->fails()) {
            Alert::error($validator->errors()->first('website'), 'Error');
            //return $validator->errors();
            return Redirect::back()->withErrors($validator)->withInput();
        }
        Alert::success('Success Message', 'All good');
        return Redirect::back();
        //check if extra fields
        //check if user logged in
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
        //
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
