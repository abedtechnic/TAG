@extends('layout')

@section('content')
     <!-- Start Info-One -->
     <section class="info-one">
        @foreach($proByCate as $showpro)

        <div class="row">
            <div class="info-content">
                <div class="heading">
                    <h2>
                        {{ $showpro->product_name }}
                    </h2>
                    <p>
                        {{ $showpro->product_description }}
                        </p>
                </div>


            </div>

            <img src="{{asset('images/products/' . $showpro->image )}}" alt="pic1" loading="lazy">


        </div>
        @endforeach
    </section>
    <!-- End info -->

              {{-- @endforeach --}}
            <!-- End info -->
    </section>

    <p id="purchase">
         لنساعدك في تحقيق هدفك<a href="{{ route('contact.index') }}"> تواصل معنا </a>
    </p>
    <hr>
    </div>


@endsection
