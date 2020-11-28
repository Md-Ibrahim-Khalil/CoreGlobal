   <!-- Navbar -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
       <div class="container">

           <!-- Brand -->
           <a class="navbar-brand waves-effect" href="{{route('pages')}}" target="_blank">
               <img src="test/img/Core-Logo.png" alt="">
           </a>

           <!-- Collapse -->
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <!-- Links -->
           <div class="collapse navbar-collapse" id="navbarSupportedContent">

               <!-- Left -->
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle drop-item" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">About
                       </a>
                       <div class="dropdown-menu dropdown-default" id="about-drop" aria-labelledby="about">
                           <a class="dropdown-item drop-item" href="{{route('about')}}">About Us</a>
                           <a class="dropdown-item drop-item" href="#">Mission</a>
                           <a class="dropdown-item drop-item" href="#">Community</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link waves-effect drop-item" href="{{route('entrepreneurship')}}">School Of
                           Entrepreneurship</a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle drop-item" id="courses" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Courses
                       </a>
                       <div class="dropdown-menu dropdown-default" aria-labelledby="courses">
                           <a class="dropdown-item drop-item" href="{{route('global')}}">CORE Global Courses</a>
                           <a class="dropdown-item drop-item" href="{{route('brand')}}">CORE Branded Courses</a>
                           <a class="dropdown-item drop-item" href="{{route('registration')}}">Registration</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link waves-effect drop-item" href="{{route('blog')}}">Blog</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link waves-effect drop-item" href="{{route('event')}}">Events</a>
                   </li>
               </ul>

               <!-- Right -->
               <ul class="navbar-nav nav-flex-icons">

                   <!-- <a class="nav-link waves-effect" href="{{route('registration')}}">
                       Sign In
                   </a> -->

                   <div class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle drop-item" id="about" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Sign In</a>
                       <div class="dropdown-menu action-form show">

                           <p class="hint-text">Sign in with your social media account</p>
                           <div class="form-group social-btn clearfix">
                               <a href="https://www.facebook.com/coreglobal.org/"
                                   class="btn btn-secondary facebook-btn float-left"><i class="fab fa-facebook-f"></i>
                                   Facebook</a>
                               <a href="https://twitter.com/thecoreglobal/"
                                   class="btn btn-secondary twitter-btn float-right"><i class="fab fa-twitter"></i>
                                   Twitter</a>
                           </div>
                           <div class="or-seperator"><b>or</b></div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Username" required="required">
                           </div>
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Password" required="required">
                           </div>
                           <input type="submit" class="btn btn-primary btn-block" value="Login">
                           <div class="text-center mt-2">
                               <a href="#">Forgot Your password?</a>
                           </div>
                           </form>
                       </div>
                   </div>
   </nav>
   <!-- Navbar -->
   <script type="text/javascript" src="{{ asset('test/js/jquery-3.4.1.min.js') }}"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="{{ asset('test/js/popper.min.js') }}"></script>
   <script>
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$('.dropdown-menu').removeClass(showClass);

$('#about').hover(function() {
    $dropdown.hover(
        function() {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
            const $this = $(this);
            $this.removeClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "false");
            $this.find($dropdownMenu).removeClass(showClass);
        }
    );
});
   </script>