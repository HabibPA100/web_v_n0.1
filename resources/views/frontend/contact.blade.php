@extends('frontend.layout.main')
@section('main-container')


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"> যোগাযোগ</h6>
                <h1 class="mb-5">যেকোনো প্রশ্নের জন্য যোগাযোগ করুন</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">অফিস</h5>
                            <a href="https://maps.app.goo.gl/kMmSwmMSpi2GZvCM7" target='_blank'>
                               <p class="mb-0"> ডেমরা স্টাফ কোয়ার্টার ব্রিজ সংলগ্ন, হাজীনগর, সারুলিয়া, ডেমরা, ঢাকা-১৩৬১</p>
                             </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <a href="tel:+8801875-905552">
                                <h5 class="text-dark">মোবাইল </h5>
                                <p class="mb-0">+8801875-905552</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                           <a href="mailto:mhud1361bd@gmail.com">
                            <h5 class="text-dark">Email</h5>
                            <p class="mb-0">mhud1361bd@gmail.com</p>
                          </a>
                        </div>
                    </div>
                </div>
{{-- Full map start here --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!4v1728813316799!6m8!1m7!1sZzdKUguod9SsffrzuGFW4A!2m2!1d23.71895991397722!2d90.48959277048492!3f167.12160788330698!4f6.3975819572093116!5f0.7820865974627469"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0" alt='Google Map is here'></iframe>
                </div>
{{-- Full map end here --}}
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

    