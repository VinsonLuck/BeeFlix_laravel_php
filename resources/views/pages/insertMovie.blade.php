@extends('layout.layout')
@section('content')
    @session('success')
        <div class="alert alert-success">
            Data Saved Succesfully
        </div>
    @endsession
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select form-select-lg" name="genre" id="genre">
                <option value="" disabled selected>--select genre--</option>
                @foreach ($genres as $item)
                    <option value="{{ $item->id }}" @selected(old('genre')==$item->id)>{{ $item->name }}</option>
                @endforeach
            </select>
            @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input class="form-control" type="file" id="photo" name="photo" value="{{old('photo')}}"/>
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="movie title" value="{{old('title')}}"/>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" >{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <input class="form-date" name="publish_date" type="date" id="publish_date" value="{{old('publish_date')}}">
            @error('publish_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" type="submit" value="Submit new movie" class="btn btn-dark">
    </form>
@endsection
