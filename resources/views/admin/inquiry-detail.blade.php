@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Contact Us")

@section('content')
<div class="container p-5 w-50 justify-content-center">
    <h2 class="color1 text-center my-5">Inquiry Detail</h2>
    {{-- * change each item to the variable --}}
    <div class="row mb-4">
        {{-- LEFT SIDE --}}
        <div class="col-6 me-5">
            <div class="row">
                <div class="col-4 text-end">
                    <p class="h6">Title: </p>
                </div>
                <div class="col-8">
                    <p>Cannot register</p>
                </div>    
            </div>
        </div>
        {{-- RIGHT SIDE --}}
        <div class="col align-items-center mb-3">
            <div class="col-4 text-end">

            </div>
            <div class="col-8">

            </div>
        </div>
    </div>
</div>
@endsection