@extends('layouts.app')
@section('title', 'Edit Post')
@section('content')
    <form action="/post/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="contanierCreatePost">
            <div class="card d-flex p-2 cards" style="width: 18rem;">
                <img src="/images/{{ $post->image }}" class="card-img-top" alt="...">
                <div class="input-group mb-3">
                    <label for="title" class="input-group-text" id="inputGroup-sizing-default">Title</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" name="title" id="title"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <label for="description" class="input-group-text" id="inputGroup-sizing-default">Description</label>
                    <textarea type="text" class="form-control" name="description" 
                        id="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$post->description}}</textarea>
                        
                    
                </div>
                
                <div class="input-group mb-3">
                    <label for="formFileMultiple" class="form-label"></label>
                    <input class="form-control" type="file" name="image" id="image" multiple>
                </div>
                <input type="submit" name="submit" class="btn btn-success btnUpdate" value="update" id="submit">
            </div>
        </div>
    </form>
@endsection
