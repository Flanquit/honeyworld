<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function AdminAbout(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'About Us')->get();
        // dd($flight);
        foreach ($flight as $item){
            $PageName = $item->PageName;
            $HeadingOne = $item->HeadingOne;
            $HeadingTwo = $item->HeadingTwo;
            $HeadingThree = $item->HeadingThree;
            $HeadingFour = $item->HeadingFour;
            $ContentOne = $item->ContentOne;
            $ContentTwo = $item->ContentTwo;
            $ContentThree = $item->ContentThree;
            $ContentFour = $item->ContentFour;
            $PhoneOne = $item->PhoneOne;
            $PhoneTwo = $item->PhoneTwo;
            $PhoneThree = $item->PhoneThree;
            $HeaderImageUrl = $item->HeaderImageUrl;

        }
        // dd($flight->PageName);
        return view('AdminAbout')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }

    // used this to add pages info quick one
    public function Add(Request $request){
        dd($request);
        $flight = new Content;

        $flight->headingOne = $request->heading;
        $flight->ContentOne = $request->content;
        $flight->PageName = $request->pagename;


        $flight->save();
    }


    public function UpdateAbout(Request $request){

        $flight = Content::where('PageName', 'About Us');
        $flight->headingOne = $request->heading;
        $flight->ContentOne = $request->content;
        $flight->PageName = $request->pagename;
        $flight->save();

        // App\Content::where('PageName', 'About Us')
        //   ->update(['delayed' => 1]);

    }

}
