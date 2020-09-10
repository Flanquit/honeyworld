@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Equipment') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="{{ route('UpdateEquipment') }}" method="POST">
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
                            &nbsp;&nbsp; Content :&nbsp;&nbsp; <textarea name="content" id="" cols="100" rows="20" >{{ $ContentOne  }}</textarea>
                        </div>

                        <br/>

                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Update </button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
