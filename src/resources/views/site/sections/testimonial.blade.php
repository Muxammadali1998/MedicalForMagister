<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">{{__('words.fordoctors')}}</p>
            <h1>{{__('words.subTitle')}}</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($doctors as $doctor)
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{\Voyager::image($doctor->image)}}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>{{$doctor['body_'.app()->getLocale()]}}</p>
                        <h5 class="mb-1">{{$doctor['name_'.app()->getLocale()]}}</h5>
                        <span class="fst-italic">{{$doctor->job['title_'.app()->getLocale()]}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
