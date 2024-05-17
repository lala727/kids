@extends('students.layout')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-3">
                <div class="col ps-4">
                    <!-- <h1 class="display-6 mb-3"><i class="ms-auto bi bi-grid"></i> {{ __('Dashboard') }}</h1> -->
                    <div class="main-content" id="main-content">
      <!-- Home Section -->
      <div class="app-container larger">
        <a href="{{route('library.student.books', ['student_id' => Auth::user()->id])}}">
          <div class="app bg-dark">
            <i class="bi bi-journal-text"></i>
            <h3>Books</h3>
          </div>
        </a>
        <a href="{{route('videos.student.index', ['teacher_id' => Auth::user()->id])}}">
          <div class="app bg-dark">
            <i class="bi bi-play-btn"></i>
            <h3>Videos</h3>
          </div>
        </a>
      </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
