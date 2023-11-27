<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            'categories' => Category::all()
        ]);
    }
}
