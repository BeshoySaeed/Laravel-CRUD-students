@extends('layouts.app')


@section('content')
<div class="container">
<table class="table ">
    <thead class="thead-dark">
      <tr class="table-dark">
        <th scope="col">fname</th>
        <th scope="col">lname</th>
        <th scope="col">email</th>
        <th scope="col">Age</th>
        <th scope="col">Grade</th>
        <th scope="col">About</th>
        <th scope="col">Modify</th>
        <th scope="col">Details</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($students as $key=> $student )
        <tr>
          <td>{{ $student->fname }}</td>
          <td>{{ $student->lname }}</td>
          <td>{{ $student->email }}</td>
          <td scope="col">{{ $student->age }}</td>
          <td scope="col">{{ $student->grade }}</td>
          <td scope="col">{{ $student->about }}</td>
          <td scope="col"><a href="{{ route('student-edit', $student->id) }}" class="btn btn-primary">Edit</a></td>
          <td scope="col"><a href="{{ route('studetn-data', $student->id) }}" class="btn btn-success">Data</a></td>
          <td scope="col"><a href="{{ route('student-delete', $student->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $students->links() }}


</div>
@endsection
