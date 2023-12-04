@extends('layout')

@section('content')
  <!-- Start Header -->
  
  <header id="homepage">
<div class="center">
</div>
<div class="text">
    <h2>مجموعه التاج</h2>
</div>
</header>
<!-- End Header -->

<!-- Start Info-One -->
<div class="info-one" id="explain">
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
        <img src="images/02.jpg" alt="pic1">
    </div>
</div>
<!-- End info -->
<hr>

    <!--start counter-->
    <section class="counter">
        <div class="container">
            <div class="row">
            <div class="item">
                <img src="./images/icon-1.webp" alt="">
                <span>66</span>
                <span>الموضفين</span>
            </div>

            <div class="item">
                <img src="./images/icon-2.webp" alt="">
                <span>233</span>
                <span> المشاريع</span>
            </div>

            <div class="item">
                <img src="./images/icon-3.webp" alt="">
                <span>4</span>
                <span>المصانع</span>
            </div>

            <div class="item">
                <img src="./images/icon-4.webp" alt="">
                <span>75</span>
                <span>سنوات الخبره</span>
            </div>
        </div>
        </div>
    </section>
   
    <!--end counter-->


{{-- فثسفةخىعش --}}

<!-------About End------->
<section class="2 section-padding prelative" data-scroll-index='1'>
    
      <div class="row">
        <div class="col-md-12">
          <div class="heading text-center mb-5  ">
            <h1>لماذا نحن</h1>
  <span></span>
</div>

{{-- start catagory --}}


{{-- end catagory --}}
            <p class="why_p">
                نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
                
                </p>
          
          <div class="section-content text-center">
            <div class="flex-container">
              <div class="icon-box">
                <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5>الدقه والانضباط</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
              </div>
              <div class="icon-box">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5>المصداقية والأمانة</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores .</p>
              </div>
              <div class="icon-box">
                <i class="fa fa-bolt" aria-hidden="true"></i>
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
  <!-------About End-------> 
  <hr>
{{-- maneger speech --}}
 <section class="manager_speech">
    <div class="heading text-center mb-5  ">
        <h1> كلمة المدير</h1>
<span></span>
</div> 

<section class="home_manager_word"><div class="home_manager_word_content">
   
<div class="home_manager_word_content_img" >
    <img src="images/person-2.jpg" alt="Manager"></div>
    <h3 class="home_manager_word_title">
        اسم المدير
    </h3> 
 <p class="home_manager_word_content_text" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
</p></div></section>    
</section>
{{-- maneger speech --}}
<!-- Start Header -->
{{-- <section class="header" id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/03.png" alt="">
                <div class="info text-center">
                    <p>مجموعة التاج</p>
                    <h2>للخرسانه الجاهزه والبلك الاتوماتيكي</h2>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/04.jpg" alt="">
                <div class="info text-center">
                    <p>مجموعة التاج</p>
                    <h2>للخرسانه الجاهزه والبلك الاتوماتيكي</h2>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/02.jpg" alt="">
                <div class="info text-center">
                    <p>مجموعة التاج</p>
                    <h2>للخرسانه الجاهزه والبلك الاتوماتيكي</h2>
                   
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" role="button" href="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" role="button" href="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section> --}}
<!-- End Header -->
@endsection


  
    
    