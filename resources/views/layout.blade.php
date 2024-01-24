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
                 <ul>
                    <li><a href="{{route('index')}}">@lang('public.home')</a></li>
                    <li><a href="{{ route('about.index') }}" >@lang('public.ABOUT')</a></li>
                    @foreach ($pro as $category)
                    <li><a href="{{ route('proByCate.show', $category->id) }}" >{{  $category->product_title}}</a>
                        @endforeach
                    </li>
                        {{-- <ul class="paste-button">
                             @foreach ($pro as $category)
                            <li value="{{ $category->id }}">
                                <a href="{{ route('proByCate.show', $category->id) }}">
                                    {{  $category->product_title}}</a>
                                </li>
                            @endforeach
                        </ul> --}}



                        {{-- <ul class="paste-button" >
                     <select class="select" >
                            @foreach ($pro as $category)

                            <option value="{{ $category->id }}">
                                <li>
                                    <a class="paste-button" href="{{ route('proByCate.show', $category->id) }
                                    ">
                                        {{ $category->product_title }}
                                    </a>
                                </li>
                            </option>
                            @endforeach
                        </select>
                        </ul> --}}









                    {{-- </li> --}}
                    <li><a href="{{ route('news.index') }}">@lang('public.WORK')</a></li>
                    <li><a href="{{ route('why.index') }}" class="{{ Request::is('pages/why') ? 'active' : '' }}">@lang('public.WHY')</a></li>
                    <li><a href="{{ route('contact.index') }}" class="{{ Request::is('pages/contact') ? 'active' : '' }}">@lang('public.CONTACT')</a></li>
                </ul>




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
