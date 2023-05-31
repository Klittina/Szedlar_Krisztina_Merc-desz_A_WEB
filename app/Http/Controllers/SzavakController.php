<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    public function index(){
        $szavak = Szavak::all();
        return $szavak;
    }

    public function show($id){
        $szavak = Szavak::find($id);
        return $szavak;
    }

    public function destroy($id){
        Szavak::find($id)->delete();
    }

    public function store(Request $request){
        $szavak = new Szavak();
        $szavak->angol = $request->angol;
        $szavak->magyar = $request->magyar;
        $szavak->temaId = $request->temaId;
        return $szavak;
    }

    public function update(Request $request,$id){
        $szavak = Szavak::find($id);
        $szavak->angol = $request->angol;
        $szavak->magyar = $request->magyar;
        $szavak->temaId = $request->temaId;
        return $szavak;
    }

    public function szavakTemaval(){
        $szavak = DB::table('szavak as s')
        ->rightJoin('tema as t', 't.id','=','s.temaId');
        return $szavak;
    }
}
