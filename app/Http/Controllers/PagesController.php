<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('homepage');
    }

    public function about(){

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
        return view('About')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }

    public function BeeRemoval(){

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

        return view('BeeRemoval')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Apiary(){

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

        return view('Apiary')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Training(){
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
        return view('Training')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Equipment(){
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
        return view('Equipment')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Sustainable(){
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
        return view('Sustainable')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Blog(){
        return view('Blog');
    }


    public function Contact(){
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
        return view('Contact')->with(compact('PageName', 'HeadingOne', 'HeadingTwo', 'HeadingThree', 'HeadingFour', 'ContentOne', 'ContentTwo', 'ContentThree', 'ContentFour', 'PhoneOne', 'PhoneTwo', 'PhoneThree', 'HeaderImageUrl', 'flight'));
    }


    public function Gallery(){
        return view('Gallery');
    }

    public function Products(){
        return view('Products');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
