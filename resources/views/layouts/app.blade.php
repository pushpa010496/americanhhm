<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- {{-- <title>{{ config('app.name') }}</title> --}} -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{config('app.url') }}images/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow" />
    <!-- LUMEN -->
    {!! app('seotools')->generate() !!}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}mix/app.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fb4f57d1535bf152a5731a0/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script> -->
 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YQEQ5VF7CC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YQEQ5VF7CC');
</script>
    
    <!-- Event snippet for Subscribe conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-465133344/-WWvCJuC8KEDEKC-5d0B'});
    </script>


    @yield('style')
    <!-- End Page Level Css -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Americanhhm",
        "url": "https://www.americanhhm.com/",
        "sameAs": [
            " https://www.facebook.com/americanhhm ",
            " https://twitter.com/americanhhm ",
            " https://plus.google.com/+Americanhhm/about ",
            " https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
            " https://www.tumblr.com/blog/americanhhm "
        ]
    }
    </script>

    

    <style type="text/css">
    body {
        overflow-x: hidden;
    }
    </style>

    
    
</head>


<body>
    <!-- header -->
    @include('layouts.partials._header')
    <!-- end header -->

    <!-- Body starts -->
    @yield('content')
    <!-- End Body -->

    <div class="mt-3"></div>

    <!--  Footer -->
    @include('layouts.partials._footer')
    <!-- End Footer -->

    <!-- Advertise -->
    @include('layouts.partials._advertisepopup')
    <!-- End Advertise -->

    <script src="{{ config('app.url') }}mix/app.js"></script>
    <!--End Scripts -->
    <!--Custom Scripts -->
    <script>
    $(document).ready(function() {
        if ($(window).width() > 993) {
            $('body').delegate('.navbar .dropdown a', 'click', function() {
                location.href = this.href;
            });
        }

    });

    if (sessionStorage.getItem('notification') == 'true') {
        $('#notifybar').css('display', 'none');
    }
    </script>

    <!--End Custom Scripts -->
    <!-- Page Scripts -->
    @yield('scripts')

    <script language="Javascript">
    @php
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      //  $ip_address =  //$_SERVER['HTTP_X_FORWARDED_FOR'];
        $ip_address = "1.7.255.255";
        $country = geoip_country_name_by_name($ip_address);
    } else {
       // $ip_address = $_SERVER['REMOTE_ADDR'];
         $ip_address = "1.7.255.255";
        $country = 'India';//geoip_country_name_by_name($ip_address);
    }
    @endphp
    var country = "{{$country}}";
    var url = "{{\Request::url()}}";

    console.log("{{$ip_address}}");
    console.log("{{$country}}");

    jQuery(document).ready(function($) {
        setTimeout(function() {
            if (sessionStorage.getItem('advertOnce') !== 'true') {
                $('#myModalpopup').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                sessionStorage.setItem('advertOnce', 'true');
            }
        }, 3000);
    });
    </script>
    <!--End Page Scripts -->
</body>

</html>