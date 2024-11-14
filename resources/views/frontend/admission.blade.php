@extends('frontend.layout.main')
@section('main-container')

{{-- Success Massage is here  --}}
<div class="container">
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <a href="{{ route('admission.fee') }}" class="btn btn-primary float-end">Pay now</a>
    </div>
  @endif
            {{-- @session('success')
                  <div class="alert alert-success">
                      {{ session('success') }}
                      
                  </div>
                  @endsession --}}
</div>
<!-- Header is started here  -->
<section id="headerSection">
  <div class="container-fluid text-center headingDiv">
    <div class="container-fluid">
      <p class="p-3 fs-1 text-center" style="font-family: 'KFGQPC Uthmanic Script HAFS Regular', sans-serif;">المدرسة هداية الأمة دكا بنغلاديش</p>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          <!-- First Card (Bangla content) -->
          <div class="col-md-4  d-none d-md-block">
            <div class="card border-0 headingDiv">
              <div class="card-body banglaFont linearCard">
                <h4 class="text-center text-dark">Madrasa Hedayatul Ummah Dhaka</h4>
                <h5 class="card-title text-center">Hajinagar, Sarulia, Demra, Dhaka-1361</h5>
                <h6 class="text-center">
                  <div class="d-flex justify-content-center mb-2">
                    <a href="{{ url('https://wa.me/01921179455') }}">
                      <img src="{{ asset('frontend/img/whatsapp.png') }}" alt="WhatsApp" class="rounded-circle" style="width: 30px; height: 30px;">
                    </a>
                    <a href="{{ url('https://imo.im/01921179455') }}" class="ms-2">
                      <img src="{{ asset('frontend/img/imo.png') }}" alt="Imo" class="rounded-circle" style="width: 25px; height: 25px;">
                    </a>
                  </div>
                  Phone: 01921-179455,<br> <i class="fa-solid fa-phone"></i> 0187590-5552
                </h6>                
              </div>
            </div>
          </div>
          <!-- Centered Image -->
          <div class="col-md-2 d-flex justify-content-center align-items-center">
            <img src="{{ url('frontend/img/madrasah.png') }}" class="rounded-circle" alt="Madrasah Image" style="width: 150px; height: 150px;">
          </div>
          <!-- Second Card (English content) -->
          <div class="col-md-4 text-light">
            <div class="card border-0 headingDiv">
              <div class="card-body banglaFont text-center linearCard">
                <h2 class=" text-center text-dark">মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা</h2>
                <h5 class="card-title text-center">হাজীনগর, সারুলিয়া, ডেমরা, ঢাকা-১৩৬১</h5>
                <h6 class="text-center">
                  <div class="d-flex justify-content-center mb-2">
                    <a href="{{ url('https://wa.me/01921179455') }}">
                      <img src="{{ asset('frontend/img/whatsapp.png') }}" alt="WhatsApp" class="rounded-circle" style="width: 30px; height: 30px;">
                    </a>
                    <a href="{{ url('https://imo.im/01921179455') }}" class="ms-2">
                      <img src="{{ asset('frontend/img/imo.png') }}" alt="Imo" class="rounded-circle" style="width: 25px; height: 25px;">
                    </a>
                  </div>
                  মোবাইল: 01921-179455,<br> <i class="fa-solid fa-phone"></i> 0187590-5552
                </h6>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="w-100" style="height: 5px; background-color: #030303; border-radius: 4px; border: none;">
</section>
<!-- Header has been ended  -->
<!-- Card is started here  -->
<section class="sectionN02">
    <div class="container mt-3">
       <div class="card text-dark formBgColor">
        <div class="card-body">
          <p>
            বরাবর <br>পরিচালক <br> মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা <br> <strong>বিষয় : ভর্তির আবেদন প্রসঙ্গে</strong> <br> জনাব,<br> বিনীত নিবেদন এই যে আমি অত্র মাদ্‌রাসার বর্তমান ও ভবিষ্যতের সকল নিয়ম-কানুন মেনে চলার অঙ্গীকার করে ভর্তি হওয়ার আবেদন করছি। সে মতে আমি আমার জীবন বৃত্তান্ত নিম্নে পেশ করলাম।
          </p>
          <div class="container">
            <form action="{{ route('admission.store') }}" method="POST" >
              @csrf
              <label for="studentName" class="float-start">নাম</label>
              <input 
                    type="text" 
                    id="studentName"
                    name="studentName" 
                    value="{{ old('studentName') }}"
                    placeholder="মুহাঃ আবুল কাশেম/ ফাতেম আক্তার" 
                    required 
                    minlength="5" 
                    maxlength="30" 
                    pattern="[\u0980-\u09FFa-zA-Z\s]+" 
                    title="অনুগ্রহ করে একটি সঠিক নাম লিখুন ৫ থেকে ৩০ সংখ্যা এর মধ্যে।" 
                    autocomplete="name"
                />


                @error('studentName') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="studentDoB" class="float-start">জন্ম তারিখ</label>
              <input type="date" 
                    id="studentDoB"
                    name="studentDoB" 
                    value="{{ old('studentDoB') }}"
                    required 
                    max="" />
              @error('studentDoB') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="birthCertificate">ছাত্র/ছাত্রীর জন্ম নিবন্ধন সনদ নাম্বার</label>
              <input type="text" 
                     id="birthCertificate"
                     class="form-control" 
                     name="birthCertificate"
                     value="{{ old('birthCertificate') }}"
                     minlength="17"
                     maxlength="17"
                     pattern="^[0-9\s]{17,17}$" 
                     placeholder="200214254612355"
                     title="অনুগ্রহ করে 17 সংখ্যার কোডগুলি লিখুন " 
                     required 
                     autocomplete="off"/>
              @error('birthCertificate') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="father" class="float-start">পিতা</label>
              <input type="text" 
                   id="father"
                   name="father" 
                   placeholder="আবুল বাশার" 
                   minlength="5" 
                   maxlength="30" 
                   value="{{ old('father') }}"
                   pattern="[\u0980-\u09FFa-zA-Z\s]+"
                   title="অনুগ্রহ করে একটি সঠিক নাম লিখুন ৫ থেকে ৩০ সংখ্যা এর মধ্যে।" 
                   required 
                   autocomplete="name"/>
              @error('father') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="fNidNumber">পিতার NID কার্ডের নাম্বার</label>
              <input 
                      type="text" 
                      id="fNidNumber"
                      name="fNidNumber" 
                      value="{{ old('fNidNumber') }}" 
                      placeholder="1234567890123" 
                      minlength="10" 
                      maxlength="17" 
                      title="অনুগ্রহ করে 17 সংখ্যার কোডগুলি লিখুন "
                      required 
                      pattern="[0-9]{10,17}"
                      autocomplete="off"/>
                      @error('fNidNumber') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="fatherDoB">পিতার জন্ম তারিখ</label>
              <input type="date" 
                      id="fatherDoB"
                      class="form-control" 
                      name="fatherDoB"
                      value="{{ old('fatherDoB') }}"
                      required 
                      max="" />
              @error('fatherDoB') <span class="text-danger">{{ $message }}</span> @enderror <br>    
              <label for="fatherOccupation" class="float-start">পিতা’র পেশা</label>
              <input type="text" 
                      id="fatherOccupation"
                      name="fatherOccupation" 
                      value="{{ old('fatherOccupation') }}"
                      placeholder="চাকুরি/ব্যবসা/ড্রাইভার/শিক্ষক" 
                      minlength="4" 
                      maxlength="15" 
                      pattern="[\u0980-\u09FFa-zA-Z\s]+"
                      title="অনুগ্রহ করে ৪ থেকে ১৫ সংখ্যার মধ্যে পেশা লিখুন "
                      required />
              @error('fatherOccupation') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="mother" class="float-start">মাতা</label>
              <input type="text" 
                      id="mother"
                      name="mother" 
                      value="{{ old('mother') }}"
                      placeholder="আমেনা বেগম" 
                      minlength="5"
                      maxlength="30"
                      pattern="[\u0980-\u09FFa-zA-Z\s]+"
                      title="অনুগ্রহ করে একটি সঠিক নাম লিখুন ৫ থেকে ৩০ সংখ্যা এর মধ্যে।" 
                      required 
                      autocomplete="name"/>
              @error('mother') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="mNidNumber">মাতার NID কার্ডের নাম্বার</label>
                <input 
                    type="text" 
                    id="mNidNumber"
                    name="mNidNumber" 
                    value="{{ old('mNidNumber') }}" 
                    placeholder="1234567890123" 
                    minlength="10" 
                    maxlength="17" 
                    title="অনুগ্রহ করে 10 বা 17 সংখ্যার কোডগুলি লিখুন "
                    required 
                    pattern="[0-9]{10,17}"
                    autocomplete="off"/>
                    @error('mNidNumber') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="motherDoB">মাতার জন্ম তারিখ</label>
              <input type="date" 
                      id="motherDoB"
                      class="form-control" 
                      name="motherDoB"
                      value="{{ old('motherDoB') }}" 
                      required 
                      max="" />
              @error('motherDoB') <span class="text-danger">{{ $message }}</span> @enderror <br>
              <label for="motherOccupation" class="float-start">মাতা’র পেশা</label>
              <input type="text" 
                      id="motherOccupation"
                      name="motherOccupation" 
                      value="{{ old('motherOccupation') }}"
                      placeholder="গৃহিণী/চাকুরি/ডাক্তার" 
                      minlength="4" 
                      maxlength="15" 
                      pattern="[\u0980-\u09FFa-zA-Z\s]+"
                      title="অনুগ্রহ করে ৪ থেকে ১৫ সংখ্যার মধ্যে পেশা লিখুন "
                      required 
                      />
              @error('motherOccupation') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="nationality" class="float-start">জাতীয়তা</label>
              <input type="text" 
                        id="nationality"
                        name="nationality" 
                        value="বাংলাদেশী" 
                        required />

          
              <label for="phone" class="float-start">মোবাইল</label>
              <input 
                    type="tel" 
                    id="phone"
                    name="phone"
                    maxlength="14"
                    autocomplete="tel"
                    value="{{ old('phone') }}" 
                    pattern="^[0-9\-\+\s]{11,14}$" 
                    placeholder="01921179---" 
                    title="অনুগ্রহ করে একটি সঠিক নাম্বার লিখুন ১১ থেকে ১৫ এর মধ্যে"
                    required 
                />
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="permanentAddress" class="float-start">স্থায়ী ঠিকানা</label>
              <textarea class="textarea w-100" 
                        id="permanentAddress"
                        name="permanentAddress"
                        placeholder="গ্রামঃ- হাজীনগর, পোষ্টঃ- সারুলিয়া, থানাঃ- ডেমরা, জেলাঃ- নারায়নগঞ্জ" 
                        minlength="15" 
                        maxlength="255"
                        pattern="[\u0980-\u09FFa-zA-Z0-9\s,.-]+" 
                        title="অনুগ্রহ করে একটি সঠিক ঠিকানা লিখুন ১৫ থেকে ২৫৫ সংখ্যার মধ্যে"
                        required 
                        autocomplete="address-line1">{{ old('permanentAddress') }}</textarea>
                @error('permanentAddress') <span class="text-danger">{{ $message }}</span> @enderror <br>

          
              <label for="currentAddress" class="float-start">বর্তমান ঠিকানা</label>
              <textarea class="textarea w-100" 
                          id="currentAddress"
                          name="currentAddress" 
                          placeholder="যদি বর্তমান এবং স্থায়ী ঠিকানা এক হয় তবে শুধু (ঐ) লিখুন"  
                          maxlength="255"
                          pattern="[\u0980-\u09FFa-zA-Z0-9\s,.-]+" 
                          title="অনুগ্রহ করে একটি সঠিক ঠিকানা লিখুন ১৫ থেকে ২৫৫ সংখ্যার মধ্যে"
                          required
                          autocomplete="address-line1">{{ old('currentAddress') }}</textarea>
                @error('currentAddress') <span class="text-danger">{{ $message }}</span> @enderror <br>

          
              <label class="float-start">যে বিভাগে/শ্রেণীতে পড়তে ইচ্ছুক</label><br>
                <div class="form-check">
                    <label class="text-danger fs-5 text-white">নুরানী বিভাগ</label><br>
                    <input class="form-check-input" type="radio" name="class_name" value="প্লে জামাত" required />
                    <label class="form-check-label text-decoration-none text-left">প্লে জামাত</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="class_name" value="নার্সারি জামাত" required />
                    <label class="form-check-label text-decoration-none">নার্সারি জামাত</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="class_name" value="প্রথম জামাত" required />
                  <label class="form-check-label text-decoration-none">প্রথম জামাত</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="class_name" value="দ্বিতীয় জামাত" required/>
                  <label class="form-check-label text-decoration-none"> দ্বিতীয় জামাত</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="class_name" value="তৃতীয় জামাত" required/>
                  <label class="form-check-label text-decoration-none"> তৃতীয় জামাত</label>
                </div>
                <div class="form-check">
                  <label class="text-danger fs-5 text-white">হিফয বিভাগ</label> <br>
                  <input class="form-check-input" type="radio" name="class_name" value="নাজেরা বিভাগ" required/>
                  <label class="form-check-label text-decoration-none">নাজেরা বিভাগ</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="class_name" value="হিফয বিভাগ" required/>
                  <label class="form-check-label text-decoration-none"> হিফয বিভাগ</label>
                </div>
          
              <label for="referName" class="float-start">স্থানীয় অভিভাবকের নাম</label>
              <input type="text" 
                      id="referName"
                      name="referName" 
                      placeholder="আবু আব্দুল্লাহ আল মানুন" 
                      value="{{ old('referName') }}"
                      minlength="5"
                      maxlength="30"
                      pattern="[\u0980-\u09FFa-zA-Z\s]+"
                      title="অনুগ্রহ করে একটি সঠিক নাম লিখুন ৫ থেকে ৩০ সংখ্যা এর মধ্যে।" 
                      />
              @error('referName') <span class="text-danger">{{ $message }}</span> @enderror <br>
          
              <label for="connectionWithRefer" class="float-start">সম্পর্ক</label>
              <input type="text" 
                      id="connectionWithRefer"
                      name="connectionWithRefer"
                      value="{{ old('connectionWithRefer') }}" 
                      pattern="[\u0980-\u09FFa-zA-Z\s]+"
                      placeholder="বাবা/ভাই/মা/বোন/নানা/কাকা"
                      />
              @error('connectionWithRefer') <span class="text-danger">{{ $message }}</span> @enderror <br>
              <label for="referAddress" class="float-start">স্থানীয় অভিভাবকের ঠিকানা</label>
              <textarea class="textarea w-100" 
                          id="referAddress"
                          name="referAddress"
                          placeholder="হাজীবাড়ি, সারুলিয়া, ডেমরা ঢাকা-১৩৬১" 
                          minlength="15" 
                          maxlength="255" 
                          pattern="[\u0980-\u09FFa-zA-Z0-9\s,.-]+" 
                          title="অনুগ্রহ করে একটি সঠিক ঠিকানা লিখুন ১৫ থেকে ২৫৫ সংখ্যার মধ্যে"
                          autocomplete="address-line1">{{ old('referAddress') }}</textarea>
            @error('referAddress') <span class="text-danger">{{ $message }}</span> @enderror <br>

              <button type="submit" class="btn btn-primary float-end my-3">Submit</button>
          </form>
          </div>
        </div>
       </div>
    </div>
</section>
<!-- Card is end here  -->
<section>
          @session('error')
          <div class="alert alert-success">
              {{ session('error') }}
          </div>
          @endsession
<div class="container">
<div class="card mt-3">
  <div class="card-head my-3">
    <div class=" position-absolute top-0 start-50 translate-middle-x border border-success p-2 m-2
     rounded-circle">
      <h5 class="text-center">অঙ্গীকার নামা</h5>
    </div>
  </div>
  <div class="card-body my-3">
    <p>
      দ্বীনী ইলম হাসিল করে আল্লাহ রাব্বুল আলামীনের একজন নেককার বান্দা ও দ্বীনের খাদেম হওয়ার ইচ্ছায় মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা এর একজন নিয়মিত ছাত্র হওয়ার আশায় আমি ওয়াদা করছি যে, <br>
      ১. জীবনের সকল ক্ষেত্রে শরীয়তের হুকুম আহকাম পুরোপুরি মেনে চলব। <br> 
      ২. সুন্নতে নববীর অনুসরণ এর সাথে সাথে পরিষ্কার পরিচ্ছন্নতার প্রতি সদা সচেতন থাকব। <br>
      ৩.পাঁচ ওয়াক্ত নামাজ জামাতে ও তাকবীরে উলার সাথে আদায় করার জন্য সদা সচেষ্ট থাকবো এবং প্রতিদিন নিয়মিত তাহাজ্জুদ ইশরাক ও আওয়াবীনের নামাজ পড়ব।  <br> ৪. মাদ্‌রাসার শিক্ষকদের প্রতি পূর্ণ আদব ও সম্মান প্রদর্শন করে চলাফেরা করব।  <br>
      ৫.ছাত্র ভাইদের সাথে ভদ্রভাবে চলাফেরা করব কারো সাথে কখনো কোন প্রকার ঝগড়া বিবাদ করব না। <br> 
      ৬. ছুটির পর মাদ্‌রাসা খোলার নির্ধারিত তারিখে অবশ্যই উপস্থিত থাকব। <br> ৭.কোরআন শরীফ, গিলাফ, রেহাল, মাদ্‌রাসার সকল আসবাবপত্র বিশেষ যত্ন সহকারে রাখবো অত্যন্ত আদবের সাথে ব্যবহার করব এবং মনোযোগ সহকারে লেখাপড়া করব। <br>
      ৮.সর্বদা মাদ্‌রাসার নিয়ম-কানুন ও সময়ানুবর্তিতার প্রতি শ্রদ্ধাশীল থাকব। <br>
      ৯. কোনরুপ সংগঠন ও ফিতনা ফাসাদ হতে নিজেকে সম্পূর্ণ বিরত রাখব, এবং কর্তৃপক্ষের অনুমতি ছাড়া অন্য কোন কাজে জড়িত থাকবো না। <br> ১০.কর্তৃপক্ষের অনুমতি ব্যতীত মাদ্‌রাসার বাহিরে যাব না। 
    </p>
  </div>
 </div>
 <div class="card mt-3 formBgColor">
  <div class="card-header my-3">
    <p class="text-center fs-4 text-dark">অভিভাবকের জ্ঞাতব্য</p>
  </div>
  <div class="card-body paddingTop">
    <p class="text-dark">
     ১. অভিভাবককে প্রতি মাসে কমপক্ষে একবার পরিচালকের সাথে যোগাযোগ রক্ষা করা একান্ত জরুরী। <br>২. ছাত্রের ছুটি কিংবা ছাত্রকে নেওয়ার জন্য পরিচিত অভিভাবক ব্যতীত অন্য কেহ আসলে ছাত্রের অভিভাবক কর্তৃক স্বাক্ষরিত সন্তোষজনক প্রমাণপত্র না পেলে তা গ্রহণ করা হবে না। <br>  ৩. মাদ্‌রাসা কর্তৃপক্ষের অনুমোদিত সকল প্রকার বিধি-বিধান সর্বাবস্থায় মেনে চলব। <br> ৪. সংশ্লিষ্ট ছাত্র কোন অবস্থাতেই যেন কর্তৃপক্ষের বিনা অনুমতিতে অনুপস্থিত না থাকে সেদিকে সতর্ক দৃষ্টি রাখব। <br> ৫. প্রতি ইংরেজি চলতি মাসের ৫ তারিখের মধ্যে খোরাকি ও বেতনের টাকা পরিশোধ করব অন্যথায় সংশ্লিষ্ট ছাত্রের প্রাতিষ্ঠানিক সুবিধা স্থগিত হলে এর জন্য সংশ্লিষ্ট অভিভাবকই দায়ী হবেন। <br>
      ৬. যদি কোন ছাত্র ভাংতি মাসে চলে যায় তাহলে বেতনের পূর্ণ টাকা এবং যতদিন খানা খাবে ততদিনের টাকা পরিশোধ করব। এতে সংশ্লিষ্ট অভিভাবকের কোনরূপ আপত্তি থাকবে না। <br> ৭. কোন রূপ বাহানা দেখাইয়া মাদ্‌রাসার বেতনের টাকা না দিলে, জবাব দিতে হবে পরকালে। <br> 
      ৮. কেহ যদি মাদ্‌রাসার নির্ধারিত বেতন থেকে কম সাব্যস্ত হয় তাহলে বন্ধ- ছুটি কাটা, অনুপস্থিত থাকলে তার জন্য কম দেওয়ার সুযোগ নেই। কোন আপত্তি ও চলবেনা। <br>
    </p>
    <div class="card-footer bg-dark">
        <p class="text-white fs-4">বিশেষ দ্রষ্টব্য:- সাক্ষাতের সময় সকাল ৭টা হতে ৮টা পর্যন্ত এবং বিকেলে আসরের পর হতে মাগরিব পর্যন্ত। </p>
    </div>
  </div>
 </div>
</div>
</section>
@endsection