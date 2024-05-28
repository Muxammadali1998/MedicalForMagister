<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Xizmatlar</p>
            <h1>{{__('words.servicesTitle')}}</h1>
        </div>
        <div class="row g-4">
            @foreach($jobs as $job)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">{{$job['title_'.app()->getLocale()]}}</h4>
                        <p class="mb-4">{{$job['body_'.app()->getLocale()]}}</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>{{__('words.more')}}</a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
<!-- Service End -->
