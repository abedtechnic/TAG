@extends('layout')

@section('content')
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
  </div>
</section>

@endsection
