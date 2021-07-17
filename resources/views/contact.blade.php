@extends('layouts.app')

@section('content')

    <main class="container">
        <h1 class="display-3 text-center">Contact Us</h1>
        @if(session('status'))
            <div class="alert alert-success shadow col-10">
                <p class="text-center"> {{ session('status') }} </p>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-info shadow col-10 mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">* {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/contact" method="POST" class="form-group col-md-8 mx-auto">
            @csrf
                <label for="contact_name">Name:</label>
                <input type="text" name="contact_name" class="form-control" value="{{ old('contact_name') }}">
                <br>
                <label for="contact_email">Email:</label>
                <input name="contact_email" type="email" class="form-control" value="{{ old('contact_email') }}">
                <br>
                <label for="contact_message">Message:</label>
                <textarea name="contact_message" id="contact_message" rows="7" class="form-control">{{ old('contact_message') }}</textarea>
                <br>
                <button type="submit" class="mt-2 btn btn-outline-primary btn-block">Submit</button>
        </form>


    </main>

@endsection