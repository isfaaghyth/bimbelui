@extends('layouts.appdefault')

@section('contentdefault')
<section class="section-intro bg-faded text-xs-center">
 <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <h5 class="wp wp-1">Silahkan isi form berikut.</h5>
          <br>
          <div class="form-group has-icon-left form-control-name">
           <label class="sr-only" for="inputName">Your name</label>
           <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
          </div>
          <div class="form-group has-icon-left form-control-email">
           <label class="sr-only" for="inputEmail">Email address</label>
           <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
          </div>
          <div class="form-group has-icon-left form-control-password">
           <label class="sr-only" for="inputFaculity">College majors</label>
           <input type="text" class="form-control form-control-lg" id="inputFaculity" placeholder="College majors" autocomplete="off">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">DAFTAR</button>
          </div>
          <h5 class="wp wp-1">atau dengan</h5>
          <br>
          <a href="#" class="btn btn-social btn-social-icon btn-social-facebook">
            <span class="icon-facebook"></span>
          </a>
          <a href="#" class="btn btn-social btn-social-icon btn-social-twitter">
            <span class="icon-twitter"></span>
          </a>
          <a href="#" class="btn btn-social btn-social-icon btn-social-google">
            <span class="icon-google"></span>
          </a>
          <a href="#" class="btn btn-social btn-social-icon btn-social-linkedin">
            <span class="icon-linkedin"></span>
          </a>
          <br><br>
         <br>
      </div>
    </div>
 </div>
</section>
@endsection
