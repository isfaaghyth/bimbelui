<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BIMBEL-UI</title>
    <meta name="description" content="Bimbingan Belajar UI, PT Favorit" />
    <meta name="keywords" content="Bimbel UI, Bimbel PTN Favorit, Bimbel Terbaik" />
    <meta name="author" content="FReS-TA" />
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon.png">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="css/landio.css">
  </head>
  <body>

     <!-- Navigation
     ================================================== -->

     <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
       <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}" style="vertical-align: middle;">
           <span class="icon-logo"></span>
           <span class="sr-only">FReS-TA</span>
         </a>
         <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
         &#9776;
       </a>
         <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
           <ul class="nav navbar-nav pull-xs-right">
             <li class="nav-item nav-item-toggable">
               <a class="nav-link" href="{{ url('/') }}/about">Tentang Kami<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item nav-item-toggable">
               <a class="nav-link" href="{{ url('/') }}">Program Jaminan</a>
             </li>
             <li class="nav-item nav-item-toggable">
               <a class="nav-link" href="{{ url('/') }}" target="_blank">Feluni UI</a>
             </li>
             <li class="nav-item nav-item-toggable">
               <a class="nav-link" href="{{ url('/') }}" target="_blank">Hubungi Kami</a>
             </li>
             <li class="navbar-divider hidden-sm-down"></li>
           </ul>
         </div>
       </div>
     </nav>

     @yield('content')

     <!-- Footer
     ================================================== -->

     <footer class="section-footer bg-inverse" role="contentinfo">
       <div class="container">
         <div class="row">
           <div class="col-md-6 col-lg-5">
             <div class="media">
               <div class="media-left">
               </div>
               <small class="media-body media-bottom">
                 &copy; FReS-TA 2017. <br>
                 Designed by Muh Isfhani, developed by Muh Isfhani, <br>exclusively for BIMBEL-UI.
               </small>
             </div>
           </div>
         </div>
       </div>
     </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>
