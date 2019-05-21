<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  /* this function allow to display all category  */
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* this function allow to show the form for create new category  */
    {
        return view('admin.category.create');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  /* this function allow to store new category  */
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->route('category.index')->with('successMsg','Category Successfully Saved');
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) /* this function allow to show the form  for edit category  */
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) /* this function allow to update changes in storage  */
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->route('category.index')->with('successMsg','Category Successfully Updated');
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  /* this function allow to delete  category  */
    {
       Category::find($id)->delete();
       return redirect()->back()->with('successMsg','Category Successfully Delete');
    }
}
