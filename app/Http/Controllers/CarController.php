<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\Car\IndexRequest;
use App\Http\Filters\CarFilter;

class CarController extends Controller
{
    public function index(IndexRequest $request) {
        $data = $request->validated();

        $filter = app()->make(CarFilter::class, ['queryParams' => array_filter($data)]);

        $cars = Car::filter($filter)->paginate(15);

        return view('cars', ['cars' => $cars]);
    }
}
