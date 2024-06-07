@extends('layouts.app')
@section('title', 'Show Post')
@section('content')
    <div class="info">
        <div class="card d-flex p-2 cards" style="width: 30%; ">
            <img src="/images/{{ $post->image }}" class="img-thumbnail" alt="...">


            <div class="card-body">
                <div class="input-group mb-3">
                
                <label for="title" class="input-group-text" id="inputGroup-sizing-default">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" value="{{ $post->title }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="description" class="input-group-text" id="inputGroup-sizing-default">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" disabled>{{ $post->description }}</textarea>
                        
                    
                </div>
                <a href="/post/edit/{{$post->id}}"><button type="button" class="btn btn-primary">Edit</button></a>

                <form  action="/post/delete/{{$post->id}}" style="display: inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <input  class="btn btn-danger" type="submit" value="Delete" >
                </form>
                <a href="/"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </div>

    </div>

@endsection
