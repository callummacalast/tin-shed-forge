@extends('layouts.app')

@section('content')

    <main class="container">
        <h1 class="display-3 text-center">Contact Us</h1>
        <form action="/contact" method="POST" class="form-group col-md-6 mx-auto">
            @csrf
                <label for="contact_name">Name:</label>
                <input type="text" class="form-control">
                <br>
                <label for="contact_email">Email:</label>
                <input name="contact_email" type="text" class="form-control">
                <br>
                <label for="contact_message">Message:</label>
                <textarea name="contact_message" id="contact_message" rows="7" class="form-control"></textarea>
                <br>
                <button type="submit" class="mt-2 btn btn-outline-primary btn-block">Submit</button>
        </form>
    </main>

@endsection