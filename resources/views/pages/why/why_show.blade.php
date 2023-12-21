@extends('layout')

@section('content')
<section class="why_page">
    <div class="container">
<div class="heading text-center mb-5">
    <h1>لماذا نحن</h1>
    <span></span>
</div>
<div class="why_info">
    <ul>

        @foreach ($showDataWhy as $show)
        <li> <i class="fa fa-check"></i>{{ $show->title}}</li>

        <p>{{ $show->description }}</p>
        <hr>
        @endforeach


    </ul>
</div>


</div>
</section>

@endsection
