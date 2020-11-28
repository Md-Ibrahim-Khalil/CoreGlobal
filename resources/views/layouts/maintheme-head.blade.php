<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>CORE Global</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<!-- asset() means project directory and copy the css,font,img,js,scss and create a test folder into the public directory and paste those bootstrap downloaded file -->
<link href="{{ asset('test/css/bootstrap.min.css') }}  " rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="{{ asset('test/css/mdb.min.css') }}" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="{{ asset('test/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('test/js/lib/prism.css') }}" rel="stylesheet">
<link href="{{ asset('test/css/aos.css') }}" rel="stylesheet">

<!-- For Body styles (optional) -->
<link href="{{ asset('test/css/style.min.css')}}" rel="stylesheet">
<style type="text/css">
html,
body,
header,
.carousel {
    height: 100%;
}

@media (min-width: 800px) and (max-width: 850px) {
    .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
    }
}
</style>