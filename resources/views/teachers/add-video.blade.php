@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.left-menu')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Videos</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="video">Video</label>
                            <input id="video" type="file" class="form-control @error('video') is-invalid @enderror" name="video" required accept="video/mp4,video/x-m4v,video/*">

                            @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add Video</button>
                        <a href="{{ route('videos.teacher.index', ['teacher_id' => Auth::user()->id]) }}" class="btn btn-primary">Back</a>
                    </form>
                    <!--<div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
