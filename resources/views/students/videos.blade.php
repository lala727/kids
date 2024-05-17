@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')

        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-3">
                <div class="col ps-4">
                    <div class="row dashboard">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="col-md-6">
                                    <form action="{{ route('videos.search.st') }}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search for videos" aria-label="Search for videos" aria-describedby="button-search">
                                            <button class="btn btn-primary" type="submit" id="button-search">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                            @foreach ($videos as $video)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $video->title }}</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video controls class="embed-responsive-item" style="width: 100%; height: 200px;" id="video{{$loop->index}}" autoplay muted>
                                                <source src="{{ asset('../storage/app/public/videos/'. $video->video_path) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
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
