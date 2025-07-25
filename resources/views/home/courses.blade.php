@extends('home.layout.master')

@section('content')

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h4>Read More <em>Courses</em></h4>
          </div>
         
          <ul>
            @foreach($courses as $c)
            <li>{{$c['name']}}</li>
            @endforeach
            
          </ul>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">125</div>
                <div class="count-title">Finished Projects</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">11</div>
                <div class="count-title">Teacher</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">87</div>
                <div class="count-title">Happy Students</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">50</div>
                <div class="count-title">Awards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <p>Copyright © 2025. All Rights Reserved. Design: ICTDCD, DTPC</p>
    </div>
  </section>

@endsection