@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home Page') }}</div>

                <div class="card-body">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('UpdateHome') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h5><b>Contacts</b></h5>
                        <hr>
                        <div class="row">

                            <div class="col-4">
                                <label for="">Phone One</label> <br>
                                <input type="text" name="PhoneOne" id="" value="{{ $PhoneOne }}">
                            </div>

                            <div class="col-4">

                                <label for="">Phone Two</label> <br>
                                <input type="text" name="PhoneTwo" id="" value="{{ $PhoneTwo }}">
                            </div>

                            <div class="col-4">

                                <label for="">Email</label> <br>
                                <input type="email" name="email" id="" value="{{ $Email }}">
                            </div>

                            <div class="col-4">
                                <label for="">Address</label> <br>
                                 <input type="text" name="Address" id="" value="{{ $Address }}" size="35">
                            </div>


                        </div>



                        <h5><b>About</b></h5>
                        <hr>



                        <div class="row">
                            <div class="col-6">

                            <label for="">About</label> <br>
                            <textarea name="content" id="" cols="50" rows="5" >{{ $ContentOne  }}</textarea>
                            </div>



                            <div class="col-sm-6">
                                <label for="">HeadingOne</label> <br>

                                 <input type="text" name="HeadingOne" id="" value="{{ $HeadingOne }}" size="40">
                                 <br/>
                                 Heading Image
                                 <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="HeaderImageUrl"/>


                                 <textarea name="ContentOne" id="" cols="50" rows="5" >{{ $ContentOne  }}</textarea>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">HeadingTwo</label> <br>
                                 <input type="text" name="HeadingTwo" id="" value="{{ $HeadingTwo }}" size="40">
                                 <br/>
                                 HeadingTwo Image
                                 <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="HeaderImageUrlTwo"/>


                                 <textarea name="ContentTwo" id="" cols="50" rows="5" >{{ $ContentTwo  }}</textarea>
                                </div>



                                <div class="col-sm-6">
                                    <label for="">HeadingThree</label> <br>
                                     <input type="text" name="HeadingThree" id="" value="{{ $HeadingThree }}" size="40">
                                     <br/>
                                     HeadingTwo Image
                                     <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="HeaderImageUrlThree"/>

                                     <textarea name="ContentThree" id="" cols="50" rows="5" >{{ $ContentThree  }}</textarea>
                                    </div>
                        </div>
{{--
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">HeadingFour</label> <br>
                                 <input type="text" name="HeadingFour" id="" value="{{ $HeadingFour }}" size="40">
                                 <br/>
                                 HeadingFour Image
                                 <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="HeaderImageUrlFour"/>


                                 <textarea name="ContentFour" id="" cols="50" rows="5" >{{ $ContentFour  }}</textarea>
                                </div>



                                <div class="col-sm-6">
                                    <label for="">HeadingFive</label> <br>
                                     <input type="text" name="HeadingFive" id="" value="{{ $HeadingFive }}" size="40">
                                     <br/>
                                     HeadingFive Image
                                     <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="HeaderImageUrlFive"/>

                                     <textarea name="ContentFive" id="" cols="50" rows="5" >{{ $ContentFive  }}</textarea>
                                    </div>
                        </div>
 --}}




                        <br/>
                        Slide 1 Image
                        <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="SlideOne"/>


<br/>

Slide 2 Image
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="SlideTwo"/>
<br/>


Slide 3 Image
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="SlideThree"/>
<br/>


Products Image
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="ProductsImg"/>
<br/>

Products Services
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="ServicesImg"/>
<br/>



Products Strategy
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="StrategyImg"/>
<br/>



Products Impact
<input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" name="ImpactImg"/>
<br/>
<hr>

                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Update </button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
