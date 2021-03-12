<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class MooraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function matrix()
    {
        $matrix = Helper::valMatrix();

        return view('moora/matrix', compact('matrix'));
    }

    public function normalization()
    {
        $normal = Helper::valNormal();
        $matrix = Helper::valMatrix();

        return view('moora/normalization', compact('normal', 'matrix'));
    }

    public function optimization()
    {
        $alternative = Helper::getAlternative();
        $optimization = Helper::valOptimize();

        return view('moora/optimization', compact('optimization', 'alternative'));
    }

    public function ranking()
    {
        $alternative = Helper::getAlternative();
        $optimization = Helper::valOptimize();

        //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
        arsort($optimization);
        //-- mendapatkan key/index item array yang pertama
        $index = key($optimization);

        $rank = 1;

        return view('moora/ranking', compact('optimization', 'alternative', 'rank'));
    }
}
