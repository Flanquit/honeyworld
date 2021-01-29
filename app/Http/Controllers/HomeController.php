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
        $flight = Content::where('PageName', 'About')->get();
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




    public function AdminHome(){
        // $PageDetails = Content::all();
        $flight = Content::where('PageName', 'Home')->get();
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
            $Address = $item->Address;
            $Email = $item->Email;

        }
        // dd($flight->PageName);
        return view('AdminHome')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight', 'Address', 'Email'));
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



        if ($request->hasFile('AboutImg')){
            if ($request->file('AboutImg')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->AboutImg->storePubliclyAs('images', 'About/AboutImg.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'About')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->HeaderImageUrl = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'About';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return redirect()->back()->with('success', 'Page Has Been Updated ');
            }
        }





    }




    public function UpdateHome(Request $request){

        // $path = $request->SlideOne->storePubliclyAs('images', 'Slides/SlideOne.jpg', 'public');
        // DB::table('contents')->where('PageName', 'Home')
        // ->update(

        //     ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
        //     ['PageName' => $request->pagename]
        // );

        // dd($request);


        if ($request->hasFile('SlideOne')){
            if ($request->file('SlideOne')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->SlideOne->storePubliclyAs('images', 'Slides/SlideOne.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->HeadingTwo = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'Slide One Has Been Changed');
            }
        }elseif ($request->hasFile('SlideTwo')){
            if ($request->file('SlideTwo')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->SlideTwo->storePubliclyAs('images', 'Slides/SlideTwo.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->HeadingThree = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'Slide Two Has Been Changed');
            }
        }elseif ($request->hasFile('SlideThree')){
            if ($request->file('SlideThree')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->SlideThree->storePubliclyAs('images', 'Slides/SlideThree.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->HeadingFour = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'Slide Three Has Been Changed');
            }
        }elseif ($request->hasFile('ProductsImg')){
            if ($request->file('ProductsImg')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->ProductsImg->storePubliclyAs('images', 'Home/ProductsImg.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->ContentTwo = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'Product image saved ');
            }
        }elseif ($request->hasFile('ServicesImg')){
            if ($request->file('ServicesImg')->isValid()) {
                // $PageName = $request->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->ServicesImg->storePubliclyAs('images', 'Home/ServicesImg.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->ContentThree = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'Services image saved ');
            }
        }elseif ($request->hasFile('StrategyImg')){
            if ($request->file('StrategyImg')->isValid()) {
                // $PageName = $StrategyImg->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->StrategyImg->storePubliclyAs('images', 'Home/StrategyImg.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->ContentFour = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'StrategyImg image saved ');
            }
        }elseif ($request->hasFile('ImpactImg')){
            if ($request->file('ImpactImg')->isValid()) {
                // $PageName = $StrategyImg->input('PageName');
                // $ImageTitle = 'SlideOne';
                $path = $request->ImpactImg->storePubliclyAs('images', 'Home/ImpactImg.jpg', 'public');
                // dd($path);
                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->HeaderImageUrl = $path;
                $SlideImages->HeadingOne = $request->input('heading');
                $SlideImages->PageName = 'Home';
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->save();
                return back()->with('success', 'StrategyImg image saved ');
            }
        }elseif (  count($request->all()) > 1  ) {

                $FileID = Content::where('PageName', '=', 'Home')->first();
                $id = $FileID->id;
                $SlideImages = Content::find($id);
                $SlideImages->ContentOne = $request->input('content');
                $SlideImages->PhoneOne = $request->input('PhoneOne');
                $SlideImages->PhoneTwo = $request->input('PhoneTwo');
                $SlideImages->Address = $request->input('Address');
                $SlideImages->save();
                return back()->with('success', 'Content Saved ');
        }else{
            return back()->with('success', 'Failed to Update ');
        }

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }



    public function UpdateBeeRemoval(Request $request){


        DB::table('contents')->where('PageName', 'Bee Removal')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }


    public function UpdateApiary(Request $request){


        DB::table('contents')->where('PageName', 'Apiary')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

    public function UpdateTraining(Request $request){


        DB::table('contents')->where('PageName', 'Training')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

    public function UpdateEquipment(Request $request){


        DB::table('contents')->where('PageName', 'Equipment')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

    public function UpdateProducts(Request $request){


        DB::table('contents')->where('PageName', 'Products')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

    public function UpdateSustainable(Request $request){


        DB::table('contents')->where('PageName', 'Sustainable')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

    public function UpdateContact(Request $request){


        DB::table('contents')->where('PageName', 'Contact')
        ->update(
            ['HeadingOne' => $request->heading, 'ContentOne' => $request->content],
            ['PageName' => $request->pagename]
        );

        return redirect()->back()->with('success', 'Page Has Been Updated ');

    }

}
