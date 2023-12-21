@extends('layout')

@section('content')
    <section class="products">
        {{-- <div class="heading text-center mb-5" style="padding-bottom: 30px">
            <h1>المنتجات </h1>
            <span></span>

            {{-- <div class="detail">

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




            </div> --}}
            {{-- <hr>

            <div class="heading text-center mb-5" style="padding-bottom: 30px">
                <h1>المنتجات التجاريه</h1>
                <span></span>

            </div>  --}}

            <!-- Start Info-One -->




            @foreach ( $showAllbrand as $show )
                <div class="info-one" id="explain">
                    <div class="row">
                        <div class="info-content">
                            <div class="heading">
                                <h2>{{ $show->title }}</h2>
                                <p style="text-align: right">
                                    {{ $show->description }}
                                </p>
                            </div>
                            {{-- <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}" loading="lazy"> --}}
                        </div>
                    </div>
                </div>

              @endforeach
            <!-- End info -->
    </section>

    {{-- <p id="purchase">
        لنساعدك في تحقيق هدفك<a href="{{ route('contact') }}">تواصل معنا </a>
    </p>
    <hr>
    </div> --}}
@endsection
