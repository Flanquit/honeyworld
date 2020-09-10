<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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


    public function AdminBeeRemoval(){
        // dd('apo');
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Bee Removal')->get();
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
        return view('AdminBeeRemoval')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminApiary(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Apiary')->get();
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
        return view('AdminApiary')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminTraining(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Training')->get();
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
        return view('AdminTraining')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminEquipment(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Equipment')->get();
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
        return view('AdminEquipment')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminProducts(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Products')->get();
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
        return view('AdminProducts')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminSustainable(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Sustainable')->get();
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
        return view('AdminSustainable')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }



    public function AdminContact(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Contact')->get();
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
        return view('AdminContact')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    // used this to add pages info quick one
    public function Add(Request $request){
        // dd($request);

        $flight = new Content;
        $flight->headingOne = $request->heading;
        $flight->ContentOne = $request->content;
        $flight->PageName = $request->pagename;
        $flight->save();

      
    }


    public function UpdateAbout(Request $request){


        DB::table('contents')->where('PageName', 'About Us')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateBeeRemoval(Request $request){


        DB::table('contents')->where('PageName', 'Bee Removal')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }


    public function UpdateApiary(Request $request){


        DB::table('contents')->where('PageName', 'Apiary')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateTraining(Request $request){


        DB::table('contents')->where('PageName', 'Training')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateEquipment(Request $request){


        DB::table('contents')->where('PageName', 'Equipment')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateProducts(Request $request){


        DB::table('contents')->where('PageName', 'Products')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateSustainable(Request $request){


        DB::table('contents')->where('PageName', 'Sustainable')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

    public function UpdateContact(Request $request){


        DB::table('contents')->where('PageName', 'Contact')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

    }

}
