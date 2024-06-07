@extends('layouts.app')
@section('title', 'Create Post')
@section('content')

    <form action="/post/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="contanierCreatePost">
            <div class="input-group mb-3">
                <label for="title" class="input-group-text" id="inputGroup-sizing-default">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <label kjasbdkn AD Lj dl DLKn jWD for="description" class="input-group-text"
                    id="inputGroup-sizing-default">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" aria-label="Sizing example input"
aria-describedby="inputGroup-sizing-default"></textarea>

            </div>
            <div class="input-group mb-3">
                <label for="formFileMultiple" class="form-label"></label>
                <input class="form-control" type="file" name="image" id="image" multiple>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btnCreate" value="Create" id="submit">
        </div>
    </form>
@endsection
