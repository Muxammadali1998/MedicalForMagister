<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded-pill py-1 px-4">Qbul</p>
                <h1 class="mb-4">Bizning shifokorga tashrif buyurish uchun vaqt yozing</h1>
                <p class="mb-4">Jadvaldan o'z malumotlaringizni kiritin va ozingizga kerakli yonalishni tanlang . Keyingi royhatdan Shifokor va qabul uchun qulay vaqni kiriting.</p>
                <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Hoziroq qongiroq qling</p>
                        <h5 class="mb-0">+123456789</h5>
                    </div>
                </div>
                <div class="bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Email orqali murojat</p>
                        <h5 class="mb-0">info@example.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                    <form action="{{route('patient')}}" method="POST">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Ism" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Familya" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder=" Elektron pochta" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Telefon raqami" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Bo'limni tanlang</option>
                                    <option value="1">Otorinolaringologiya</option>
                                    <option value="2">Neyrosonografiya</option>
                                    <option value="3">Nefrologiya</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected> Doctorni Tanlan</option>
                                    <option value="1">Usmonov Rustam Alisherovich</option>
                                    <option value="2">Masalieva Dilfuza Ismataliyevna</option>
                                    <option value="3">Kim Dmitriy Olegovich</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text"
                                           class="form-control border-0 datetimepicker-input"
                                           placeholder="Kunni Tanlang" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text"
                                           class="form-control border-0 datetimepicker-input"
                                           placeholder="Vaqni tanlang" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" placeholder="Xabar qoldirish"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Ma'lumotni saqlash</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

