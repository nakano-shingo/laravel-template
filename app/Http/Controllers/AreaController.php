<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Area::all());
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
        Log::debug($request);
        $area = new Area;
        $area->name = $request->name;
        $area->description = $request->description;
        $area->basic_start_time = $request->basic_start_time;
        $area->basic_end_time = $request->basic_end_time;
        $area->start_datetime = $request->start_datetime;
        $area->end_datetime = $request->end_datetime;
        $area->save();
        return redirect('api/area');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Area::find($id));
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
        $area = Area::find($id);
        $area->name = $request->name;
        $area->description = $request->description;
        $area->basic_start_time = $request->basic_start_time;
        $area->basic_end_time = $request->basic_end_time;
        $area->start_datetime = $request->start_datetime;
        $area->end_datetime = $request->end_datetime;
        $area->save();
        return redirect("api/area/" . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Areaicle::find($id);
        $area->delete();
        return redirect('api/area');
    }
}
