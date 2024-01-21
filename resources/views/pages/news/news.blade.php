@extends('layout')

@section('content')

{{-- start news --}}
<section class="newswork">
	{{-- <div class="heading text-center mb-5">
		<h1> اخر الاخبار </h1>
		<span></span>
	</div> --}}
    @foreach ($showDataNews as $dataNews)


<div class="articlenews">
	<div class="wrappernews"style="background: url('{{ asset('images/news' . $dataNews->image_url) }}') no-repeat
    center center fixed;
      position: relative; padding: 100px;height: 80vh;background-size: cover;">
		<div class="overlay"></div>
	  <div class="wrapperText">
        <img class="newsimg" src="{{asset('images/imageslogo.png')}}" alt="">
        {{-- <img class="newsimg" src="{{asset('/images/products/' . $dataNews->image_url)}}" alt="pic1" loading="lazy"> --}}
		{{-- <img  src="{{asset('images/news' . $showDataNews->image_url)}}" alt="picture" loading="lazy"> --}}

		<h1>

		  <mark>
            {{ $dataNews->title }}
        </mark>
		</h1>


	  </div>
	</div>

	  <div class="articleText">
		<h4 class="introduction">{{ $dataNews->contentone }}</h4>
		<p>{{ $dataNews->contenttow }}</p>

	</div>
  </div>
  @endforeach
  <div class="articlenews">
	<div class="wrappernews" style="background: url(/images/1_3.jpg) no-repeat center center fixed;  position: relative; padding: 100px;height: 80vh;background-size: cover;">
		<div class="overlay"></div>
	  <div class="wrapperText">
		<h1>
			<img class="newsimg" src="{{asset('images/imageslogo.png')}}" alt="">
		  <mark>
		  تم عقد اتفاقيه عمل مع شركات محليه
		  </mark>
		</h1>


	  </div>
	</div>
	  <div class="articleText">
		<h4 class="introduction">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptatibus distinctio explicabo cum nostrum quisquam numquam sint alias, optio nam molestiae perferendis atque sed aliquam? Rerum aperiam asperiores minima obcaecati.
        </h4>
		<p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae non atque molestias voluptatem quos! Quas soluta iure in, distinctio adipisci iusto at consequatur ad eaque quod vel asperiores. Quas, consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eaque aspernatur consequuntur eligendi nobis facilis delectus atque, dolorem corporis quidem voluptates unde. Incidunt maiores unde aliquam mollitia aspernatur dolorem omnis!
        </p>

	</div>
  </div>


</section>

{{-- ///////////////////////// --}}

@endsection


