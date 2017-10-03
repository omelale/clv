<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <div class="pimg1" id="pimg1">
        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
              @if (Auth::check())
            
              <a id="sidenavName" href="{{ url('/profile') }}"><img id="imgSidenav" src="/uploads/avatars/{{Auth::user()->avatar}}">
              {{ Auth::user()->name }}</a>  
              <a href="#">Browse Projects</a>
              <a href="{{ url('/forums') }}">Forum</a>        
              <a href="#">About Us</a>
              <a href="#">Services</a>
              <a href="#">Contact</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                    @else
                         
                          <a href="#">Browse Projects</a> 
                          <a href="{{ url('/forums') }}">Forum</a>       
                          <a href="#">About Us</a>
                          <a href="#">Services</a>
                          <a href="#">Contact</a>
                          <a href="{{ url('/login') }}">Login</a>
                          <a href="{{ url('/register') }}">Register</a>
                    @endif
        </div>
         <span id="sidebar_button" onclick="openNav()">&#9776;</span>
      <div class="ptext">
          <span class="border">
            Our website
          </span>
      </div> 
  </div>
    <!--<div id="cookie">
        @include('cookieConsent::index')
    </div>-->
  <section class="section section-light">
    <h2>Browse projects and become a helper</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae unde labore ipsam ducimus culpa facere explicabo ex optio provident suscipit obcaecati, nam a, placeat iusto rerum minus atque, maxime ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aspernatur ab, possimus dignissimos, sed sapiente, aut impedit magnam amet facilis assumenda nulla cupiditate velit consequatur, dolorum illo vero excepturi dolorem!
    
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border">
        Image Two Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Section Two</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Section Three</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg4">
    <div class="ptext">
      <span class="border">
        Our Website
      </span>
    </div>
  </div>

  <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px"; 
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}  
  </script>
</body>
</html>
