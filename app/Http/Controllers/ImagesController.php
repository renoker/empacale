<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagesRequest;
use App\Http\Requests\UpdateImagesRequest;
use App\Models\Images;
use App\Models\Week;

class ImagesController extends Controller
{
    public function getImages()
    {
        $week = Week::currentWeek();
        $images = Images::where('week_id', $week->id)->get();

        return response()->json($images);
    }
}
