<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannrPhoto;

class BannerController extends Controller
{
    public function getImageByBannerId($id = 1)
    {
        return BannrPhoto::query()->where('banner_id', $id)->orderBy('created_at')->get();       
    }
}
