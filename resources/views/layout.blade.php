<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TAG </title>
    
    <!-- Goggle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
        rel="stylesheet">
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Venobox Css -->
    {{-- <link rel="stylesheet" href="css/venobox.min.css"> --}}
    <!-- Bootstrap Css -->
    {{-- <link rel="stylesheet" href="css/rtl.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css"> --}}
</head>
 
   
    

<!-- end new Navbar -->
<body>
    <section class="navbar">
        <nav>
            <div class="menu-icon">
               <span class="fas fa-bars"></span>
            </div>
            <div class="logonav">
                @lang('public.tag_group')
            </div>

            <div class="nav-items">
                <ul>
                    <li><a href="/" class="active">@lang('public.home') </a></li>
                    <li><a href="{{ route('about') }}">@lang('public.ABOUT')</a></li>
                    <li><a href="{{ route('newproduct') }}">@lang('public.PRODUCTS')</a></li>
                    <li><a href="{{ route('work') }}">@lang('public.WORK')</a></li>
                    <li><a href="{{ route('why') }}">  @lang('public.WHY')</a></li>
                    <li><a href="">@lang('public.CONTACT')</a></li>
                </ul>
                
                    <select class="langselect" onchange="changeLanguage(this.value)">
                        <option value="ar"><a href="locale/ar">العربية</a></option>
                        <option value="en"><a href="locale/en">الانجليزيه</a></option>
                    </select>
                
            </div>
            {{-- <div class="nav-items">
                <li><a href="/" class="active">@lang('public.home') </a></li>
            <li><a href="{{route('about')}}">@lang('public.ABOUT')</a></li>
            <li><a href="{{route('newproduct')}}">@lang('public.PRODUCTS')</a></li>
            <li><a href="{{route('work')}}">@lang('public.WORK')</a></li>
            <li><a href="{{route('why')}}"> @lang('public.WHY')</a></li>
            <li><a href="{{route('contact')}}"> @lang('public.CONTACT')</</a></li>
           
            </div>
            
             <select class="langselect">
                <option >arabic</option>
                <option >english</option>
               </select>  --}}


               {{-- <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-sm text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="fi fi-{{ Config::get('languages')[App::getLocale()]/['flag-icon'] }}"></span>
                    {{ Config::get('languages')[App::getLocale()]['display'] }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @foreach (Config::get('languages') as $lang => $language)
                    @if ($locale != App::getLocale())
                    <a class="dropdown-item" href="{{ Route('lang.setlang', $locale) }}">
                        <span class="fi fi-{{ $language['flag-icon'] }}"></span>
                        {{ $language['display'] }}
                    </a>
                    @endif
                    @endforeach
                </div>
            </li> 
                dropdown --}}
           
            <div class="cancel-icon ">
                <span class="fas fa-times"></span>
             </div>
            
        
          
    
    </nav>
   
</section>

   <section>
        @yield('content')
    </section>
   



        <footer>
            <div class="footercontainer">
                <div class="socialicon">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    
                </div>
                <div class="footerlist">
                    <ul>
                        <li><a href="/">الصفحه الرئيسيه</a></li>
                        <li><a href="{{route('about')}}">من نحن</a></li>
                        <li><a href="{{route('why')}}">لماذا نحن</a></li> 
                        <li><a href="{{route('work')}}">اعمالنا </a></li>              
                         <li><a href="{{route('newproduct')}}">المنتجات</a></li>
                        <li><a href="{{route('contact')}}">تواصل معنا</a></li>            
                    </ul>
                </div>
            </div>
            <div class="footercopyright">
                <p>copyright &copy; 2023 designed by <a href="media-max tv.com"><span class="company" >media max</span></a></p>
            </div>
        </footer>

    <!-- start footer -->

  <!-- Start button up -->
<button id="scrollButton"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FFFFFF" viewBox="2 2 12 12" class="bi bi-arrow-up-short">
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path></svg></button>

<!-- End button up -->
      
  
    <script src="{{asset('js/myscript.js')}}"></script>

</body>

</html>