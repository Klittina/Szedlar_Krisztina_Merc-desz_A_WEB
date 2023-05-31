<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'angol',
        'magyar',
        'temaId'
    ];

    public function szavakTemaval(){
        $szavak = DB::table('szavak as s')
        ->rightJoin('tema as t', 't.id','=','s.temaId');
        return $szavak;
    }

}
