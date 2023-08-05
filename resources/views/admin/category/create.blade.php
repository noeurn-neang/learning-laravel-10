@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card" style="margin: 0px auto; width: 30rem; padding: 40px;">
        <form method="post" action="{{url('/categories/store')}}">
            @csrf
            <div class="form-group">
                <label for="inputCode">Code *</label>
                <input 
                    type="string"
                    class="form-control"
                    id="code"
                    name="code"
                    placeholder="Code"
                >
            </div>
            <div class="form-group">
                <label for="inputName">Name *</label>
                <input
                    type="string"
                    class="form-control"
                    id="inputName"
                    name="name"
                    placeholder="Name"
                >
            </div>
            <div class="form-group">
                <label for="inputName">Date</label>
                <input
                    type="date"
                    class="form-control"
                    id="inputName"
                    name="name"
                    placeholder="Name"
                >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection