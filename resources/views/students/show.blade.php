@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <img class="card-img-top" src="{{ asset('image/student_profile.webp') }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $student->fname. ' ' .$student->lname }}</h5>
        <p class="card-text">{{ $student->email }}</p>
        <p class="card-text">{{ $student->about }}</p>
        <p class="card-text"><small class="text-muted">{{ $student->grade }}</small></p>
        </div>
        <div class="btns d-flex gap-4">
            <a href="{{ route('student-delete', $student->id) }}" class="btn btn-danger">Delete</a>
            <a href="{{ route('students') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection