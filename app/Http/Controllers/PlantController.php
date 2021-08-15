<?php

namespace App\Http\Controllers;


use App\Plant;
use Illuminate\Http\Request;
use App\Http\Resources\PlantResource;
use App\Http\Requests\PlantRequest;

class PlantController extends Controller
{
    public function index()
    {
        return PlantResource::collection(Plant::all());
    }
 
    public function show(Plant $plant)
    {
        // if(empty($plant)) {
        //     return response([], 404);
        // }
        return new PlantResource($plant);
    }
 
    public function create(PlantRequest $request)
    {
        
            $plant = Plant::create($request->validated());
     
            return new PlantResource($plant);
    }
 
    public function update(PlantRequest $request, Plant $plant)
    {
        $plant->update($request->validated());
 
        return new PlantResource($plant);
    }
 
    public function delete(Plant $plant)
    {
        $plant->delete();
 
        return response()->json(null, 204);
    }
}
