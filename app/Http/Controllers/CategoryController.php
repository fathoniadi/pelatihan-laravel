<?php

namespace App\Http\Controllers;

//Untuk mengambil value yang dikirim oleh user
use Illuminate\Http\Request;

//Untuk validasi
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;


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

        $messageError = [
                'nama.required' => 'Nama tidak boleh kosong'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required'
        ], $messageError);

        if($validator->fails())
        {
            return redirect('/category/create')->withErrors($validator);
        }
        
    	$category = new Category();
    	$category->nama = $request->nama;
    	if($category->save())
    	{
    		return redirect('/category/index')->with('sukses', 'Data kategori berhasil disimpan :)');
    	}
    	else
    	{
    		return redirect('/category/create')->withErrors(['Data kategori gagal disimpan :(']);
    	}


    }

    public function destroy($id){
        $category = Category::find($id);
        if(!$category){
            return abort(404);
        }
        $category->delete();
        return redirect('/category/index')->with('sukses','Data berhasil di delete');
    }


    public function edit($id){
        $data['category'] = Category::find($id);
        return view('category.edit',$data);
    }

    public function update(Request $request, $id){
        $messageError = [
                'nama.required' => 'Nama tidak boleh kosong'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required'
        ], $messageError);

        if($validator->fails())
        {
            return redirect('/category/'.$id.'/edit')->withErrors($validator)->withInput();
        }
        
        $category = Category::find($id);
        $category->nama = $request->nama;
        if($category->save())
        {
            return redirect('/category/index')->with('sukses', 'Data kategori berhasil disimpan :)');
        }
        else
        {
            return redirect('/category/'.$id.'/edit')->withErrors(['Data kategori gagal disimpan :('])->withInput();
        }
    }


}
