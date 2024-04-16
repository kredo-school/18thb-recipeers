@extends('layouts.app')

@section('title', "Inquiry Detail")

@section('content')
<div class="container py-5 justify-content-center">
    <h2 class="color1 text-center mb-5">Inquiry Detail</h2>
    <form action="{{ route('admin.inquiry.update', $inquiry->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="row mb-4">
            {{-- LEFT SIDE --}}
            <div class="col me-5">
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Title: </p>
                    </div>
                    <div class="col-8">
                        <p>{{ $inquiry->title }}</p>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Received at: </p>
                    </div>
                    <div class="col-8">
                        <p>{{ $inquiry->created_at }}</p>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Updated at: </p>
                    </div>
                    <div class="col-8">
                        <p>{{ $inquiry->updated_at }}</p>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Inquirer: </p>
                    </div>
                    <div class="col-8">
                        <p>{{ $inquiry->inquirer_name }}</p>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Email: </p>
                    </div>
                    <div class="col-8">
                        <p>{{ $inquiry->email }}</p>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <p class="h6 color1">Message: </p>
                    </div>
                    <p>{{ $inquiry->body }}</p>
                </div>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="col-6 align-items-center mb-3">
                <div class="row d-flex align-items-baseline mb-3">
                    <div class="col-4">
                        <label for="admin" class="form-label h6 color1">Status: </label>
                    </div>
                    <div class="col-8">
                        <select name="status" id="status" class="form-select">
                            @foreach($statuses as $status)
                                @if($inquiry->status == $status)
                                    <option value="{{ $status }}" selected>{{ $status }}</option>
                                @else
                                    <option value="{{ $status }}">{{ $status }}</option>
                                @endif
                            @endforeach
                            @error('status')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline mb-4">
                    <div class="col-4">
                        <label for="admin" class="form-label h6 color1">Responder: </label>
                    </div>
                    <div class="col-8">
                        <select name="admin" id="admin" class="form-select">
                            @if(isset($admin))
                                <option value="{{ $admin->id }}" selected>{{ $admin->username }}</option>
                            @else
                                <option value="" {{ !isset($admin) ? 'selected' : '' }}>Select responder</option>
                            @endif
                            @foreach($all_admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->username }}</option>
                            @endforeach
                        </select>
                        @error('admin')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col-4">
                        <label for="history" class="form-label h6 color1">History: </label>
                    </div>
                    <textarea name="history" id="history" rows="10" class="form-control input-color1 ms-2">{{ old('history', $inquiry->history) }}</textarea>
                    {{-- ERROR --}}
                    @error('history')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- BUTTONS --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2 d-flex justify-content-between">
                <a href="{{ route('admin.inquiry.show') }}" class="btn btn-sub flex-grow-1">Go back</a>
            </div>
            <div class="col-2 d-flex justify-content-between">
                <input type="submit" value="Update" class="btn btn-main flex-grow-1">
            </div>
        </div>
    </form>
</div>
@endsection
