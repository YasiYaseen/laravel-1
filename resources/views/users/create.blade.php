@extends('layouts.master')
@section('content')
<div class="container">

    <form class="mt-5" action="{{route('createInit')}}" method="POST">
 @csrf
        <div class="form-group mb-2">
            <label >Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
          </div>

        <div class="form-group mb-2">
          <label >Email </label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group mb-2">
          <label >Date of birth  </label>
          <input type="date" class="form-control" name="dob" placeholder="Enter Date of birth ">
        </div>
        <div class="form-group mb-2">
            <label >Status </label>
            <select name="status" class="form-control" >
                <option value="0">InActive</option>
                <option value="1">Active</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>
    </div>
@endsection
