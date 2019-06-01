<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image; //image intervention implimentation
use App\User;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Validation\Validator;
class UserController extends Controller
{
    /**
     * Add auth middleware upon initialisation.
     *
     * @author Abdelwahed Madani Yousfi
     */
    public function __construct()
    {
        // Allow access to only authenticated users
        $this->middleware('web');
        $this->middleware('auth'); // Some reason adding both middleware is the only way to go
    }
    /**
     * Get the current user profile
     *
     * @return View
     * @author Abdelwahed Madani Yousfi
     */
    public function profile(){
    	return view('profile', array('user' => Auth::user()) ); //return view profile with data "user"
    }


    public function update_avatar(Request $request){  //uuser avatar using image intervention package
    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return view('profile', array('user' => Auth::user()) );
    }

    /**
     * user update profile name;
     *
     * @return back with errors
     * @author Abdelwahed Madani Yousfi
     */
    public function editCurrentUserProfile(Request $request)
    {
        // Find the current authenticated user object
        $user = User::find($request->user()->id);
        // if input name exists in the request replace name in the user object
        if ($request["name"]) {
            $this->validate($request, [
                'name' => 'max:255|required'
            ]);
            $user->name = $request["name"];
        }
        $user->save(); 
        Session::flash('message', "Profile Successfully Updated!");
        return redirect()->back();
    }

}