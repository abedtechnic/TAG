@extends('layout')

@section('content')
  <!-- Start Header -->
  
  {{-- <header id="homepage">
<div class="center">
</div>
<div class="text">
    <h2>مجموعه التاج</h2>
</div>
</header> --}}

   {{-- splash --}}

   {{-- <div id="preloader-body" class="no-scroll-y">

    <!-- Start: Preloader -->
    <section id="preloader-section">
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    
                    <!-- Spinner -->
                    <div class="spinner"></div>
                    
                    <!-- Start: Text Loading -->
                    <div class="txt-loading">
                        <span data-text-preloader="T" class="letters-loading">T</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                        <span data-text-preloader="G" class="letters-loading">G</span>
                        <span data-text-preloader="~" class="letters-loading">~</span>
                        <span data-text-preloader="G" class="letters-loading">G</span>
                        <span data-text-preloader="R" class="letters-loading">R</span>
                        <span data-text-preloader="O" class="letters-loading">O</span>
                        <span data-text-preloader="U" class="letters-loading">U</span>
                        <span data-text-preloader="P" class="letters-loading">P</span>
                       <!--  <span data-text-preloader="I" class="letters-loading">I</span>
                        <span data-text-preloader="V" class="letters-loading">V</span>
                        <span data-text-preloader="E" class="letters-loading">E</span> -->
                    </div>
                    <!-- End: Text Loading -->

                </div>

                <!-- Start: Preloader sides - Model 1 -->
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
                <!-- End: Preloader sides - Model 1 -->

            </div>
        </div>
    </section>
    <!-- End: Preloader -->

</div> --}}
{{-- splash --}}  

<section class="intro">

    <div class="slider" >
  
      <ul >       
        <li style="background-image:url(../images/02.jpg)">
          <div class="center-y">
            <h3>الشركه الرائده في اليمن</h3>
            <a href="{{ route('about') }}">لماذا نحن</a>	
          </div>
        </li>
        <li style="background-image:url(https://images.unsplash.com/photo-1451906278231-17b8ff0a8880?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1375)">
          <div class="center-y">
            <h3>الجوده في المنتجات</h3>
            <a href="{{ route('newproduct') }}"> رؤيه المنتجات</a>	
          </div>
        </li>
        <li style="background-image:url(https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1375)">
          <div class="center-y">
            <h3>الالتزام بالمعايير العالميه</h3>
            <a href="{{route('why')}}">تفاصيل اكثر</a>	
          </div>
        </li>
      </ul>

      <ul>
        <nav class="headnav">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </nav>
      </ul>
    </div>
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

    <div class="heading text-center mb-5">
        <h1>من نحن</h1>
        <span></span>
    <div class="row">
        <div class="info-content">
            <div class="heading">
                <h2>نبذه عن من نحن</h2>
                <p>مجموعة التاج للخرسانة الجاهزة والبلك الأوتوماتيكي 
                    والأسمنت هي شركة وطنية رائدة في مجالها منذ تأسيسها ووضع لبناتها الأولى في العام 2000م في العاصمة اليمنية صنعاء، لتتربع على عرش التفوق والتميز في إنتاج الخرسانة الجاهزة والبلوك الأوتوماتيكي والأسمنت ، لما تمتلكه من مؤهلات جعلتها تحتل هذه المكانة المرموقة، حيث تنتهج نظام الجودة وفقاً للاستاندر البريطاني، والكفاءة العالية للمعدات والآلات، علاوة على الكادر الإداري والفني المؤهل والمدرب،
                     وامتلاكها لأحدث مختبر متجدد على الساحة.</p>
            </div>
            <button>
                <a href="{{route('about')}}">المزيد</a>
              </button>
        </div>
        <img src="{{asset('images/02.jpg')}}" alt="pic1" loading="lazy">
    </div>
</div>
</section>
<!-- End info -->




    <!--start counter-->
    <section class="counter">
      <div class="countercontainer">

      <ul>
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
          <div class="heading text-center mb-5  ">
            <h1>لماذا نحن</h1>
                  <span></span>
      </div>

            <p class="why_p">
                نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
                
                </p>
          
          <div class="section-content text-center">
            <div class="flex-container">
              <div class="icon-box">
                <i class="fa-solid fa-hand-fist"></i>
                <h5>الدقه والانضباط</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
              </div>
              <div class="icon-box">
                <i class="fa-regular fa-handshake"></i>   
                <h5>المصداقية والأمانة</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
              </div>
              <div class="icon-box">
                <i class="fa-solid fa-shield"></i>
                <h5>حماية البيئة</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
              </div>
            </div>
            <div class="newbtn"  >
            <button >
                <a style="align-items: center" href="{{route('why')}}">المزيد</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- end why section --}}
 
  <hr>


  {{-- maneger speech --}}


 <section class="manager_speech">
    <div class="heading text-center mb-5  ">
        <h1> كلمة المدير</h1>
            <span></span>
     </div> 



<section class="home_manager_word"><div class="home_manager_word_content">
   
<div class="home_manager_word_content_img" >
    <img src="{{asset('images/person-2.jpg')}}" alt="Manager" loading="lazy"></div>
    <h3 class="home_manager_word_title">
        اسم المدير
    </h3> 
 <p class="home_manager_word_content_text" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
</p></div></section>    
</section>

{{-- maneger speech --}}


@endsection


  
    
    