@extends('layout')

@section('content')
<div class="info-one" id="explain">
    <div class="heading text-center mb-5">
        <h1>من نحن</h1>
        <span></span>
    </div>
    <div class="row">
        <div class="info-content">
            <div class="heading">
            
                <p>مجموعة التاج للخرسانة الجاهزة والبلك الأوتوماتيكي 
                    والأسمنت هي شركة وطنية رائدة في مجالها منذ تأسيسها ووضع لبناتها الأولى في العام 2000م في العاصمة اليمنية صنعاء، لتتربع على عرش التفوق والتميز في إنتاج الخرسانة الجاهزة والبلوك الأوتوماتيكي والأسمنت ، لما تمتلكه من مؤهلات جعلتها تحتل هذه المكانة المرموقة، حيث تنتهج نظام الجودة وفقاً للاستاندر البريطاني، والكفاءة العالية للمعدات والآلات، علاوة على الكادر الإداري والفني المؤهل والمدرب، وامتلاكها لأحدث مختبر متجدد على الساحة. كما تحرص شركة التاج على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، 
                    نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع مصنع الخير في صنعاء ثم مصنع 
                    المتحدة للخرسانة في مدينة الحديدة ثم مصنع أسمنت الإتحاد في الحديدة وما تلاها 
                    من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.</p>
            </div>
           
        </div>
        <img src="{{ asset('images/02.jpg') }}" alt="pic1" loading="lazy">
    </div>


{{-- end first  --}}

{{-- new section  --}}

<div class="heading text-center mb-5">
    <h1>نبذه عناا </h1>
    <span></span>
</div>

<section class="articles">
    <article>
      <div class="article-wrapper">
 
  <figure>
    <img src="{{asset('images/تنزيل (2).jpeg')}}" alt="picture" loading="lazy" />
  </figure>
  <div class="article-body">
    <h2>الرؤيه والرساله</h2>
    
    <p id="hiddencontent1" class="hiddencontent">الريادة والتميز والتفرد في تقديم 
        الخدمة الأفضل في مجال إنتاج الخرسانة الجاهزة والبلك والأسمنت على مستوى الوطن، بأعلى كفاءة
         ، ووفقاً لأحدث معايير وأنظمة الجودة المعمول بها عالمياً.  
            زرع روح الاطمئنان والثقة المطلقة لدى جميع عملائنا
        ، من خلال الطرق المستدامة والحلول الابتكارية المطابقة
        لأحدث معايير الجودة العالمية في صناعة الأسمنت والخرسانة الجاهزة والبلك .
        كما تحرص شركة التاج على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه. كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
    </p>
    <a href="#" class="read-more" onclick="toggleHiddenContent(event,'hiddencontent1', 'read-more-text1', 'read-less-text1')">
      <span id="read-more-text1">أقرا المزيد</span>
      <span id="read-less-text1" style="display: none;">أقرا أقل</span>
      <span class="sr-only">about this is some title</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>
</div>


    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="{{asset('images/تنزيل (1).png')}}" alt="picture" loading="lazy" />
        </figure>
        <div class="article-body">
          <h2>الاهداف</h2>
          <p id="hiddencontent2" class="hiddencontent">
            خلق شراكة مستدامة مع عملائنا من خلال الإيفاء بالتزاماتنا وتطبيق مبادئنا.
            الريادة والتميز في منتجات الخرسانة الجاهزة وبجودة عالمية.
            ربط التميز والابتكار والتوسع بالمحافظة على البيئة وحمايتها.
            توفير أحدث وأسرع الحلول الفعالة للمواءمة بين الجودة العالية والتكلفة المناسبة.
            إفتتاج فرع تجاري للتاج من خلال إستقطاب أكبر الشركات العالمية المصنعة للمعدات الثقيلة وزيوت اتشحيم والإطارات وتوفير منتجاتها .
            التحديث المستمر لأسطولنا من الشاحنات والمضخات والآلات لمواكبة مستجدات التقنية الحديثة في مجال الخرسانة الجاهزة وتلبية الطلب المتزايد.
                       </p>
                       <a href="#" class="read-more" onclick="toggleHiddenContent(event,'hiddencontent2', 'read-more-text2', 'read-less-text2')">
                        <span id="read-more-text2">أقرا المزيد</span>
                        <span id="read-less-text2" style="display: none;">أقرا أقل</span>
                        <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="{{asset('images/04.jpg')}}" alt="picture" loading="lazy" />
        </figure>
        <div class="article-body">
          <h2>حقائق عنا</h2>
          <p id="hiddencontent3" class="hiddencontent">
            نحن أكبر منتج للخرسانة الجاهزة والبلوك الأوتوماتيكي على مستوى الوطن.
            شاركنا في إنشاء أكثر من 11.000 مشروع معماري وبنية تحتية.
            نمتلك الحصة الأكبر من المشاريع المنفذة في العاصمة صنعاء.
            نحن الشركة الأعلى جودة وفق أفضل المواصفات العالمية.
            لدينا أكبر أسطول صب ونقل على مستوى الجمهورية . </p>
            <a href="#" class="read-more" onclick="toggleHiddenContent(event,'hiddencontent3', 'read-more-text3', 'read-less-text3')">
                <span id="read-more-text3">أقرا المزيد</span>
                <span id="read-less-text3" style="display: none;">أقرا أقل</span>
                <span class="sr-only">about this is some title</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
        </div>
      </div>
    </article>
  </section>







@endsection