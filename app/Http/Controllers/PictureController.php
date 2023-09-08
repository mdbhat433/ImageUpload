<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Session;

use Intervention\Image\ImageManagerStatic as Image;


class PictureController extends Controller
{
    /**
    * Create view file
    *
    * @return void
    */
    public function getImage()
    {
        return view('file-upload');
    }
    /**
    * Manage Post Request
    *
    * @return void
    */
    public function postImage(Request $request)
    {
        $this->validate($request, [
            'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'avatar' => 'dimensions:min_width=200,min_height=300'
        ]);
        $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
        $request->image_file->move(public_path('images'), $imageName);
        // $message1='You have successfully upload image.';
        // return back()->with('Success','You have successfully upload image.') ->with('image',$imageName);
         return view('file-upload')->with('image',$imageName)->with('Success','You have successfully upload image.') ;
        // return redirect()->route('getimage')->withImage($imageName);
        // Session::flash('Success', 'You have successfully upload image.');
    }
}