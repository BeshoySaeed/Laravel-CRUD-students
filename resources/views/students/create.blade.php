@extends('layouts.app')


@section('content')

    <form class="p-4" method="POST" action="{{ route('student-store') }}">
        @csrf
        <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" name="age" >
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
        <label for="about">About</label>
        <input type="text" class="form-control"  name="about" >
        </div>
        <div class="form-group">
        <label for="grade">Grade</label>
        <select class="form-control" id="grade" name="grade" >
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        </div>
        <input type="submit" class="btn btn-primary mt-4">
    </form>
  
@endsection