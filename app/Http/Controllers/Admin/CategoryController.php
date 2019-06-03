<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /** 
     * 
     *@return \Illuminate\Http\Response : this function allow to display all category
     *@author Abdelwahed Madani Yousfi
     */
    public function index()  
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * @return \Illuminate\Http\Response : this function allow to show the form for create new category
     *@author  Abdelwahed Madani yousfi  
     */
    public function create() 
    {
        return view('admin.category.create');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response :this function allow to store new category 
     *@author  Abdelwahed Madani yousfi 
     */
    public function store(Request $request)  
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
    * @author  Abdelwahed Madani yousfi 
     */
    public function show($id)
    {
        //
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response :this function allow to show the form  for edit category 
     *@author  Abdelwahed Madani yousfi 
     */
    public function edit($id) 
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response : this function allow to update changes in storage 
     *@author  Abdelwahed Madani yousfi
     */
    public function update(Request $request, $id) 
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
     * @return \Illuminate\Http\Response :this function allow to delete  category
     *@author  Abdelwahed Madani yousfi
     */
    public function destroy($id)  
    {
       Category::find($id)->delete();
       return redirect()->back()->with('successMsg','Category Successfully Delete');
    }
}
