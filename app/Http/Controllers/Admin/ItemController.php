<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     *  this function allow to Display all items 
     *@return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index',compact('items'));

    }

    /**
     *  this function allow to Show the form for creating a new item
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create',compact('categories'));
    }

    /**
     * this function alllow to Store a newly created item in storage db
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);
            }
            $image->move('uploads/item',$imagename);
        }else{
            $imagename = "default.png";
        }
        $item = new Item();
        $item->category_id = $request->category;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imagename;
        $item->save();
        return redirect()->route('item.index')->with('successMsg','Item Successfully Saved');
    }

    /**
     * this funtion allow to Display the specified item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function show($id)
    {
        //
    }

    /**
     *this function allow to  Show the form for editing the item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        return view('admin.item.edit',compact('item','categories'));
    }

    /**
     * this function allow to Update the specified item .
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $item = Item::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);
            }
            unlink('uploads/item/'.$item->image);
            $image->move('uploads/item',$imagename);
        }else{
            $imagename = $item->image;
        }

        $item->category_id = $request->category;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imagename;
        $item->save();
        return redirect()->route('item.index')->with('successMsg','Item Successfully Updated');
    }

    /**
     * this function allow to Remove the specified item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if (file_exists('uploads/item/'.$item->image))
        {
            unlink('uploads/item/'.$item->image);
        }
        $item->delete();
        return redirect()->back()->with('successMsg','Item successfully Deleted');
    }
}
