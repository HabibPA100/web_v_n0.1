@extends('frontend.layout.main')
@section('main-container')
<div class="container mt-5">  
    @if(session('success')) 
       <div class="alert alert-success">{{ session('success') }}</div>
    @endif
            {{-- <div class="container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div> --}}
        <div class="container" id="paySelectDiv">
            <div class="row">
                <div class="col-md-6">
                    <div class="card align-items-center">
                        <div class="card-header">
                            <h5> Select Payment Method </h5>
                        </div>
                        <div class="card-body">
                            <!-- bKash Payment Option -->
                            <div class="payment-option" onclick="payWithBkash()">
                                <button class="rounded-pill">
                                    <span>
                                        <img class="d-inline-block float-start my-3" src="{{ asset('frontend/img/paymenticon/bkash.png') }}" alt="bKash Logo" width="30px" height="30px">
                                        <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Bkash</p>
                                    </span>
                                </button>
                            </div>
                            {{-- Hidden div  --}}
                            <div class="my-3 d-none showBkashNumber">
                                 <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
                                 <h4 class="text-center">01875905552</h4>
                            </div>
                            <!-- Nagad Payment Option -->
                            <div class="payment-option" onclick="payWithNagad()">
                                <button class="rounded-pill">
                                    <span>
                                        <img class="rounded-circle d-inline-block float-start my-3" src="{{ asset('frontend/img/paymenticon/nagad.png') }}" alt="Nagad Logo" width="30px" height="30px">
                                        <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Nagad</p>
                                    </span>
                                </button>
                            </div>
                            {{-- Hidden div  nagad--}}
                            <div class="my-3 d-none showNagadNumber">
                                <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
                                <h4 class="text-center">01875905552</h4>
                           </div>
                            <!-- rocket payment Option  -->
                            <div class="payment-option" onclick="payWithRocket()">
                                <button class="rounded-pill">
                                    <span>
                                        <img class="rounded-circle d-inline-block float-start my-3" src="{{ asset('frontend/img/paymenticon/rocket.png') }}" alt="Rocket Logo" width="30px" height="30px">
                                        <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Rocket</p>
                                    </span>
                                </button>
                            </div>
                            {{-- Hidden div rocket --}}
                            <div class="my-3 d-none showRocketNumber">
                                <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
                                <h4 class="text-center">01875905552</h4>
                           </div>
                            <!-- Rocket payment Option  -->
                            <div class="payment-option" onclick="payWithUpay()">
                                <button class="rounded-pill">
                                    <span>
                                        <img class="rounded-circle d-inline-block float-start my-3" src="{{ asset('frontend/img/paymenticon/upay.png') }}" alt="Upay Logo" width="30px" height="30px">
                                        <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Upay</p>
                                    </span>
                                </button>
                            </div>
                            {{-- Hidden div  --}}
                            <div class="my-3 d-none showUpayNumber">
                                <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
                                <h4 class="text-center">01875905552</h4>
                           </div>
                        </div>
                        <div class="card-footer">Manual Payment System</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">    
                        <div class="row">
                           <div class="col">
                               <div class="card p-4">
                                   <h1><p class="text-center">সাধারণ তহবিল</p></h1>
                                   
                               </div>
                                   
                                   <h4 class="mb-3 text-center mt-2">মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা এর ব্যাংক অ্যাকাউন্ট</h4>
                                   
                                   <div class="card mb-3">
                                       <div class="card-body" style="background-color: rgba(0, 142, 72, 0.05);">
                                           <div class="d-flex">
                                               <img alt="Bank Icon 1" src="{{ asset('frontend/img/paymenticon/islamibank.png') }}" class="me-3" style="width: 50px; height: 50px;">
                                               <div class="text-dark">
                                                   <p class="m-0"><strong>অ্যাকাউন্টের নাম:</strong> MADRASHA HEDAYATUL UMMAH DHAKA</p>
                                                   <p class="m-0"><strong>অ্যাকাউন্ট নম্বর:</strong> 4211120203498</p>
                                                   <p class="m-0"><strong>ব্যাংক:</strong> Al-Arafah Islami Bank Ltd</p>
                                                   <p class="m-0"><strong>শাখা:</strong> hajinagor Sub-Br./Konapara, Demra, Dhaka</p>
                                                   <p class="m-0"><strong>রাউটিং নাম্বার:</strong> 015273743</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   
                                   <!-- Donation Amount Selection -->
                                   <div class="mb-4">
                                       <div class="row">
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="100" hidden > 100 ৳
                                               </label>
                                           </div>
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="500" hidden > 500 ৳
                                               </label>
                                           </div>
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="1000" hidden > 1000 ৳
                                               </label>
                                           </div>
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="10000" hidden > 10,000 ৳
                                               </label>
                                           </div>
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="50000" hidden > 50,000 ৳
                                               </label>
                                           </div>
                                           <div class="col-6 col-md-4 mb-2">
                                               <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                   <input type="radio" name="amount" value="0" hidden style="text-decoration: none"> Other
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Custom Amount and Donor Information Form -->
                                   <div class="mb-3">
                                       <div class="card">
                                           <form action="{{ route('donation.store') }}" method="POST">
                                               @csrf
                                               <div class="mb-3">
                                                   <label for="form_amount" class="form-label fs-4">অনুদানের পরিমাণ</label>
                                                   <input type="number" class="form-control" id="form_amount" name="amount" min="10" step="1" value="10" placeholder="10">
                                               </div>
                                               
                                               <div class="mb-3">
                                                <label for="transaction_number" class="form-label fs-5">ট্রানজেকশন নাম্বার</label>
                                                <input type="text" 
                                                       class="form-control @error('transaction_number') is-invalid @enderror" 
                                                       id="transaction_number" 
                                                       name="transaction_number" 
                                                       placeholder="Enter transaction number" 
                                                       pattern="^[A-Za-z0-9]+$" 
                                                       title="Only letters (A-Z, a-z) and numbers (0-9) are allowed" 
                                                       required>
                                                {{-- Error Message Display --}}  
                                                @error('transaction_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                
                                            </div>
                                               
                   <!-- Repeat for other fields as necessary --> 
                                               <div class="mb-3">
                                                   <label for="form_donorName" class="form-label fs-5">নাম</label>
                                                   <input type="text" class="form-control" id="form_donorName" name="donor_name" placeholder="Enter name" 
                                                   minlength="3"
                                                   maxlength="15"
                                                   required>
                                               </div>
                                               <div class="mb-3">
                                                   <label for="form_phoneOrEmail" class="form-label fs-5">মোবাইল / ইমেইল</label>
                                                   <input type="text" class="form-control" id="form_phoneOrEmail" name="donor_contact" 
                                                          placeholder="Enter mobile or email" 
                                                          minlength="10"
                                                          maxlength="30"
                                                          pattern="(^\+?[0-9]{10,15}$|^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$)" 
                                                          title="Format: +1234567890 or example@domain.com" 
                                                          required>
                                                   <p class="text-danger mt-2 px-3 fs-5" id="emailError"></p>
                                               </div>
                                               <button type="submit" class="btn btn-primary float-end">Submit</button>
                                           </form>
                                       </div>
                                   </div>           
                               </div>
                           </div>
                   </div>   
                </div>
            </div>
        </div>
    
        <div class="container align-items-center">
            <div class="card" id="alertMassage" style="font-family: Kalpurush;">
                <div class="card-body">
                    <p class="fs-4 text-primary">
                        আল্লাহ সুবহানাহু ওয়া তা'আলা বলেন, ‘যারা আল্লাহর পথে তাদের সম্পদ ব্যয় করে, তাদের উপমা একটি বীজের মত, যা উৎপন্ন করল সাতটি শীষ, প্রতিটি শীষে রয়েছে একশ’ দানা। আর আল্লাহ যাকে চান তার জন্য বাড়িয়ে দেন। আর আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ’।  <br>
                     (সূরা বাকারা, আয়াত ২৬১)
                    </p>
                    <p class="fs-4 text-primary">
                        আবূ হুরাইরাহ (রাঃ) হতে বর্ণিত। নবী (সাল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম) বলেছেনঃ অর্থাৎ ‘প্রতিদিন সকালে দু’জন ফেরেশতা অবতরণ করেন। তাঁদের একজন বলেন, হে আল্লাহ! দাতাকে তার দানের উত্তম প্রতিদান দিন আর অপরজন বলেন, হে আল্লাহ! কৃপণকে ধ্বংস করে দিন। <br> (সহীহ্ বুখারী, হাদিস নং ১৪৪২)
                    </p>
                </div>
            </div>
        </div>

    {{-- <section id="advirtise">
        <div class="container align-items-center">
            <div class="card" id="alertMassage" style="font-family: Kalpurush;">
                <div class="card-body">
                    <p class="fs-4 text-primary">
                        আল্লাহ সুবহানাহু ওয়া তা'আলা বলেন, ‘যারা আল্লাহর পথে তাদের সম্পদ ব্যয় করে, তাদের উপমা একটি বীজের মত, যা উৎপন্ন করল সাতটি শীষ, প্রতিটি শীষে রয়েছে একশ’ দানা। আর আল্লাহ যাকে চান তার জন্য বাড়িয়ে দেন। আর আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ’।  <br>
                     (সূরা বাকারা, আয়াত ২৬১)
                    </p>
                    <p class="fs-4 text-primary">
                        আবূ হুরাইরাহ (রাঃ) হতে বর্ণিত। নবী (সাল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম) বলেছেনঃ অর্থাৎ ‘প্রতিদিন সকালে দু’জন ফেরেশতা অবতরণ করেন। তাঁদের একজন বলেন, হে আল্লাহ! দাতাকে তার দানের উত্তম প্রতিদান দিন আর অপরজন বলেন, হে আল্লাহ! কৃপণকে ধ্বংস করে দিন। <br> (সহীহ্ বুখারী, হাদিস নং ১৪৪২)
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
</div>

@endsection






       