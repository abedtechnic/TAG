@extends('layout')

@section('content')
    <section class="products">

        <div class="heading text-center mb-5" style="padding-bottom: 30px">
            <h1>المنتجات </h1>
            <span></span>
            @foreach ( $showDataProduct as $showpro )
             <div class="detail">

                <div class="box">
                    <div class="inbox">
                        <i class="fa-solid fa-city"></i>
                        <h3>{{ $showpro->maintitle }}</h3>
                    </div>

                    <p>
                        {{ $showpro->secondarytitle  }}
                    </p>
                </div>
                {{-- <div class="box">
                    <div class="inbox">
                        <i class="fa-solid fa-truck-front"></i>
                        <h3>المنتجات التجاريه</h3>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
                        provident beatae accusamus, quaerat impedit eveniet nihil non obcaecati maiores magni
                        suscipit, enim, at nostrum? Dolor ipsam non soluta nihil rem..

                    </p>
                </div> --}}




            </div>
            {{-- <hr> --}}

            <div class="heading text-center mb-5" style="padding-bottom: 30px">
                <h1> {{$showpro->descriptiontitle}}</h1>
                <span></span>

            </div>

            <!-- Start Info-One -->



            {{-- @foreach ( $showAllbrand as $show ) --}}
                {{-- <div class="info-one" id="explain">
                    <div class="row">
                        <div class="info-content">
                            <div class="heading">
                                <h2>
                                {{ $showpro->productname }}

                                </h2>
                                <p style="text-align: right">
                                    {{ $showpro->productdescription }}

                                </p>
                            </div>

                            <img src="{{asset('images/products/' . $showpro->image)}}" alt="" loading="lazy">
                        </div>
                    </div>
                </div> --}}

                 <!-- Start Info-One -->
    <div class="info-one" id="explain">
        <div class="row">
            <div class="info-content">
                <div class="heading">
                    <h2>
                        {{ $showpro->productname }}

                        </h2>
                        <p style="text-align: right">
                            {{ $showpro->productdescription }}

                        </p>
                </div>
            </div>

        </div>
    </div>
    <!-- End info -->

              {{-- @endforeach --}}
            <!-- End info -->
            @endforeach
    </section>

    <p id="purchase">
        لنساعدك في تحقيق هدفك<a href="{{ route('contact.index') }}">تواصل معنا </a>
    </p>
    <hr>
    </div>


@endsection
