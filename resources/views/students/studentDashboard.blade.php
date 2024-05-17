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
      <div class="app-container">
        <a href="{{route('course.student.list.show', ['student_id' => Auth::user()->id])}}">
          <div class="app bg-dark">
            <i class="bi bi-journal-medical"></i>
            <h3>Courses</h3>
          </div>
        </a>
        <a href="{{route('student.attendance.show', ['id' => Auth::user()->id])}}">
          <div class="app bg-dark">
            <i class="bi bi-calendar2-week"></i>
            <h3>Attendance</h3>
          </div>
        </a>
        <!--<a href="#">
          <div class="app bg-dark">
            <i class="bi bi-file-post"></i>
            <h3>Assignments</h3>
          </div>
        </a>-->
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
        <a href="{{route('gallery.student.show', ['student_id' => Auth::user()->id])}}">
          <div class="app bg-dark">
            <i class="bi bi-images"></i>
            <h3>Gallery</h3>
          </div>
        </a>
        <a href="#">
          <div class="app bg-dark">
            <i class="bi bi-chat-dots"></i>
            <h3>Chart</h3>
          </div>
        </a>
        <a href="https://www.adaptedmind.com/Math-Worksheets.html?utm_medium=cpc&utm_source=google&campaignid=16097117425&campaign_type=display&placement=d&utm_content=&adid=687634257065&adset_id=132704324293&utm_term=math%20games&ad_position=&device=c&gclid=CjwKCAjww_iwBhApEiwAuG6ccBiXX6QNsf9A-6t5dp2lzR_38S4r742pgjQE-kWep0zD4aFpk8lp4RoCFrsQAvD_BwE">
          <div class="app bg-dark">
            <i class="bi bi-controller"></i>
            <h3>Games</h3>
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
