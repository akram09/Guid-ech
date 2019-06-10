<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Auth;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * this function allow to Display a listing of sliders.
     *
     * @return \Illuminate\Http\Response
    *@author Abdelwahed  Madan yousfi / Moncef reggam
     */
    public function index()
    {
        $sliders = Slider::where('user_id' , Auth::user()->id)->get();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * this function allow to Show the form for creating a new slider.
     *
     * @return \Illuminate\Http\Response
     *@author Madan yousfi Abdelwahed / Moncef reggam
      */
    public function create()
    {
        $restaurants = Restaurant::where('user_id' , Auth::user()->id)->get();
        return view('admin.slider.create' , compact('restaurants'));
    }

    /**
     *  this function allow to Store a newly created slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *@author Abdelwahed  Madan yousfi 
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777 , true);
            }
            $image->move('uploads/slider',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $imagename;
        $slider->user_id = Auth::user()->id;
        $slider->restaurant_id = $request->restaurant_id;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','Slider Successfully Saved');
    }

    /**
     * Display the specified slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed  Madan yousfi 
     */
    public function show($id)
    {
        //
    }

    /**
     * this function allow to Show the form for editing the specified slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed  Madan yousfi 
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * this function allow to Update the specified slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *@author Abdelwahed  Madan yousfi 
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $slider = Slider::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777 , true);
            }
            $image->move('uploads/slider',$imagename);
        }else {
            $imagename = $slider->image;
        }

        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $imagename;
        $item->user_id = Auth::user()->id;
        $item->restaurant_id = $request->restaurant_id;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','Slider Successfully Updated');
    }

    /**
     * this function allow to Remove the specified slider from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    *@author Abdelwahed  Madan yousfi 
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (file_exists('uploads/slider/'.$slider->image))
        {
            unlink('uploads/slider/'.$slider->image);
        }
        $slider->delete();
        return redirect()->back()->with('successMsg','Slider Successfully Deleted');
    }
}
