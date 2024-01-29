@extends('layout')
@section('content')


            {{-- splash --}}

             <div id="preloader-body" class="no-scroll-y">


                   <section id="preloader-section">
                    <div id="preloader">
                        <div id="ctn-preloader" class="ctn-preloader">
                            <div class="animation-preloader">


                                <div class="spinner"></div>


                                <div class="txt-loading">
                                <span data-text-preloader="مجموعة" class="letters-loading">مجموعة</span>
                                    <span data-text-preloader="التاج" class="letters-loading">التاج</span>
                                </div>


                            </div>


                            <div class="loader-section section-left"></div>
                            <div class="loader-section section-right"></div>


                        </div>
                    </div>
                </section>
            </div>

            {{-- splash --}}




            <section class="intro">
                @foreach ($categories1 as $category)
                        <div class="slider" >
                        <ul >
                        @if($category->items !=null)
                        @foreach($category->items as $item)

                        <li style="background-image:url({{asset('images/mainpage/' . $item->image_url )}})" alt="slider_pic" loading="lazy">
                            <div class="center-y">
                            <h3>
                                {{ $item->title }}
                                        </h3>
                            <a href="{{ route('about.index') }}">
                                {{ $item->description }}
                            </a>
                            </div>
                        </li>
                        </ul>



                        <ul>
                        <nav class="headnav">
                            <a href="#" aria-label="chang the photo in the curser"></a>
                            <a href="#" aria-label="chang the photo in the curser"></a>
                            <a href="#" aria-label="chang the photo in the curser"></a>
                        </nav>
                        </ul>
                        </div>
                        @endforeach
                        @else
                        @endif

             @endforeach
          </section>
            <!-- End Header -->


            {{-- start boxscroll --}}

            <div class="boxscroll" onclick="scrollByPercentage(100)">
            <span></span>
            <span></span>
            <span></span>
            </div>


            {{-- end boxscroll --}}



            <!-- Start Info-One -->
            <section class="info-one">
                @foreach($categories2 as $category)
                <div class="heading text-center mb-5">
                    <h1>
                        {{ $category->name }}
                    </h1>
                    <span></span>
                </div>
                @if($category->items !=null)
                @foreach($category->items as $item)
                <div class="row">
                    <div class="info-content">
                        <div class="heading">
                            <h2>
                                {{ $item->title }}
                            </h2>
                            <p>
                                {{ $item->description }}
                                </p>
                        </div>


                    </div>

                    <img src="{{asset('images/mainpage/' . $item->image_url )}}" alt="pic1" loading="lazy">

                    @endforeach
                    @else
                @endif
                </div>
                @endforeach
            </section>
            <!-- End info -->




                <!--start counter-->
                    <section class="counter">
                    <div class="countercontainer">

                    <ul >
                        <li style="--accent-color:var(--main-color)">
                            <div class="iconcounter"><i class="fa-brands fa-codepen"></i></div>
                            <div class="titlecounter">5</div>
                            <div class="descr">عدد المصانع </div>
                        </li>
                        <li style="--accent-color:var(--main-color)">
                            <div class="iconcounter"><i class="fa-solid fa-clock"></i></div>
                            <div class="titlecounter">24</div>
                            <div class="descr">ساعات العمل </div>
                        </li>
                        <li style="--accent-color: var(--main-color)">
                            <div class="iconcounter"><i class="fa-solid fa-user-tie"></i></div>
                            <div class="titlecounter">66</div>
                            <div class="descr">عدد الموضفين</div>

                        </li>
                        <li style="--accent-color:var(--main-color)">
                            <div class="iconcounter"><i class="fa-solid fa-helmet-safety"></i></div>
                            <div class="titlecounter">21</div>
                            <div class="descr">سنوات الخبره</div>
                        </li>
                        <li style="--accent-color:var(--main-color)">
                            <div class="iconcounter"><i class="fa-solid fa-building"></i></div>
                            <div class="titlecounter">103</div>
                            <div class="descr"> المشاريع</div>
                        </li>
                        </div>
                        </section>
                {{-- end counter --}}


                <!-------About End------->


                {{-- start why section --}}
                <section class="whysection">




                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($categories3 as $category)
                        <div class="heading text-center mb-5  ">
                            <h1>
                               {{ $category->name }}
                                </h1>
                                <span></span>
                    </div>

                            <p class="why_p">
                                نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


                                </p>
                                @if($category->items !=null)
                                @foreach($category->items as $item)

                        <div class="section-content text-cen    ter">
                            <div class="flex-container">
                            <div class="icon-box">

                                <img src="{{asset('images/mainpage/' . $item->image_url )}}" alt="pic1" loading="lazy">

                                {{-- <i class="fa-solid fa-hand-fist"></i> --}}
                                <h5>
                                    {{ $item->title }}
                                 </h5>
                                <p>
                                     {{ $item->description }}
                                </p>
                            </div>
                            @endforeach
                        @else
                        @endif
                        @endforeach
                            {{-- <div class="icon-box">
                                <i class="fa-regular fa-handshake"></i>
                                <h5>المصداقية والأمانة</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-shield"></i>
                                <h5>حماية البيئة</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-shield"></i>
                                <h5>حماية البيئة</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-shield"></i>
                                <h5>حماية البيئة</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
                            </div>
                            </div> --}}

                        </div>
                        </div>
                    </div>
                    </div>
                </section>


            {{-- end why section --}}

            <hr>


            {{-- maneger speech --}}


            <section class="manager_speech">
                @foreach($categories4 as $category)
                <div class="heading text-center mb-5  ">
                    <h1>  {{ $category->name }}</h1>
                        <span></span>
                </div>

                @if($category->items !=null)
                @foreach($category->items as $item)

                <section class="home_manager_word"><div class="home_manager_word_content">

                <div class="home_manager_word_content_img" >
                    <img src="{{asset('images/mainpage/' . $item->image_url )}}" alt="pic1" loading="lazy">
                </div>
                </div>
                    <h3 class="home_manager_word_title">
                        {{ $item->title }}
                    </h3>
                <p class="home_manager_word_content_text" style="transform: translate(0px, 0px);  opacity: 1; visibility: inherit;">
                    <p style="text-align: center; padding: 0 8rem 0 8rem;">{{ $item->description }}</p>
                </p>
                </div>
                </section>

                @endforeach
                @else
                @endif

            <br>
            @endforeach
            </section>

            {{-- @endforeach --}}
            {{-- maneger speech --}}


@endsection
