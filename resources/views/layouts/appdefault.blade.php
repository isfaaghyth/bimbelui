@extends('layouts.app')

@section('content')

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center" role="banner">
      <div class="container">
         <br>
        <h3>{{ $data['title'] }}</h3>
      </div>
    </header>

    @yield('contentdefault')

@endsection
