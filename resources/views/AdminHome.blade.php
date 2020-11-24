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

                        <div class="row">
                            <div class="col-4">PageName : <input type="hidden" name="pagename" id="" value="{{ $PageName }}">{{ $PageName }}</div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-4">Heading : <input type="text" name="heading" id="" value="{{ $HeadingOne }}"></div>
                        </div>
                        <br/>

                        <div class="row">
                            &nbsp;&nbsp; Content :&nbsp;&nbsp; <textarea name="content" id="" cols="100" rows="5" >{{ $ContentOne  }}</textarea>
                        </div>

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
