<!DOCTYPE html>
<html lang="en">

<head>
   <title>Admin Dashboard1212</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   {{-- <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon"> --}}
   {{-- <link rel="icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon"> --}}
   
<!-- Bootstrap toggle js and css cdn-->
 
   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
   <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{{asset('backend/assets/css/svg-weather.css')}}" rel="stylesheet">
<!-- summernote -->
<link rel="stylesheet" href="{{asset ('backend/plugins/summernote/summernote-bs4.min.css')}}">

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/main.css')}}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print" href="#top">
         {{-- <a href="index.html" class="logo"><img class="img-fluid able-logo" src="{{asset('backend/assets/images/R.K._Netralaya.png ')}}" alt="Theme-logo"></a> --}}
         <a href="index.html" class="logo"><h3 style="padding-top:5px">R. <span style="color:#4778FF ">K.</span> <span style="color: #4D68FE">Netralaya</span></h3></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
               <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                  <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                     <i class="ti-search"></i>
                  </a>
               </li>
            </ul>
            <!-- Navbar Right Menu-->
            

               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">0</span>
                     </a>
                  </li>
                  <!-- chat dropdown -->
                  <li class="pc-rheader-submenu ">
                     <a href="#!" class="drop icon-circle displayChatbox">
                        <i class="icon-bubbles"></i>
                        <span class="badge badge-danger header-badge">0</span>
                     </a>

                  </li>
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{asset('backend/assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                        <span>{{Auth::user()->name}} <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a  href="/logout"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{-- {{ __('Logout') }} --}}
                            <i class="icon-logout"></i> Logout
                        </a>

                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form></li>

                     </ul>
                  </li>
               </ul>

               <!-- search -->
               <div id="morphsearch" class="morphsearch">
                  <form class="morphsearch-form">

                     <input class="morphsearch-input" type="search" placeholder="Search..." />

                     <button class="morphsearch-submit" type="submit">Search</button>

                  </form>
                  <div class="morphsearch-content">
                     <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                           <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                           <h3>Shaun Dona</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="{{asset('backend/assets/images/avatar-1.png')}}" alt="PagePreloadingEffect" />
                           <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img src="{{asset('backend/assets/images/avatar-1.png')}}" alt="DraggableDualViewSlideshow" />
                           <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="{{asset('backend/assets/images/avatar-1.png')}}" alt="TooltipStylesInspiration" />
                           <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                           <img src="{{asset('backend/assets/images/avatar-1.png')}}" alt="NotificationStyles" />
                           <h3>Notification Styles Inspiration</h3>
                        </a>
                     </div>
                  </div>
                  <!-- /morphsearch-content -->
                  <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
               </div>
               <!-- search end -->
            </div>
         </nav>
      </header>
      @include('backend.include.sidebar')