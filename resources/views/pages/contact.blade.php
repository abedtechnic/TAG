@extends('layout')

@section('content')

<!-------Contact Start------->
<section class="contact section-padding" style="  padding-top: 90px;" data-scroll-index='6'>
    <div class="container">
       
            <div class="heading text-center mb-5 ">
                <h1>تواصل معنا</h1>
                <span ></span>
            </div>  
                <p>للاستفسار عن خدماتنا يمكنكم التواصل معنا عن طريق المعلومات الموضحة أدناه او تعبئه البيانات وسنقوم بالرد عليكم في أقرب وقت ممكن</p>
                <div class="section-content2">
                    <div class="contactrow">
                        
                            <div class="contact-info white">
                              <div class="contact-item media"> 
                                <div class="media-body">
                                  <p class="text-uppercase"><i class="fa fa-map-marker-alt media-left media-right-margin"></i>العنوان</p>
                                  <p class="text-uppercase">صنعاء الستين جوار شركه مرسيدس</p>
                                </div>
                              </div>
                              <div class="contact-item media"> 
                                <div class="media-body">
                                  <p class="text-uppercase"><i class="fa fa-mobile media-left media-right-margin"></i>الرقم</p>
                                  <p class="text-uppercase"><a class="text-white" href="tel:+9677777777777">777777777</a> </p>
                                </div>
                              </div>
                              <div class="contact-item media"> 
                                <div class="media-body">
                                  <p class="text-uppercase"><i class="fa fa-envelope media-left media-right-margin"></i>الايميل</p>
                                  <p class="text-uppercase"><a class="text-white" href="taggroup@gmail.com">now@gmail.com</a> </p>
                                </div>
                              </div>
                              <div class="contact-item media"> 
                                    {{-- <div class="media-body">
                                    <p class="text-uppercase"><i class="fa fa-clock media-left media-right-margin"></i>ساعات العمل </p>
                                    <p class="text-uppercase">24 ساعه</p>
                                    </div> --}}
                              </div>
                            </div>
                          
                         
                            <form id="contact_form" action="">
                              <div class="row">
                                <div class="col">
                                  <input type="text" id="your_name" class="form-input w-100" name="full-name" placeholder="الاسم الكامل" required>
                                </div>
                                <div class="col">
                                  <input type="email" id="email" class="form-input w-100" name="email" placeholder="الايميل" required>
                                 
                                </div>
                                <input type="text" id="number" class="form-input w-100" name="number" placeholder="الرقم" required>
                              </div>
                            
                              <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                              <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
                            </form>
                         
                    </div>
                </div>
            </div>
    
</section>

  
  <!-------Contact End-------> 





@endsection