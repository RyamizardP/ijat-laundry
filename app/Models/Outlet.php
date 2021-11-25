<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Outlet extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('outlets')->get();
    }

    public function addData($data)
    {
        return DB::table('outlets')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('outlets')->where('id', $id)->first();
    }
}