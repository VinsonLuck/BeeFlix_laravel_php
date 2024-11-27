@extends('layout.layout')
@section('content')
    @session('success')
        <div class="alert alert-success">
            Data Deleted Succesfully
        </div>
    @endsession
    <div class="mx-5 my-5">
        <div class="d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/movie/popcorn.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body text-center p-0" style="width:100%">
                    <a href="{{ route('insertMovie.view') }}" class="btn fw-bold btn-dark text-light" style="width:100%">Add
                        New Movie</a>
                </div>
            </div>
        </div>
        @include('components.movieCard')
        <div class="d-flex justify-content-center mb-5 mt-5">
            {{ $movies->links() }}
        </div>
    </div>
@endsection
