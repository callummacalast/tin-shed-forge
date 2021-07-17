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
<<<<<<< HEAD

    @foreach ($contact_details as $contact)
        <li>{{ $contact->contact_name }} </li>
    @endforeach
=======
  
>>>>>>> 14a5e7ac15e21c4cc6f0636893ac9dcaf0dc55bb

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
<<<<<<< HEAD
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($contact_details as $name)
    <tr>
    <!-- <th>hello</th> -->
      <th>{{ $name->contact_name }}</th>
    </tr>
    @endforeach

    @foreach ($contact_details as $email)
    <tr>
      <th scope="row">{{ $email->contact_email }}</th>
      <td></td>
    </tr>
    @endforeach
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
=======
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


>>>>>>> 14a5e7ac15e21c4cc6f0636893ac9dcaf0dc55bb
</table>


</div>
@endsection
