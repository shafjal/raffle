@extends('layouts.app')

@section('content_a')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Raffel Draw Start</h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">

    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"> <i class="fa-solid fa-users" style="color: tomato"></i> {{ __('Click To Draw')
                    }}</div>

                <div class="card-body">
                    <a href="{{ route('draw.again.index') }}"><button type="button"
                            class="btn btn-primary btn-lg btn-block">Draw Now</button></a>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection