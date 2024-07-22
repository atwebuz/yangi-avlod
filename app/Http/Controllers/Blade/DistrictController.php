<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Districts;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = Districts::with('region')->get();
        return view('pages.districts.index', compact('districts'));
    }

    public function add()
    { 
        $regions = Regions::get()->all();
        return view('pages.districts.add', compact('regions'));
    }

    public function create(Request $request)
    {
        $district = new Districts();
        $district->name_uz = $request->get('name_uz');
        $district->name_ru = $request->get('name_ru');
        $district->region_id = $request->get('region_id');
        $district->save();
        return redirect()->route('districtIndex');
    }

    public function edit($id)
    {
        $regions = Regions::get()->all();
        $district = Districts::where('id', $id)->get()->first();
        return view('pages.districts.edit', compact('district', 'regions'));
    }

    public function update(Request $request, $id)
    {
        $district = Districts::find($id);
        $district->name_uz = $request->get('name_uz');
        $district->name_ru = $request->get('name_ru');
        $district->region_id = $request->get('region_id');
        $district->save();
        return redirect()->route('districtIndex');
    }

    public function destroy($id)
    {
        $district = Districts::find($id);
        $district->delete();
        message_set("District deleted !",'success',1);
        return redirect()->back();
    }
}
