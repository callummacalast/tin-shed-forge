@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1 class="text-center">Welcome to the admin section</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
        </div>
    </div>
  

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Done</th>
    </tr>
  </thead>


      @foreach($contacts as $contact)
        <tr>
      <td>name: {{ $contact->contact_name  }}</td>
      <td>email: {{ $contact->contact_email  }}</td>
      <td>message: {{ $contact->contact_message  }}</td>
      <td><input type="checkbox"> </td>
        </tr>

      @endforeach


</table>


</div>
@endsection
