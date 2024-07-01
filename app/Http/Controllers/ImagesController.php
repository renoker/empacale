<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagesRequest;
use App\Http\Requests\UpdateImagesRequest;
use App\Models\Images;

class ImagesController extends Controller
{
    public function getImages()
    {
        $images = Images::all(); // Suponiendo que tienes un modelo Image
        return response()->json($images);
    }
}
