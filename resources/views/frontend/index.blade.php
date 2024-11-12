
@extends('frontend.layout.main')
@section('main-container')
@if (Route::has('login'))
<nav class="navbar navbar-light d-none">
    @auth
        <a
            href="{{ url('/dashboard') }}"
           class="btn btn-outline-danger">
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="btn btn-outline-primary">
            Log in
        </a>
        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="btn btn-outline-info">
                Register
            </a>
        @endif
    @endauth
</nav>
@endif
{{-- welcome massage to visiter  --}}
<div class="container my-2" id="welcome">
    <div class="card p-3 welcome welcomeAnimation">
        <h3 class="text-center text-success">আপনার উপর দয়াময়ের শান্তি বর্ষিত হোক</h3> 
        <h2 class="text-center text-danger ">আমাদের ওয়েবসাইটে আপনাকে স্বাগতম</h2>
    </div>
</div>
{{-- section about admission information start here --}}
<section id="admissionInfo">
    <div class="container">
        <div class="row">
            <div class="col">
              <div class="card shadow-lg p-3 mb-5 bg-success banglaFont" style="border-radius: 10px;">
                <div class="card-header text-center bg-info text-light fs-5 admissionMassageAnimation">
                    আমাদের প্রতিষ্ঠানের ভর্তির নিয়মাবলী
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-success table-striped-columns">
                        <tbody>
                            <tr>
                                <td>নতুন ছাত্র/ছাত্রীদের ভর্তি ফি বাবদ</td>
                                <td> = ৩০০০/-</td>
                            </tr>
                            <tr>
                                <td>পুরাতন ছাত্র/ছাত্রীদের ভর্তি ফি বাবদ</td>
                                <td> = ২৫০০/-</td>
                            </tr>
                            <tr>
                                <td>ফরম বাবদ</td>
                                <td> = ২০০/- </td>
                            </tr>
                            <tr>
                                <td>স্পেশাল খাবার বাবদ</td>
                                <td>= ৩০০০/-</td>
                            </tr>
                            <tr>
                                <td>নাস্তাসহ স্পেশাল খাবার বাবদ</td>
                                <td>= ৪০০০/-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center" style="background-color: rgb(161, 239, 245); border-radius: 10px;">
                    <h5 class="text-center ">বিঃদ্রঃ- প্রমানাদী পেলে এতিম, অসহায় ও গরীব ছাত্র/ছাত্রীদের বিশেষ ব্যবস্থা দেওয়া হবে এবং মা-বাবা না থাকলে একেবারে ফ্রি 
                    </h5>
                </div>
                
              </div>
            </div>
        </div>
        {{-- Gurdian alert massage  --}}
<section>
    <div class="container mb-3">
        <div class="card" style="outline: 2px solid #0ff035; outline-offset: 1px;box-shadow: 1px 0px 10px 1px #ff0505;border-radius: 20px;">
            <div class="card-header">
                <h4 class="text-center text-danger text-decoration-none fs-4">
                   সম্মানিত অভিভাবক
                </h4>
            </div>
            <div class="card-body">
                <h6 >
                    চলতি মাসের ১ থেকে ১০ তারিখের মধ্যে বেতন পরিশোধ করিবেন। দশ তারিখের পর বেতন বকেয়ার তালিকা শ্রেণীর শিক্ষকের কাছে দেওয়া হবে, বকেয়া আদায়ের ক্ষেত্রে শ্রেণী শিক্ষককে সহযোগিতা করিবেন। ১৫ তারিখের পর বকে আদায়ের জন্য শিক্ষার্থীর সহযোগিতা নেওয়া হলে এই অসুন্দর কাজটির জন্য আপনি অভিভাবক দায়ী হবেন।
                </h6>
            </div>
        </div>
    </div>
</section>
{{-- Gurdian alert massage  --}}
            <section>
                <div  class=" container">
                    <div class="row">
                        <div class="col">
                          <div class="card p-3 mb-5 bg-primary banglaFont shadow-lg" style="border-radius: 7px 7px 20px 0px;">
                            <div class="card-header bg-success text-light fs-5 text-center">
                                মাসিক বেতন বাবদ 
                            </div>
                            <div class="card-body">
                              <table class="table table-bordered table-success table-striped-columns">
                                <tbody>
                                    <tr>
                                        <td>শিশু জামাত মাসিক বেতন</td>
                                        <td> = ৭৫০/-</td>
                                    </tr>
                                    <tr>
                                        <td>নার্সারি জামাত মাসিক বেতন</td>
                                        <td> = ১০৫০/-</td>
                                    </tr>
                                    <tr>
                                        <td>প্রথম জামাত মাসিক বেতন</td>
                                        <td> = ১০৫০/- </td>
                                    </tr> 
                                    <tr>
                                        <td>দ্বিতীয় জামাত মাসিক বেতন</td>
                                        <td>= ১২৫০/-</td> 
                                    </tr>
                                    <tr>
                                        <td>তৃতীয় জামাত মাসিক বেতন</td>
                                        <td>= ১৫০০/-</td> 
                                    </tr>
                                    <tr>
                                      <td>নাজেরা বিভাগ মাসিক বেতন</td>
                                      <td>= ১৫০০/-</td> 
                                  </tr>
                                  <tr>
                                    <td>হিফ্‌জ বিভাগ মাসিক বেতন</td>
                                    <td>= ১৫০০/-</td> 
                                </tr>
                                <tr>
                                  <td>হিফ্‌জ রিভিশন বিভাগ মাসিক বেতন</td>
                                  <td>= ১৫০০/-</td> 
                              </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="card-footer " style="background-color: rgb(173, 240, 199); border-radius: 10px">
                                <h5 class="text-center ">আবাসিক সকল বিভাগের জন্য অতিরিক্ত ফি ৫০০ টাকা। </h5>
                                <h5 class="text-center ">মাসিক কারেন্টবিল বাবদ = ১০০৳ সকল বিভাগের জন্য</h5>
                            </div>
                            
                            </div>
                          </div>
                        </div>
                </div>
            </section>
          </div>
</section>
{{-- section about admission information end here --}}


<section>
    <div class="container">
        <div class="card mb-5" style="outline: 4px solid #f0740f; outline-offset: 1px;box-shadow: 1px 0px 10px 1px #26b456;border-radius: 20px;">
            <div class="card-header">
                <h4 class="text-center text-danger text-decoration-none fs-4">
                    সাক্ষাৎ ও মোবাইলের সময় সূচি 
                </h4>
            </div>
            <div class="card-body">
                <h6 >
                    ছাত্রদের সাথে প্রতিদিন আসর থেকে মাগরিব পর্যন্ত এবং শুক্রবার সকাল ৯ টা থেকে দুপুর ১২ টা পর্যন্ত সাক্ষাৎ করতে পারবেন, বিশেষ কারণে কর্তৃপক্ষের অনুমতি সাপেক্ষে অন্য সময় শিথিল যোজ্ঞ অনূর্ধ্ব ৫ মিনিট, তার উপরে নয়। ছাত্রদের সাথে প্রতিদিন আসর থেকে মাগরিব পর্যন্ত মোবাইলে কথা বলতে পারবেন, মোবাইলে কথা বলার সময় অনূর্ধ্ব তিন মিনিট এই নাম্বারেঃ- ০১৮৭৫৯০৫৫৫২ <br> কোন ছাত্র মাদ্রাসায় মোবাইল সেট মেমোরি ইত্যাদি ব্যবহার করতে পারবেনা।
                </h6>
            </div>
        </div>
    </div>
</section>
{{-- section for food items start here --}}
  <section>
    <div class="container">
        <div class="card text-center p-3 mb-5 banglaFont" style="border-radius: 10px; box-shadow: 0px 2px 14px 7px #000000; outline: 3px solid #ff0000; outline-offset: 7px;">
            <div class="card-header fs-5  text-white" style="background: rgb(168, 8, 173); border-radius: 6px;">
              আমাদের প্রতিষ্ঠানের সাপ্তাহিক খাবারের তালিকা 
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary p-2">
                    <thead class="text-dark">
                      <tr>
                        <th scope="col">বার</th>
                        <th scope="col">সকালের খাবার</th>
                        <th scope="col">দুপুরের খাবার</th>
                        <th scope="col">রাতের খাবার</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-danger">শনিবার</th>
                        <td>ভাত, ভাজি, ডাল</td>
                        <td>ভাত, মাছ, ডাল</td>
                        <td>ভাত, মাছ, ডাল</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: rgb(255, 0, 255);">রবিবার</th>
                        <td>ভাত, ভর্তা, ডাল </td>
                        <td class="text-success">ভাত, গোস্ত, ডাল</td>
                        <td class="text-success">ভাত, গোস্ত, ডাল</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: rgb(55, 0, 252);">সোমবার</th>
                        <td >ভাত, ভাজি, ডাল</td>
                        <td>ভাত, ডিম, ডাল</td>
                        <td>ভাত, ডিম, ডাল</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: green;">মঙ্গলবার</th>
                        <td style="color: red;">ভুনা খিচুড়ি</td>
                        <td>ভাত, মাছ, ডাল</td>
                        <td>ভাত, মাছ, ডাল</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: rgb(25, 0, 255);">বুধবার</th>
                        <td >ভাত, ভর্তা, ডাল</td>
                        <td>ভাত, ডিম, ডাল </td>
                        <td>ভাত, ডিম, ডাল </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-danger">বৃহস্পতিবার</th>
                        <td >ভাত, ভাজি, ডাল</td>
                        <td style="color: rgb(204, 0, 255);">ভাত, গোস্ত, ডাল</td>
                        <td style="color: rgb(212, 0, 255);">ভাত, গোস্ত, ডাল</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: rgb(0, 195, 255);">শুক্রবার</th>
                        <td >ভাত, ভর্তা, ডাল</td>
                        <td>ভাত, ডিম, ডাল</td>
                        <td>ভাত, ডিম, ডাল</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="card-footer" style="background-color: rgb(168, 235, 252); border-radius: 10px">
              <h5 class="text-center">
                বিঃ দ্রঃ- ছাত্রদের সুবিধার্থে মাঝে মাঝে খাবারের পরিবর্তন করা হয়ে থাকে
              </h5>
            </div>
          </div>
       </div>
  </section>
{{-- section for food items end here --}}
{{-- Massage to guirdeans --}}
<section>
    <div class="container">
        <div class="card p-2 text-dark shadow-lg mb-2" style="border-radius: 8px">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-header fs-4 rounded">
                        মাদ্রাসার নিয়ম-কানুনের প্রতি দায়িত্বশীল আচরণ নিশ্চিত করতে অভিভাবকদের প্রতি কিছু পরামর্শ:
                    </div>
                    <div class="card-body">
                        <p>
                            1. <strong>নিয়মিত যোগাযোগ রক্ষা:</strong> ছাত্রদের লেখাপড়ার অগ্রগতি জানতে এবং তাঁদের শৃঙ্খলা বজায় রাখতে শিক্ষাপ্রতিষ্ঠানের সাথে নিয়মিত যোগাযোগ রক্ষা করা জরুরি। মাসিক মিটিং বা পরীক্ষার পর অভিভাবক-শিক্ষক বৈঠকে অংশগ্রহণ করতে চেষ্টা করুন। <br>
                            2. <strong>পরিবেশ নিশ্চিত করা:</strong> সন্তানের পড়াশোনার জন্য বাড়িতে শান্তিপূর্ণ ও মনোযোগপূর্ণ একটি পরিবেশ তৈরি করুন, যেখানে তারা নিরবচ্ছিন্নভাবে পড়াশোনা করতে পারবে। <br>
                            3. <strong>শৃঙ্খলার উপর জোর দিন:</strong> তাদের সময়নিষ্ঠা, অধ্যবসায়, এবং নৈতিক মূল্যবোধ রপ্ত করার জন্য উৎসাহিত করুন। নিয়মিত সময়ে ঘুম, খাওয়া, এবং পড়াশোনার অভ্যাস গড়ে তুলতে সাহায্য করুন। <br>
                            4. <strong>প্রতিদিনের পড়াশোনায় মনোযোগ:</strong> প্রতিদিনের পড়াশোনা এবং হোমওয়ার্ক সঠিকভাবে হচ্ছে কি না তা যাচাই করুন এবং যে কোনো সমস্যায় পাশে থাকুন। <br>
                            5. <strong> ইতিবাচক মানসিকতা গড়ে তোলা:</strong> সন্তানদের সাথে ইতিবাচক ও সমর্থনমূলক আলোচনা করুন। পড়াশোনার প্রতি তাঁদের আগ্রহ বৃদ্ধি করতে এবং ব্যর্থতার ক্ষেত্রে নিরুৎসাহিত না হয়ে বরং তাদের পাশে দাঁড়ান। <br>
                            6. <strong>দায়িত্বশীলতা শেখানো:</strong> সন্তানদের নিজের কাজের জন্য দায়িত্বশীল হওয়ার মানসিকতা গড়ে তুলুন। এভাবে তারা শুধু পড়াশোনায় নয়, বরং জীবনের প্রতিটি ক্ষেত্রে সঠিকভাবে দায়িত্ব পালন করতে শিখবে। <br>
                            7. <strong>পড়াশোনার উপকরণ সরবরাহ:</strong> প্রয়োজনীয় বই, খাতা, কলম, ইন্টারনেট ইত্যাদি পড়াশোনার উপকরণগুলি সময়মতো সরবরাহ করুন যাতে তারা নিজেদের উন্নতির পথে এগিয়ে যেতে পারে। <br>
                            8. <strong>বই পড়ার অভ্যাস গড়ে তোলা:</strong> পাঠ্যবই ছাড়াও অন্যান্য মানসম্মত বই পড়তে উৎসাহিত করুন, যা তাদের জ্ঞানের পরিধি বৃদ্ধি করবে। <br>
                            9. <strong>স্বাস্থ্য ও নিরাপত্তার দিকে নজর:</strong> পড়াশোনার পাশাপাশি তাঁদের শারীরিক ও মানসিক স্বাস্থ্যকে গুরুত্ব দিন। নিয়মিত স্বাস্থ্য পরীক্ষা এবং মানসিক শান্তির জন্য সময় বের করতে সাহায্য করুন। <br>
                            10. <strong>ইসলামিক শিক্ষার চর্চা:</strong> ধর্মীয় শিক্ষার মাধ্যমে নৈতিকতা, দয়া ও অন্যের প্রতি সম্মানবোধ শেখানোর জন্য তাঁদের কোরআন ও হাদিস চর্চার সুযোগ দিন।
                          </p>
                          <p class="text-danger">এগুলো মেনে চললে সন্তানেরা কেবল শিক্ষা অর্জনেই সফল হবে না, বরং একজন আদর্শ মানুষ হিসেবে গড়ে উঠতে পারবে।</p>
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="card" style="border-top-left-radius: 10px; box-shadow: -1px -1px 10px 11px #666464;">
                    <div class="card-body">
                        <p>
                            1. <strong>মাদ্রাসার নিয়ম সম্পর্কে সচেতনতা:</strong>  মাদ্রাসার নিয়ম-কানুন এবং নির্দেশিকা সম্পর্কে পূর্ণ ধারণা নিন। ভর্তি ও নিয়মিত ক্লাস, পরীক্ষার সময়সূচি, শিক্ষামূলক কার্যক্রম, পোশাকবিধি, এবং শৃঙ্খলা রক্ষা সংক্রান্ত নিয়মগুলো সম্পর্কে অবগত থাকুন এবং সন্তানেরা যেন সেগুলো মেনে চলে তা নিশ্চিত করুন। <br>
                            2. <strong>নিয়মিত উপস্থিতি নিশ্চিত করা: </strong>  মাদ্রাসায় সন্তানের নিয়মিত উপস্থিতি নিশ্চিত করুন। অনুপস্থিতির ক্ষেত্রে যথাযথ কারণ জানিয়ে মাদ্রাসা কর্তৃপক্ষকে অবহিত করুন। <br>
                            3. <strong>সঠিক পোশাক পরিধান: </strong>  সন্তানেরা যেন মাদ্রাসার নির্ধারিত পোশাক এবং পরিচ্ছন্ন অবস্থায় উপস্থিত হয় তা নিশ্চিত করুন। ইসলামিক এবং ঐতিহ্যবাহী পোশাকবিধি মেনে চলার গুরুত্ব বোঝান। <br>
                            4. <strong> সময়নিষ্ঠা বজায় রাখা: </strong> সন্তানেরা যেন যথাসময়ে মাদ্রাসায় পৌঁছায় এবং ক্লাসে মনোযোগ দেয় তা নিশ্চিত করার জন্য সময়নিষ্ঠ হওয়ার অভ্যাস গড়ে তুলুন। <br>
                            5. <strong>শৃঙ্খলার চর্চা:</strong>  সন্তানেরা যেন মাদ্রাসার শৃঙ্খলা ও নিয়মানুবর্তিতা মেনে চলে তা নিশ্চিত করুন। শিক্ষক ও সহপাঠীদের সাথে ভদ্র ও সম্মানজনক আচরণ করার অভ্যাস গড়ে তুলতে সাহায্য করুন। <br>
                            6. <strong>অধিকতর পারফরম্যান্সের জন্য সহযোগিতা: </strong>  সন্তানেরা যদি কোনও বিষয়ে পিছিয়ে পড়ে তবে মাদ্রাসার শিক্ষকদের সাথে পরামর্শ করে তাদের শিক্ষায় আরও উন্নতি করার ব্যবস্থা করুন। প্রয়োজনে টিউটরিং বা বাড়িতে অতিরিক্ত পড়াশোনার সুযোগ দিন। <br>
                            7. <strong>বিশেষ অনুষ্ঠানে অংশগ্রহণ: </strong>  মাদ্রাসায় অনুষ্ঠিত বিশেষ অনুষ্ঠান, সেমিনার বা কর্মশালায় অভিভাবকদের অংশগ্রহণ গুরুত্বপূর্ণ। এতে করে সন্তানের শিক্ষার প্রতি আপনার আগ্রহ প্রকাশ পায়, যা তাদের আরও দায়িত্বশীল করে তোলে। <br>
                            8. <strong>আচরণগত পরিবর্তনের প্রতি নজর: </strong>  সন্তানের আচরণে পরিবর্তন লক্ষ্য করলে মাদ্রাসা কর্তৃপক্ষকে তা অবহিত করুন এবং প্রয়োজনে তাদের পরামর্শ নিন। আচরণগত সমস্যার ক্ষেত্রে শিক্ষকদের সাথে মিলেমিশে সমাধান খোঁজার চেষ্টা করুন। <br>
                            9. <strong>অভিযোগ এবং পরামর্শ প্রদান:</strong> সন্তানের কোনো সমস্যা বা প্রয়োজনীয় উন্নতি সম্পর্কে মাদ্রাসাকে জানাতে দ্বিধা করবেন না। তবে তা শৃঙ্খলাভঙ্গের উপায়ে নয়, বরং সঠিক পদ্ধতিতে জানানোর চেষ্টা করুন। <br>
                            10. <strong>ইসলামিক মূল্যবোধ রক্ষায় অবদান রাখা:</strong> সন্তানদের ইসলামিক মূল্যবোধ ও শৃঙ্খলা রক্ষা করতে উদ্বুদ্ধ করুন এবং পরিবারের সদস্যরাও যেন মাদ্রাসার নীতিমালা সম্মান করেন সেই বিষয়ে সচেতন থাকুন।
                          </p>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Massage to guirdeans --}}
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="I am carousel N-1">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h3 class="display-3 text-white animated slideInDown">- ঐ ব্যক্তির জন্য মৃত্যু কষ্টদায়ক নয়,
                                    যে ব্যক্তি মৃত্যুকে বেশি স্মরণ করে।</h3>
                                <p class="fs-5 text-white mb-4 pb-2">হযরত আলী (রাঃ)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-2.jpg') }}" alt="I am carousel N-2">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h3 class="text-light text-uppercase mb-3 animated slideInDown">- যত দুরবস্থায়ই পতিত হও না কেন
                                    আদর্শের ক্ষেত্রে পরাজয় বরণ করোনা।</h3>
                                <p class="fs-5 text-white mb-4 pb-2">হযরত উসমান (রাঃ)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-33.jpg') }}" alt="I am carousel N-3">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h3 class="text-light text-uppercase mb-3 animated slideInDown">
                                    মৃত্যুর জন্য সবসময় প্রস্তুত থাক,
                                    মৃত্যুর দূত তোমার পিছনেই দাঁড়িয়ে আছে। 
                                    তার ডাক আসার পর, 
                                    আর প্রস্তুত হওয়ার সময় থাকবে না।</h3>
                                <p class="fs-5 text-white mb-4 pb-2">হযরত আলী (রাঃ)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h4 class="mb-3">জীবনের লক্ষ্য</h4>
                            <p>শিক্ষা ও গবেষণার ক্ষেত্রে আমি হব 
                                একজন ধীমান ও বিদগ্ধ গবেষক। 
                                 রচনা ও সাংবাদিকতার অঙ্গনে একজন শক্তিশালী লেখক ও সাংবাদিক। 
                                যুদ্ধের ময়দানে একজন বীর ও বিচক্ষণ সেনাপতি।
                                রাজনীতি ও সমাজ সংস্কারের প্রাঙ্গনে 
                                একজন প্রাজ্ঞ রাজনীতিজ্ঞ ও সংস্কারক। 
                                সেবার ক্ষেত্রে জনদরদী সেবক। 
                                ইহসান ও তাযকিয়ার মহলে 
                                অন্তরালােকসম্পন্ন মুসলিহ ও মুযাক্কী ।
                                 ইনাবত ইলাল্লাহর ক্ষেত্রে সবিনয় দু'আকারী।
                                 আর খাওফে ইলাহীর তাড়নায় 
                                প্রকম্পিত এক বান্দা।
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h4 class="mb-3">ইন্টারনেট কী?</h4>
                            <p>ইন্টারনেট হলো একটি বৈশ্বিক নেটওয়ার্ক যা অসংখ্য কম্পিউটার ও ডিভাইসকে একে অপরের সঙ্গে সংযুক্ত করে। এটি তথ্য আদান-প্রদানের একটি মাধ্যম, যেখানে ওয়েবসাইট, ইমেইল, সোশ্যাল মিডিয়া এবং অন্যান্য পরিষেবাগুলো চালানো হয়।
                                <p>
                                    <p class="d-inline-flex gap-1"> 
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                          Read More 
                                        </button>
                                      </p>
                                      <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <strong>ইন্টারনেট কীভাবে কাজ করে?</strong>
                                            ইন্টারনেট কাজ করে বিভিন্ন প্রযুক্তি ও প্রোটোকলের সমন্বয়ে। নিচে সহজভাবে এর কার্যপ্রক্রিয়া বর্ণনা করা হলো:
                                            <strong>নেটওয়ার্কের সংযোগ: </strong>
                                            বিভিন্ন কম্পিউটার, সার্ভার এবং রাউটার একে অপরের সঙ্গে ক্যাবল (যেমন ফাইবার অপটিক), স্যাটেলাইট বা ওয়্যারলেস প্রযুক্তির মাধ্যমে সংযুক্ত থাকে।
                                            <strong>আইপি (IP) ঠিকানা:</strong>
                                            প্রতিটি ডিভাইসকে ইন্টারনেটে সনাক্ত করার জন্য একটি ইউনিক আইপি ঠিকানা (IP Address) দেওয়া হয়। এটি ঠিক একইভাবে কাজ করে যেভাবে একটি বাড়ির ঠিকানা চিঠি পাওয়ার জন্য প্রয়োজন হয়।
                                             <strong>প্রোটোকল (HTTP/HTTPS):</strong>
                                            যখন আপনি কোনো ওয়েবসাইট খুলতে চান, তখন HTTP বা HTTPS নামের প্রোটোকল ব্যবহার করা হয়, যা ঠিক করে কীভাবে ডেটা আদান-প্রদান হবে।
                                             <strong>ডোমেইন নেম সিস্টেম (DNS):</strong>
                                            আপনি যখন কোনো ওয়েবসাইটের ঠিকানা (যেমন, www.google.com) লিখেন, তখন DNS এটি আইপি ঠিকানায় রূপান্তর করে, যাতে আপনার ব্রাউজার সেই সার্ভারে সংযোগ স্থাপন করতে পারে।
                                             <strong>ডেটা ট্রান্সফার ও প্যাকেট সুইচিং:</strong>
                                            ডেটা ছোট ছোট প্যাকেটে বিভক্ত হয়ে নেটওয়ার্কের মাধ্যমে গন্তব্যে পৌঁছে। প্যাকেটগুলো বিভিন্ন রুট দিয়ে যেতে পারে এবং শেষে একত্রিত হয়ে পূর্ণ ডেটা তৈরি করে।
                                             <strong>রাউটার এবং সার্ভার:</strong>
                                            রাউটার বিভিন্ন নেটওয়ার্কের মধ্যে ডেটা পাঠায়, আর সার্ভারগুলো তথ্য সংরক্ষণ করে এবং ক্লায়েন্টদের (যেমন আপনার ফোন বা কম্পিউটার) সেবাদান করে। 
                                        </div>
                                      </div>
                            </p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h4 class="mb-3">মাদ্‌রাসার ইতিহাস </h4>
                            <p>মাদ্‌রাসা শব্দটি এসেছে "দরস" (পাঠ) শব্দ থেকে, যার অর্থ হলো শিক্ষার স্থান বা পাঠদান কেন্দ্র। এটি মূলত ইসলামী ধর্মীয় শিক্ষা প্রদানের জন্য প্রতিষ্ঠিত হয়, তবে সময়ের সাথে সাথে মাদ্‌রাসাগুলোতে ধর্মীয় বিষয়ের পাশাপাশি বিজ্ঞান, দর্শন, গণিত প্রভৃতি বিষয়ও পড়ানো হতো। বাংলাদেশের মাদ্‌রাসাগুলোর ইতিহাস মূলত ইসলামী শিক্ষা এবং ভারতীয় উপমহাদেশের মুসলিম ঐতিহ্যের সঙ্গে সম্পর্কিত।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h4 class="mb-3">ছাত্রজীবন: স্বপ্ন ও সংগ্রামের এক অনন্য সময়</h4>
                            <p>ছাত্রজীবন হলো মানুষের জীবনের সোনালি অধ্যায়, যা পরবর্তী জীবনের পথনির্দেশক হিসেবে কাজ করে। এই সময়ে যত বেশি চেষ্টা, পরিশ্রম এবং অনুশীলন করা যায়, ভবিষ্যতে তার সুফল তত বেশি পাওয়া যায়। যদিও ছাত্রজীবনে অনেক চ্যালেঞ্জ থাকে, তবে এটিই সেই সময় যখন মানুষ বড় স্বপ্ন দেখতে শিখে এবং নিজেকে বাস্তবায়নের জন্য প্রস্তুত করে।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ url('frontend/img/about.png') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-dark pe-3">আমাদের সম্পর্কে</h6>
                    <h1 class="mb-4">মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা, ঢাকা.</h1>
                    <p class="mb-4">মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা, ঢাকা একটি স্বনামধন্য শিক্ষা প্রতিষ্ঠান, যা ইসলামী জ্ঞান, নৈতিকতা, এবং আধুনিক শিক্ষার সমন্বয়ে শিক্ষার্থীদের উপযুক্ত মানুষ হিসেবে গড়ে তোলার লক্ষ্যে কাজ করে যাচ্ছে। আমাদের মাদ্‌রাসা কুরআন ও সুন্নাহ ভিত্তিক শিক্ষার পাশাপাশি ছাত্রদের নৈতিক ও সামাজিক মূল্যবোধে সমৃদ্ধ করতে প্রতিশ্রুতিবদ্ধ।</p>
                    <h6 class="mb-4">আমাদের লক্ষ্য ও উদ্দেশ্য</h6>
                    <p> <strong>আমাদের প্রধান লক্ষ্য হলো:</strong>
                        কুরআন এবং হাদিসের আলোকে শিক্ষা প্রদান করা, যাতে শিক্ষার্থীরা জীবনের প্রতিটি ক্ষেত্রে ইসলামি নীতিমালা অনুসরণ করতে পারে।
                        নৈতিকতা ও মানবিক মূল্যবোধ গড়ে তোলা, যাতে শিক্ষার্থীরা সমাজে দায়িত্বশীল নাগরিক হিসেবে গড়ে ওঠে।
                        সামগ্রিক মানসম্পন্ন শিক্ষা নিশ্চিত করা, যেখানে ধর্মীয় শিক্ষার পাশাপাশি বিজ্ঞান, গণিত, ইংরেজি, এবং তথ্যপ্রযুক্তিরও প্রশিক্ষণ দেওয়া হয়।</p>
                    <h5>আমাদের সিলেবাস ও শিক্ষার পদ্ধতি</h5>
                    <p>আমাদের মাদ্‌রাসায় দ্বীনি শিক্ষার পাশাপাশি আধুনিক পাঠ্যক্রমও অন্তর্ভুক্ত রয়েছে, যা শিক্ষার্থীদের পূর্ণাঙ্গ শিক্ষায় শিক্ষিত হতে সহায়তা করে। আমাদের সিলেবাসে অন্তর্ভুক্ত রয়েছে:
                       <strong> হিফ্‌জুল কুরআন (কুরআন মুখস্থকরণ)
                        হাদিস অধ্যয়ন
                        আরবি ভাষা শিক্ষা</strong>
                        সাধারণ বিষয়: গণিত, বিজ্ঞান, ইংরেজি, এবং আইসিটি
                        আমরা শিক্ষার্থীদের সামগ্রিক উন্নয়নে বিশেষ গুরুত্ব দিয়ে থাকি, যাতে তারা ধর্মীয় এবং জাগতিক জ্ঞানের সঠিক সমন্বয় ঘটাতে পারে।</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Categories Start -->
    <!-- Categories Start -->
    <!-- Courses Start --> 
    <!-- Courses End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3 mb-5">পড় তোমার প্রভুর নামে যিনি সৃষ্টি করেছেন</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ url('frontend/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">তোমরা নামায প্রতিষ্ঠা কর এবং যাকাত দাও। তোমরা নিজের জন্য পূর্বে যে সৎকর্ম প্রেরণ করবে, তা আল্লাহর কাছে পাবে। তোমরা যা কিছু কর, নিশ্চয় আল্লাহ তা প্রত্যক্ষ করেন</h5>
                            <h6>(সুরা বাকারা - ২:১১০)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ url('frontend/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">যারা নিজেদের সম্পদ আল্লাহর পথে ব্যয় করে তাদের উদাহরণ একটি শস্যবীজের মতো, যা সাতটি শীষ উৎপাদন করে, প্রত্যেক শীষে একশত শস্যদানা। আল্লাহ যাকে ইচ্ছা বহুগুণে বৃদ্ধি করে দেন। আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ।</h5>
                            <h6>[সূরা বাকার: আয়াত ২৬১]</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ url('frontend/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">মহান আল্লাহ কুরআনে বলেছেন, যারা আল্লাহর পথে নিজেদের সম্পদ ব্যয় করে, তাদের উপমা একটি বীজের মত, যা উৎপন্ন করল সাতটি শীষ, প্রতিটি শীষে রয়েছে একশ দানা। আর আল্লাহ যাকে চান তার জন্য বাড়িয়ে দেন। আর আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ।</h5>
                            <h6>(সূরা বাকারা, আয়াত ২৬১)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ url('frontend/img/team-4.jpg') }}" alt="Hadith N-4">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">আবূ হুরাইরাহ্ (রাঃ) থেকে বর্ণিতঃ তিনি বলেন, রসূলুল্লাহ (সাল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম) বলেছেনঃ যে ব্যক্তি কারো দুনিয়ার কোনো বিপদ দুর করবে, মহান আল্লাহ তাকে কিয়ামতের দিনের বিপদ থেকে রক্ষা করবেন।</h5>
                            <h6>(তিরমিজি, হাদিস নং ২৯৪৫)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    @endsection