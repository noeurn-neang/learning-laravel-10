@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a href="{{route('create-category')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Create New Category</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Code</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $cat)
            <tr>
                <td>{{$cat->code}}</td>
                <td>{{$cat->name}}</td>
                <td colspan="2">
                    <a href="/categories/edit/{{$cat->id}}" class="btn btn-primary">Edit</a>
                    <a href="/categories/delete/{{$cat->id}}" class="btn btn-danger" >Delete</a>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
@endsection