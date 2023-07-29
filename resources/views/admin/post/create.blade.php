@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post</h1>
    </div>
    <div class="card" style="margin: 0px auto; width: 30rem; padding: 40px;">
        <form method="post" action="{{url('/posts/store')}}">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Title</label>
                <input 
                    type="string"
                    class="form-control"
                    id="title"
                    name="title"
                    placeholder="Title"
                >
            </div>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input
                    type="string"
                    class="form-control"
                    id="inputDescription"
                    name="description"
                    placeholder="Description"
                >
            </div>
            
            {{-- Category --}}
            <div class="form-group">
                <label>Category</label>
                <select name="categoryId" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="imageUrl">Image Url</label>
                <input
                    type="string"
                    class="form-control"
                    id="imageUrl"
                    name="imageUrl"
                    placeholder="Image Url"
                >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection