@extends('layouts.master')
@section('content')
<div class="container">

    <form class="mt-5" action="{{route('updateInit')}}" method="POST">
 @csrf
 <input type="hidden" name="id" value="{{$user->id}}">
        <div class="form-group mb-2">
            <label >Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter Name">
          </div>

        <div class="form-group mb-2">
          <label >Email </label>
          <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter email">
        </div>
        <div class="form-group mb-2">
          <label >Date of birth  </label>
          <input type="date" class="form-control" name="dob" value="{{$user->date}}" placeholder="Enter Date of birth ">
        </div>
        <div class="form-group mb-2">
            <label >Status </label>
            <select name="status" class="form-control" >
                <option value="0" {{$user->status==0?'Selected':''}}>InActive</option>
                <option value="1" {{$user->status==1?'Selected':''}}>Active</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>
    </div>
@endsection
