<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;

use App\Models\{
    Id,
    IdComment,
    Uuid,
    UuidComment
};

class PerformanceController extends Controller
{
    public function testA()
    {
        // $idData = Id::with(['idComments' => function ($query) {
        //     $query->where('name', 'like', 'J%');
        // }])->get();

        // $uuidData = Uuid::with(['uuidComments' => function ($query) {
        //     $query->where('name', 'like', 'J%');
        // }])->get();

        Benchmark::dd([
            fn() => Id::with(['idComments' => function ($query) {
                $query->where('name', 'like', 'J%');
            }])->get(),

            fn() => Uuid::with(['uuidComments' => function ($query) {
                $query->where('name', 'like', 'J%');
            }])->get(),
        ],1);

        // dd($uuidData);
    }
}
