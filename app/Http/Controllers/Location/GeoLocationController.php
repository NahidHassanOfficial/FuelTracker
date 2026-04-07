<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;

class GeoLocationController extends Controller
{
    public function getDivisions()
    {
        $divisions = Division::active()->orderBy('name')->get();

        return response()->json($divisions);
    }

    public function getDistricts(Division $division)
    {
        $districts = $division->districts()->active()->orderBy('name')->get();

        return response()->json($districts);

    }

    public function getUpazilas(District $district)
    {
        $upazilas = $district->upazilas()->active()->orderBy('name')->get();

        return response()->json($upazilas);
    }
}