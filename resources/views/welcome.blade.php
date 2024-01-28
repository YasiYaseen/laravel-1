
@extends('layouts.master')
@section('content')
<h3 class="mb-3 mt-3">Users</h3>
@if(session()->has('status'))
    <p>{{session()->get('status')}}</p>
@endif
<table class="table">
    <div class="d-flex">
        <a href="{{route('create')}}" class="btn btn-primary mb-2 ms-auto">New</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{$users->firstItem()+$loop->index}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{route('update',encrypt($user->id))}}" class="btn btn-primary">Edit</a>
             <a href="{{route('delete',encrypt($user->id))}}" class="btn btn-danger">Delete</a>
            <a href="{{route('forcedelete.user',encrypt($user->id))}}" class="btn btn-info">Force Delete</a>
            </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <div>
    {{$users->links()}}
  </div>
{{session()->get('user_name')}}
@endsection
