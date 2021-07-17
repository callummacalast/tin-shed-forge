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

    @foreach ($contact_details as $contact)
        <li>{{ $contact->contact_name }} </li>
    @endforeach

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
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
</table>


</div>
@endsection
