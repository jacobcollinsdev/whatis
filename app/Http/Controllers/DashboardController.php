<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $keywords = Keyword::all();

        $keyword = $keywords->random();

        return inertia('Dashboard', [
            'keywords' => $keywords,
            'keyword' => $keyword,
        ]);
    }
}
