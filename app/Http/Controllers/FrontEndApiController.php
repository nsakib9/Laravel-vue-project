<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class FrontEndApiController extends Controller
{
    public function getCtegories()
    {
        $categories = Category::all();
        return response($categories);
    }
}
