<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategoryModel;
use App\Models\PlateModel;
use App\Models\OrderModel;

class IndexController extends Controller
{
    public function index()
    {
        $categories = MenuCategoryModel::all();
        $plates = PlateModel::all();

        return view('index', compact('categories', 'plates'));
    }

    public function mentionsLegales()
    {
        return view('mentionsLegales');
    }
}
