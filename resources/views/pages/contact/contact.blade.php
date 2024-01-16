@extends('layout')

@section('content')
    <!-------Contact Start------->
    <section class="contact" style="  padding-top: 90px;" data-scroll-index='6'>
        <div class="container">

            <div class="heading text-center mb-5 ">
                <h1>تواصل معنا</h1>
                <span></span>
            </div>
            @foreach ($data as $datacontact)
                <p>
                    {{-- للاستفسار عن خدماتنا يمكنكم التواصل معنا عن طريق المعلومات الموضحة أدناه او تعبئه البيانات وسنقوم بالرد عليكم في أقرب وقت ممكن --}}
                    {{ $datacontact->title_desc }}
                </p>
                <div class="section-content2">
                    <div class="contactrow">

                        <div class="contact-info white">
                            <div class="contact-item media">
                                <div class="media-body">
                                    <p class="text-uppercase"><i
                                            class="fa fa-map-marker-alt media-left media-right-margin"></i>العنوان</p>
                                    <p class="text-uppercase">
                                        {{ $datacontact->company_title }}
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item media">
                                <div class="media-body">
                                    <p class="text-uppercase"><i
                                            class="fa fa-mobile media-left media-right-margin"></i>الرقم</p>
                                    <p class="text-uppercase"><a class="text-white" href="tel:+9677777777777">
                                            {{ $datacontact->company_num }}
                                        </a> </p>
                                </div>
                            </div>
                            <div class="contact-item media">
                                <div class="media-body">
                                    <p class="text-uppercase"><i class="fa fa-envelope media-left media-right-margin">
                                        </i>الايميل</p>
                                    <p class="text-uppercase"><a class="text-white" href="taggroup@gmail.com">
                                            {{ $datacontact->company_email }}
                                        </a> </p>
                                </div>
                            </div>
                            <div class="contact-item media">
                                {{-- <div class="media-body">
                                    <p class="text-uppercase"><i class="fa fa-clock media-left media-right-margin"></i>ساعات العمل </p>
                                    <p class="text-uppercase">24 ساعه</p>
                                    </div> --}}
                            </div>
                        </div>
            @endforeach

            <form id="contact_form" action="{{ route('contact_info.store')  }} " method="POST">
                @csrf

                <div class="row">
                    <div class="col">
                        <input type="text" id="your_name" class="form-input w-100" name="name"
                            placeholder="الاسم الكامل" required>
                    </div>
                    <div class="col">
                        <input type="email" id="email" class="form-input w-100" name="email" placeholder="الايميل"
                            required>

                    </div>
                    <input type="text" id="number" class="form-input w-100" name="number" placeholder="الرقم"
                        required>
                </div>

                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit" name="button">Send</button>
            </form>

        </div>
        </div>
        </div>

    </section>

    <!-------Contact End------->
@endsection
