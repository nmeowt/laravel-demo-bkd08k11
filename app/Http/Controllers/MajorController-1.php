<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Major;

class MajorController extends Controller
{
    public function create()
    {
        return view('major.create');
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        // DB::insert("INSERT INTO major(nameMajor) VALUES ('$name')"); # Query raw
        // DB::table('major')->insert([
        //     "nameMajor" => $name
        // ]); # Query builder
        $major = new Major();
        $major->nameMajor = $name;
        $major->save();
    }
}
