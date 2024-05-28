<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">{{__('words.doctors')}}</p>
            <h1>{{__('words.doctorsTitle')}}</h1>
        </div>
        <div class="row g-4">
            @foreach($doctors as $doctor)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{\Voyager::image($doctor->image)}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>{{$doctor['name_'.app()->getLocale()]}}</h5>
                            <p class="text-primary">{{$doctor->job['title_'.app()->getLocale()]}}</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->
