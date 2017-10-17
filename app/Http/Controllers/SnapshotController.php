<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snapshot;
use App\File as fileentry;
use Alert;
use Validator, Redirect;
use App\Http\Traits\SnapshotTrait;

class SnapshotController extends Controller
{
    use SnapshotTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get distinct domain, date of last snapshot, and number of snapshots

        
        $snapshots = Snapshot::get();
        return view('snapshots')->with(compact('snapshots'));
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


        //take snap
        $file_id = $this->takeSnap($request->input('website'));
        //get domain
        $parse = parse_url($request->input('website'));
        $domain = $parse['host'];

        //store the snap
        $snap = new Snapshot;
        $snap->url = $request->input('website');
        $snap->domain = $domain;
        $snap->file_id = $file_id;
        if(Auth::user()){
            $snap->user_id = Auth::user()->id;
        }
        $snap->save();

        $my_snap = $snap->with('file');
        if(Auth::user()){
            //go to individual page for domain
            return Redirect::back()->with(compact('my_snap'));
        }else{
            //go to one image
            return Redirect::back()->with(compact('my_snap'));
        }
        
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
