@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post</h1>
        <a href="{{route('create-post')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Create New Post</a>
    </div>

    <form>
      <div class="input-group">
        <input
          class="form-control"
          name="queryString"
          value="{{$queryString}}"
        />
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td><img width="100" src="{{$post->imageUrl}}" /></td>
                <td>{{$post->category->name}}</td>
                <td colspan="2">
                    <a href="/posts/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
                    <a href="/posts/delete/{{$post->id}}" class="btn btn-danger" >Delete</a>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    
    {{-- Pagination --}}
    {{ $posts->links() }}
@endsection