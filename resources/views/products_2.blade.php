@extends('layout')


@section('content')

<!-- Start portfolio -->

<section class="portfolio mt-5" id="portfolio">
    <div class="container">
        <div class="heading text-center mb-5">
            <h2>المنتجات التجاريه</h2>
            <span></span>
        </div>
        <div class="text-center">
            <ul>
                <li class="btn btn-danger active" data-filter="all">جميع المنتجات</li>
                <li class="btn btn-danger" data-filter=".offices">المعدات الثقيله</li>
                <li class="btn btn-danger" data-filter=".chairs">  زيوت التشحيم والاطارات</li>
                
            </ul>
        </div>
        <div class="gallary mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mix offices">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/الاسمنت.jpeg  ">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    
                                    <span>خلاطات </span>
                        
                                    
                                </div>
                                
                            </div>
                            <img src="images/1_3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix offices">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/خرسانه.jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span> ونشات</span>
                                </div>
                            </div>
                            <img src="images/تنزيل (1).jpeg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix offices">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/3 (1).jpg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>نقالات</span>
                                </div>
                            </div>
                            <img src="images/تنزيل (3).jpeg" alt="">
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 mix chairs">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/تنزيل (1).jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>الاطارات</span>
                                </div>
                            </div>
                            <img src="images/images (6).jpeg" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix chairs">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/تنزيل (2).jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>زيوت التشحيم</span>
                                </div>
                            </div>
                            <img src="images/تنزيل (2).jpeg" alt="">
                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 mix rooms">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/تنزيل (1).jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>المعدات الثقيله</span>
                                </div>
                            </div>
                            <img src="images/تنزيل (1).jpeg" alt="">
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-6 mix rooms">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/تنزيل (2).jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>زيوت التشحيم</span>
                                </div>
                            </div>
                            <img src="images/تنزيل (2).jpeg" alt="">
                        </a>
                    </div>
                </div> 
             
                <div class="col-lg-4 col-md-6 mix chairs">
                    <div class="box">
                        <a class="venobox" data-gall="venue-gallary" href="images/images (6).jpeg">
                            <div class="overlay">
                                <div class="info">
                                    <h6>مجموعه التاج</h6>
                                    <span>الاطارات </span>
                                </div>
                            </div>
                            <img src="images/images (6).jpeg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- End portfolio -->

        

--}}

       
@endsection