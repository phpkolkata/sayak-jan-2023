<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($id)
    {
        //logics
        return "indexing $id";
    }

    public function demo()
    {
        //logics
        return view("category/demo");
    }

    public function add()
    {
        // return view('views/category/add.blade.php');
        return view('category/add', ['title' => 'ADD CATEGORY']);
    }

    public function addCat(Request $r)
    {
        // return $r->all();
        // return $r->except('_token');
        // return $r->input('cname');

        // validataion
        $validated = $r->validate([
            'cname' => 'required|max:7|min:2',
            'price' => 'required|numeric',
        ]);

        $data = $r->except('_token');
        return view("category/submitted", ["data" => $data]);
    }

}
