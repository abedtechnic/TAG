@extends('layout')

@section('content')

<section class="products">
<div class="heading text-center mb-5" style="padding-bottom: 30px">
    <h1>المنتجات </h1>
    <span></span>

    <div class="detail">

      <div class="box">
          <div class="inbox">
              <i class="fa-solid fa-city"></i>
              <h3>المنتجات الصناعيه</h3>
          </div>

          <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
             provident beatae accusamus, quaerat impedit eveniet nihil non obcaecati maiores magni
              suscipit, enim, at nostrum? Dolor ipsam non soluta nihil rem..
          </p>
      </div>


      <div class="box">
          <div class="inbox">
              <i class="fa-solid fa-truck-front"></i>
              <h3>المنتجات التجاريه</h3>
          </div>
          <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
             provident beatae accusamus, quaerat impedit eveniet nihil non obcaecati maiores magni
              suscipit, enim, at nostrum? Dolor ipsam non soluta nihil rem..

          </p>
      </div>




  </div>
  <hr>

  <div class="heading text-center mb-5" style="padding-bottom: 30px">
    <h1>المنتجات التجاريه</h1>
    <span></span>

</div>

 <!-- Start Info-One -->

 <div class="info-one" id="explain">
    <div class="row">

        @foreach ($showData as $show)
        <div class="info-content">
            <div class="heading">
                <h2>{{$show->title}}</h2>
                <p style="text-align: right">
                    {{$show->description}}
                </p>
            </div>
            {{-- <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}" loading="lazy"> --}}
        </div>
        @endforeach









    </div>
  </div>

 {{-- <div class="info-one" id="explain">
  <div class="row">
      <div class="info-content">
          <div class="heading">
            <h2>المعدات الثقيله</h2>
            <p style="text-align: right">
              نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
               كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
               نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
               وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


          </p>
          </div>
      </div>
      <img src="{{asset('images/12.png')}}" alt="tag_img" loading="lazy" >
  </div>
</div> --}}
<!-- End info -->
 {{-- <!-- Start Info-One -->
 <div class="info-one" id="explain">
  <div class="row">
      <div class="info-content">
          <div class="heading">
            <h2>الاطارات </h2>

            <p style="text-align: right">
                نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
                 كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
                 نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
                 وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


            </p>
          </div>
      </div>
      <img src="{{asset('images/1234.jpg')}}" alt="tag_img" loading="lazy" >
  </div>
</div>
<!-- End info -->
 <!-- Start Info-One -->
 <div class="info-one" id="explain">
  <div class="row">
      <div class="info-content">
          <div class="heading">
                <h2> الزيوت</h2>

<p style="text-align: right">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
     كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
     نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
     وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


</p>
          </div>
      </div>
<img src="{{asset('images/oil.png')}}" alt="tag_img" loading="lazy" >   </div>
</div>
<!-- End info -->




<div class="heading text-center mb-5" style="padding-bottom: 30px">
  <h1>المنتجات التجاريه</h1>
  <span></span>

</div>

<!-- Start Info-One -->
<div class="info-one" id="explain">
<div class="row">
    <div class="info-content">
        <div class="heading">
          <h2>المعدات الثقيله</h2>
          <p style="text-align: right">
            نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
             كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
             نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
             وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


        </p>
        </div>
    </div>
    <img src="{{asset('images/12.png')}}" alt="tag_img" loading="lazy" >
</div>
</div>
<!-- End info -->
<!-- Start Info-One -->
<div class="info-one" id="explain">
<div class="row">
    <div class="info-content">
        <div class="heading">
          <h2>البلك الاتوماتيكي </h2>

          <p style="text-align: right">
              نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
               كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
               نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
               وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


          </p>
        </div>
    </div>
    <img src="{{asset('images/blok.jpeg')}}" alt="الاسمنت" loading="lazy">
</div>
</div>
<!-- End info -->
<!-- Start Info-One -->
<div class="info-one" id="explain">
<div class="row">
    <div class="info-content">
        <div class="heading">
              <h2> الاسمنت</h2>

<p style="text-align: right">
  نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
   كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
   نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
   وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


</p>
        </div>
    </div>
    <img src="{{asset('images/cement.jpeg')}}" alt="الاسمنت" loading="lazy">
</div>
</div> --}}
<!-- End info -->

</section>



















{{-- <div class="show">

    {{-- <h2>المعدات الثقيله</h2>


  <img src="{{asset('images/12.png')}}" alt="tag_img" loading="lazy" >
  <p style="text-align: right">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
     كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
     نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
     وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


</p>
</div>

<div class="show">

  {{-- <h2>الاطارات </h2>

<p style="text-align: right">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
     كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
     نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
     وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


</p>
<img src="{{asset('images/1234.jpg')}}" alt="tag_img" loading="lazy" >

</div>

<div class="show">

  {{-- <h2> الزيوت</h2>
  <img src="{{asset('images/تنزيل (2).jpeg')}}" alt="tag_img" loading="lazy" >
<p style="text-align: right">
    نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
     كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية،
     نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة
     وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.


</p>


</div> --}}
{{--
</div>

<hr>
<h2>المنتجات التي تمتلكها مجموعه التاج</h2>





<div class="spec">

    <div class="s-para">
        <div class="heading text-center mb-5" style="padding-bottom: 30px">
            <h1>المنتجات الصناعيه</h1>
            <span></span>

        </div>
         <p>
            نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
            كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
        </p>

        <ul class="acc">
          <li>
            <input type="radio" name="acc" id="wfirst">
            <label for="wfirst">الاسمنت</label>
            <div class="content">
                <p>
                    الأسمنت البورتلاندى العادى – المتميز – ( مكافىء 52,5R )
                    الاسمنت البورتلاندى العادى ( مكافىء 42,5 R )
                  </p>
              <img src="{{asset('images/الاسمنت.jpeg')}}" alt="الاسمنت" loading="lazy">

            </div>
          </li>

          <li>
            <input type="radio" name="acc" id="wsecond">
            <label for="wsecond">الخرسانه الجاهزه</label>
            <div class="content">
                <p>
                    نقدم نحن في مجموعة التاج منتجات الأسمنت والخرسانة الجاهزة والبلك بجودة ابتكارية ومتجددة تفوق
                     توقعات العملاء، وتتكيف مع معايير وسياسات الجودة، وتفي بمتطلبات التجديد والتحديث في تكنولوجيا البناء والتصميم، سواء كان ذلك في ناحية الإسكان أو الأبنية التجارية، أو الصناعية، أو ناطحات السحاب، وكذا مشاريع البنية التحتية، حيث ننتج مختلف أنواع الخرسانة الجاهزة مثل
                  </p>
              <img src="{{asset('images/خرسانه.jpeg')}}" alt="picture" loading="lazy">

            </div>
          </li>

          <li>
            <input type="radio" name="acc" id="wthird">
            <label for="wthird">البلك</label>
            <div class="content">
                <p>
                    شركة التاج تعتبر المنتج الأكبر للبلوك الإسمنتي على مستوى الوطن حيث ننتج جميع أنواع ومقاسات البلوك الإسمنتي المفرغ،
                     والهوردي، والمصمت.. وبجودة عالية وفقاً لأعلى المواصفات المعتمدة عالمياً.
                  </p>
              <img src="{{asset('images/3 (1).jpg')}}" alt="picture" loading="lazy">

            </div>
          </li>

      </ul>
    </div>

</div>

<div class="boundary1"></div>

<div class="spec">

    <div class="s-para">

         <p>
            نحرص على الالتزام بالمبادئ السامية التي كانت سراً من أسرار النجاح الذي وصلت إليه.
            كل ذلك رسم وما يزال يرسم مسيرة نجاح وتميز في طريق تحقيق الأهداف الاستراتيجية، نحو التوسع والتطور الذي كانت خطوته الأولى افتتاح فرع المتحدة للخرسانة في مدينة الحديدة وما تلاها من المنشآت والمرافق المترجمة للخطة الاستراتيجية لهذا الصرح الوطني العملاق.
        </p>

        <ul class="acc">
          <li>
            <input type="radio" name="acc" id="afirst">
            <label for="afirst">المعدات الثقيله</label>
            <div class="content">
                <p>
                    قيد الانشاء
                  </p>
              <img src="{{asset('images/تنزيل (1).jpeg')}}" alt="picture" loading="lazy">

            </div>
          </li>

          <li>
            <input type="radio" name="acc" id="asecond">
            <label for="asecond"> زيوت التشحيم</label>
            <div class="content">
                <p>
                  قيد الانشاء
                  </p>
              <img src="{{asset('images/تنزيل (2).jpeg')}}" alt="picture" loading="lazy">

            </div>
          </li>

          <li>
            <input type="radio" name="acc" id="athird">
            <label for="athird">الاطارات</label>
            <div class="content">
                <p>
                    قيد الانشاء
                  </p>
              <img src="{{asset('images/images (6).jpeg')}}" alt="picture" loading="lazy">

            </div>
          </li>

      </ul>
    </div>

</div>



--}}





<p id="purchase">
لنساعدك في تحقيق هدفك<a href="{{ route('contact') }}"  >تواصل معنا   </a>
</p>
<hr>

</div>

@endsection
