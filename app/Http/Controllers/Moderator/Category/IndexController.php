<?php

namespace App\Http\Controllers\Moderator\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('moderator.category.main', compact('categories'));
    }
}
