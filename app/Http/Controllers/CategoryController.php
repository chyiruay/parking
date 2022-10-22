<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; //import

use App\Models\Product; //import
use App\Models\Category; //import

use Session; 

class CategoryController extends Controller
{
    public function store(){
        $r=request(); //request means received the form data by method get or post
        $addCategory=Category::create([
            'id'=>$r->categoryID,  //'id' is  database field name, categoryID is HTML input name
            'name'=>$r->categoryName,
        ]);
        Return redirect()->route('viewCategory'); //after insert redirect to view category
    }


    public function view(){
        $category=Category::all(); //apply SQL select * from categories
        Return view('showCategory')->with('categories',$category);
    }


    public function index(){
        $category=Category::all(); //apply SQL select * from categories
        Return view('insertCategory')->with('categories',$category);
    }


    public function edit($id){

        $category=Category::all()->where('id',$id);
        //select * from categories where id='$id'
        Return view('editCategory')->with('categories',$category);
    }
    
    public function update(){
        $r=request();
        $category=Category::find($r->hid); //retrive the record based on id
        $category->name=$r->categoryName;      
        $category->save();
        Session::flash('success',"Category updated successful!");

        Return redirect()->route('viewCategory');

    }

    public function delete($id){
        $delete=Category::find($id);
        $delete->delete();  //run SQL delete from my_Cart where id=$id
        Return redirect()->route('viewCategory');
    }
}
