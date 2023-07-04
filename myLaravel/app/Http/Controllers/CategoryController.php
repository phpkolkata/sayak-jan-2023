<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index($id = 0)
    {
        //logics
        // return "indexing $id";

        $rows = DB::table('category')->paginate(2);
        // return $rows;
        return view('category.index', ["db" => $rows]);
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

    public function delete($id)
    {
        // return $id;

        $del = DB::table('category')->where('id', '=', $id)->delete();
        return redirect()->route('clist')->with('msg', 'Category deleted!');
    }

}
