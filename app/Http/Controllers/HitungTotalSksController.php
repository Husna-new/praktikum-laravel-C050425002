<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Controllers\HitungTotalSksController;

Route::get('/matakuliah/total-sks', HitungTotalSksController::class);

class HitungTotalSksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $totalSks = Matakuliah::sum('sks'); // Asumsi kolom SKS bernama 'sks'
        return "Jumlah total SKS dari seluruh mata kuliah di database adalah: {$totalSks} SKS";
    }
}
