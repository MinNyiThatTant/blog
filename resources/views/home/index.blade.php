@extends('home.layout.master')

@section('title','Home - SMS')
@section('content')
  <!-- ***** Content Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h3> ICTDCD - School Management System </h3>
            <h2> Welcome To Our <em> School! </em></h2>
            <div class="main-button-gradient">
              <div><a href="{{route('home.login')}}">Join Us Now!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <p>Copyright © 2025. All Rights Reserved. Design: ICTDCD, DTPC</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Content Area End ***** -->

@endsection