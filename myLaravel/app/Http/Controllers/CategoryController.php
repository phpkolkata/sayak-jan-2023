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

        $rows = DB::table('category')->paginate(10);
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
            'name' => 'required|max:7|min:2',
            'is_active' => 'required',
        ]);

        $data = $r->except('_token');

        DB::table('category')->insert($data);

        return redirect("/category/listing")->with('msg', 'Category Added!');

        // return view("category/submitted", ["data" => $data]);
    }

    public function delete($id)
    {
        // return $id;

        $del = DB::table('category')->where('id', '=', $id)->delete();
        return redirect()->route('clist')->with('msg', 'Category deleted!');
    }

    public function edit($id)
    {
        $data = DB::table('category')->where("id", $id)->get();
        // return $data;
        return view('category/edit', ["data" => $data]);

    }

    public function updateCat(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required|min:2',
            'is_active' => 'required',
        ]);

        $data = $r->except('_token', 'cid');
        $cid = $r->input('cid');

        DB::table('category')->where("id", $cid)->update($data);

        return redirect("/category/listing")->with('msg', 'Category Updated!');

    }

}
