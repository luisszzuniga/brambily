<?php

namespace App\Http\Controllers;

use App\Models\MonstresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MonstresController extends Controller
{
    public function index(int $id)
    {
        $monstres = MonstresModel::all();
        Session::flash('error', 'cest une erreur');
        $monstre = MonstresModel::find(2);
        $monstre->name = 'Gregorieeeeeeee';
        $monstre->save();
        return view('monstres', compact('monstres', 'id'));
    }
}
