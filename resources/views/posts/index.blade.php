@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="CreateUser">
        <a href="/post/create"><button type="button" class="btn btn-primary">Create post</button></a>
    </div>

    
    <div class="containerCards">
        @forelse ($posts as $post)
        <div class="card d-flex p-2 cards " style="width: 18rem;">

                <img src="/images/{{ $post->image }}" class="card-img-top" alt="...">

            
            <div class="card-body ">
                
                <p class="card-text">{{ $post->title }}</p>
                <a href="/post/show/{{$post->id}}"><button type="button" class="btn btn-success">Show</button></a>

                <a href="/post/edit/{{$post->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
                
                <form  action="/post/delete/{{$post->id}}" style="display: inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <input  class="btn btn-danger" type="submit" value="Delete" >
                </form>
            </div>
        </div>
    

    @empty
        <h5 class="noPOST">There are no posts</h5>
    @endforelse
</div>
@endsection
