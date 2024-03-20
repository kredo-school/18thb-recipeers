@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Contact Us")

@section('content')
<div class="container py-5 justify-content-center">
    <h2 class="color1 text-center mb-5">Inquiry Detail</h2>
    {{-- * change each item to the variable --}}
    <form action="#" method="post">
        @csrf
        @method('POST')

        <div class="row mb-4">
            {{-- LEFT SIDE --}}
            <div class="col me-5">
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Title: </p>
                    </div>
                    <div class="col-8">
                        <p>Cannot register</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Received at: </p>
                    </div>
                    <div class="col-8">
                        <p>2024/03/19 21:20:35</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Inquirer: </p>
                    </div>
                    <div class="col-8">
                        <p>Inquierer's Name</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Email: </p>
                    </div>
                    <div class="col-8">
                        <p>inquierer@mail.com</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Message: </p>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sequi accusantium sapiente sit quaerat. Necessitatibus quas, possimus similique labore sit quo ipsa aut est nulla facere. Sunt aliquam, corporis nesciunt ullam ipsum saepe consectetur fuga molestiae eaque repellat pariatur facilis quae enim, recusandae, fugiat alias maxime quia. Commodi, reiciendis illo?</p>
                </div>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="col-6 align-items-center mb-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Status: </p>
                    </div>
                    <div class="col-8">
                        <p>Received</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Responder: </p>
                    </div>
                    <div class="col-8">
                        <p>Admin Username</p>
                    </div>    
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <label for="history" class="form-label h6 color1">History: </label>
                    </div>
                    <textarea name="history" id="history" rows="10" class="form-control input-color1 ms-2"></textarea>
                </div>
            </div>
        </div>

        {{-- BUTTONS --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2 d-flex justify-content-between">
                <button class="btn btn-sub flex-grow-1">Cancel</button>
            </div>
            <div class="col-2 d-flex justify-content-between">
                <input type="submit" value="Update" class="btn btn-main flex-grow-1">
            </div>
        </div>
    </form>
</div>
@endsection