<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GoodResource;
use App\Models\Good;

class GoodController extends Controller
{
    public function index()
    {
        return GoodResource::collection(Good::all());
    }
}
