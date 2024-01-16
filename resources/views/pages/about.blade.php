@extends('layout')

@section('content')
{{-- @foreach ($aboutData as $dataabout)

<div class="info-one" id="explain">
    <div class="heading text-center mb-5">
        <h1>{{ $dataabout->main_title }} </h1>
        <span></span>
    </div>
    <div class="row">
        <div class="info-content">
            <div class="heading">

                <p>
                    {{ $dataabout->description }}
                </p>
            </div>

        </div>
        <img src="{{asset('/images/about/' . $dataabout->image)}}" alt="pic1" loading="lazy">
    </div>

</div>
@endforeach --}}

{{-- ////////////// --}}
    {{--
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

    </div> --}}
{{-- end first  --}}

{{-- work --}}
<section class="work">
	<div class="heading text-center mb-5">
		<h1>صور أعمالنا  </h1>
		<span></span>
	</div>
<div class="gallery-image">
    @foreach ($aboutData as $dataabout)
    <div class="img-box">


      <img src="{{asset('/images/about/' . $dataabout->image)}}" alt="picture" loading="lazy" target="_blank" />
      <div class="transparent-box">
        <div class="caption">
          <p>
            {{ $dataabout->description }}
        </p>
          <p class="opacity-low">
            {{ $dataabout->main_title }}
        </p>
        </div>
      </div>
    </div>
    @endforeach


    {{-- <div class="img-box">

      <img src="{{asset('images/1_4.jpg')}}" alt="picture" target="_blank" loading="lazy" />
      <div class="transparent-box">
        <div class="caption">
          <p> جامع الصالح</p>
          <p class="opacity-low">مجموعه التاج</p>
        </div>
      </div>
    </div>
	<div class="img-box">

		<img src="{{asset('images/1_3.jpg')}}" alt="picture" loading="lazy" target="_blank" />
		<div class="transparent-box">
		  <div class="caption">
			<p>صبيه النصر</p>
			<p class="opacity-low">اعمال صبيه</p>
		  </div>
		</div>
	  </div>
	  <div class="img-box">

      <img src="{{asset('images/1_4.jpg')}}" alt="picture" loading="lazy" target="_blank"/>
      <div class="transparent-box">
        <div class="caption">
          <p> جامع الصالح</p>
          <p class="opacity-low">مجموعه التاج</p>
        </div>
      </div>
    </div>
    <div class="img-box">

        <img src="{{asset('images/1_4.jpg')}}" alt="picture" loading="lazy" target="_blank"/>
        <div class="transparent-box">
          <div class="caption">
            <p> جامع الصالح</p>
            <p class="opacity-low">مجموعه التاج</p>
          </div>
        </div>
      </div>
      <div class="img-box">

        <img src="{{asset('images/1_4.jpg')}}" alt="picture" loading="lazy" target="_blank"/>
        <div class="transparent-box">
          <div class="caption">
            <p> جامع الصالح</p>
            <p class="opacity-low">مجموعه التاج</p>
          </div>
        </div>
      </div>
      <div class="img-box">

        <img src="{{asset('images/1_4.jpg')}}" alt="picture" loading="lazy" target="_blank"/>
        <div class="transparent-box">
          <div class="caption">
            <p> جامع الصالح</p>
            <p class="opacity-low">مجموعه التاج</p>
          </div>
        </div>
      </div>
      <div class="img-box">

        <img src="{{asset('images/1_4.jpg')}}" alt="picture" loading="lazy" target="_blank"/>
        <div class="transparent-box">
          <div class="caption">
            <p> جامع الصالح</p>
            <p class="opacity-low">مجموعه التاج</p>
          </div>
        </div> --}}
      {{-- </div> --}}


  </div>
</section>


{{-- end work --}}
{{-- new section  --}}

{{-- <div class="heading text-center mb-5">
    @foreach ($data as $data)
    <h1>نبذه عناا </h1>
    <span></span>
</div>
<section class="articles">
    <article>
      <div class="article-wrapper">

  <figure>
    <img {{asset('/images/about/' . $data->image)}} alt="picture" loading="lazy" />
  </figure>
  <div class="article-body">
    <h2>{{ $data->$title }} </h2>

    <p id="hiddencontent1" class="hiddencontent">
        {{ $data->$card_description }}
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


  </section>
  @endforeach --}}
@endsection
