@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-3">
                <div class="col ps-4">
                    <div class="row dashboard">
                        <!-- Add Book Button and Search Box -->
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="col-md-6">
                                <form action="{{ route('library.search') }}" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search for books" aria-label="Search for books" aria-describedby="button-search">
                                        <button class="btn btn-primary" type="submit" id="button-search">Search</button>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a>
                                </div>
                            </div>
                        </div>
                        <!-- Display Books -->
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($books as $book)
                                <div class="col-md-3 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $book->title }}</h5>
                                            <img src="{{ asset('../storage/app/public/book-cover/'. $book->cover_image) }}" class="card-img-top" alt="{{ $book->title }}">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <a href="{{ asset('../storage/app/public/'. $book->pdf) }}" class="btn btn-primary">Read</a>
                                                <!-- Delete button -->
                                                <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
