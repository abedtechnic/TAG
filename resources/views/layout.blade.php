@include('include/head')


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
                {{-- <ul>
                    <li><a href="/" class="active">@lang('public.home') </a></li>
                    <li><a href="{{ route('about') }}">@lang('public.ABOUT')</a></li>
                    <li><a href="{{ route('newproduct') }}">@lang('public.PRODUCTS')</a></li>
                    <li><a href="{{ route('work') }}">@lang('public.WORK')</a></li>
                    <li><a href="{{ route('why') }}">  @lang('public.WHY')</a></li>
                    <li><a href="{{ route('contact') }}">@lang('public.CONTACT')</a></li>
                </ul> --}}
                 <ul>
                    <li><a href="{{route('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">@lang('public.home')</a></li>
                    <li><a href="{{ route('about') }}" class="{{ Request::is('pages/about') ? 'active' : '' }}">@lang('public.ABOUT')</a></li>
                    <li><a href="{{ route('product.index') }}" >@lang('public.PRODUCTS')</a></li>
                    <li><a href="{{ route('news.index') }}">@lang('public.WORK')</a></li>
                    <li><a href="{{ route('why.index') }}" class="{{ Request::is('pages/why') ? 'active' : '' }}">@lang('public.WHY')</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ Request::is('pages/contact') ? 'active' : '' }}">@lang('public.CONTACT')</a></li>
                </ul>


                    <select class="langselect" onchange="changeLanguage(this.value)">
                        <option value="ar"><a href="locale/ar">العربية</a></option>
                        <option value="en"><a href="locale/en">الانجليزيه</a></option>
                    </select>

            </div>

            <div class="cancel-icon ">
                <span class="fas fa-times"></span>
             </div>




    </nav>

</section>

   <section>

        @yield('content')
    </section>




 <!-- start footer -->
   @include('include/footer')

{{-- end footer --}}


  <!-- Start button up -->
<button id="scrollButton"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FFFFFF" viewBox="2 2 12 12" class="bi bi-arrow-up-short">
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path></svg></button>

<!-- End button up -->


    <script src="{{ asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('js/myscript.js')}}"></script>



</body>

</html>
