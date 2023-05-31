<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index(){
        $temak = Tema::all();
        return $temak;
    }

    public function show($id){
        $temak = Tema::find($id);
        return $temak;
    }

    public function destroy($id){
        Tema::find($id)->delete();
    }

    public function store(Request $request){
        $temak = new Tema();
        $temak->angol = $request->angol;
        $temak->magyar = $request->magyar;
        $temak->temaId = $request->temaId;
        return $temak;
    }

    public function update(Request $request,$id){
        $temak = Tema::find($id);
        $temak->angol = $request->angol;
        $temak->magyar = $request->magyar;
        $temak->temaId = $request->temaId;
        return $temak;
    }
}
