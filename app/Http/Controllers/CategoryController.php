<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$data['categories'] = Category::paginate(20);

    	return view('category.index', $data);
    }


    public function create()
    {
    	return view('category.create');
    }


    public function store(Request $request)
    {
    	$category = new Category();
    	$category->nama = $request->nama;
    	if($category->save())
    	{
    		echo "Berhasil";
    	}
    	else
    	{
    		echo "Gagal";
    	}


    }




}
