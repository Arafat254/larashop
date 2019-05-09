<!DOCTYPE html> <html lang="en"> 
<!-- Mirrored from demo.neontheme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 07:51:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<meta name="description" content="Neon Admin Panel" /> 
<meta name="author" content="Laborator.co" /> 
<link rel="icon" href="{{ asset('assets/backend//images/favicon.ico') }}"> 
<title>Neon</title> 
<link rel="stylesheet" href="{{ asset('assets/baxkend//js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1') }}"> 
<link rel="stylesheet" href="{{ asset('assets/backend/css/font-icons/entypo/css/entypo.css') }}" id="style-resource-2"> 

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3"> 

<link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.css') }}" id="style-resource-4"> 

<link rel="stylesheet" href="{{ asset('assets/backend/css/neon-core.css') }}" id="style-resource-5"> 

<link rel="stylesheet" href="{{ asset('assets/backend/css/neon-theme.css') }}" id="style-resource-6"> 

<link rel="stylesheet" href="{{ asset('assets/backend/css/neon-forms.css') }}" id="style-resource-7"> 

<link rel="stylesheet" href="{{ asset('assets/backend//css/custom.css') }}" id="style-resource-8"> 

  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

 <!--[if lt IE 9]><script src="https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]--> <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]--> <!-- TS1556610607: Neon - Responsive Admin Template created by Laborator --> 
</head> 
<body class="page-body page-fade" data-url="https://demo.neontheme.com"> <!-- TS155661060713210: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 
<div class="page-container"> <!-- TS155661060718295: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 

   @include('layouts.backend.partails.sidebar')
 
 
   @include('layouts.backend.partails.topbar')




   @yield('content')  










 <!-- TS155661060713087: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> <!-- Footer --> 


   @include('layouts.backend.partails.footer')


</div> 
  
    </div>
   
   @stack('css')


   <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
   
   <link rel="stylesheet" href="{{ asset('assets/backend/js/jvectormap/jquery-jvectormap-1.2.2.css') }}" id="style-resource-1"> 
   
   <link rel="stylesheet" href="{{ asset('assets/backend/js/rickshaw/rickshaw.min.css') }}" id="style-resource-2"> 
   
   <script src="{{ asset('assets/backend/js/jquery-1.11.3.min.js') }}"></script>
   
   <script src="{{ asset('assets/backend/js/gsap/TweenMax.min.js') }}" id="script-resource-1"></script> 
   
   
   <script src="{{ asset('assets/backend/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}" id="script-resource-2"></script> <script src="{{ asset('assets/backend/js/bootstrap.js') }}" id="script-resource-3"></script> 
   <script src="{{ asset('assets/backend/js/joinable.js') }}" id="script-resource-4"></script> 
   <script src="{{ asset('assets/backend/js/resizeable.js') }}" id="script-resource-5"></script> 
   <script src="{{ asset('assets/backend/js/neon-api.js') }}" id="script-resource-6"></script> 
   <script src="{{ asset('assets/backend/js/cookies.min.js') }}" id="script-resource-7"></script> 
   <script src="{{ asset('assets/backend/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" id="script-resource-8"></script> 
   <script src="{{ asset('assets/backend/js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}" id="script-resource-9"></script> 

   <script src="{{ asset('assets/backend/js/jquery.sparkline.min.js') }}" id="script-resource-10"></script> <script src="{{ asset('assets/backend/js/rickshaw/vendor/d3.v3.js') }}" id="script-resource-11"></script> 
   <script src="{{ asset('assets/backend/js/rickshaw/rickshaw.min.js') }}" id="script-resource-12"></script> 
   <script src="{{ asset('assets/backend/js/raphael-min.js') }}" id="script-resource-13"></script> 
   <script src="{{ asset('assets/backend/js/morris.min.js') }}" id="script-resource-14"></script> 
   <script src="{{ asset('assets/backend/js/toastr.js') }}" id="script-resource-15"></script> 
   <script src="{{ asset('assets/backend/js/neon-chat.js') }}" id="script-resource-16"></script> <!-- JavaScripts initializations and stuff --> 
   <script src="{{ asset('assets/backend/js/neon-custom.js') }}" id="script-resource-17"></script> <!-- Demo Settings --> <script src="{{ asset('assets/backend/js/neon-demo.js') }}" id="script-resource-18"></script> 
   <script src="{{ asset('assets/backend/js/neon-skins.js') }}" id="script-resource-19">
    
    
    
    
    
    </script> <script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-28991003-7']);
 _gaq.push(['_setDomainName', 'demo.neontheme.com']);
 _gaq.push(['_trackPageview']);
 (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script> </body> 
<!-- Mirrored from demo.neontheme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 07:52:34 GMT -->
</html>