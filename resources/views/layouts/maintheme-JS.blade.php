<script type="text/javascript" src="{{ asset('test/js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('test/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('test/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('test/js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('test/js/sdk.js') }}"></script>
<script type="text/javascript">
// Animations initialization
new WOW().init();
</script>
<script type="text/javascript">
// AOS.init();
$(function() {
    AOS.init();
})
</script>

<script src="{{ asset('test/js/numscroller-1.0.js') }}"></script>
<script src="{{ asset('test/js/lib/prism.js') }}"></script>
<script src="{{ asset('test/js/aos.js') }}"></script>

<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
    nonce="sXM5tAst"></script> -->



<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=<APP_ID>&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>