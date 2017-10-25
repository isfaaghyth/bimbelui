@extends('layouts.appdefault')

@section('contentdefault')
<section class="section-intro bg-faded text-xs-center">
 <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <h3 class="wp wp-1">FReS-TA</h3>
         <p class="lead wp wp-2">{{ $data['pg1'] }}</p>
         <p class="lead wp wp-2">{{ $data['pg2'] }}</p>
         <br>
      </div>
    </div>
 </div>
</section>
@endsection
