@extends('frontend.layout.main')
@section('main-container')
<div class="container">
    <div class="container">
        <div class="card">
            <img src="{{ asset('frontend/img/nuraniBord.jpg') }}" alt="Nurani Bord">
        </div>
    </div>
    <section class="headerSection">
        <div class="container">
            <div class="card text-center mt-2">
                <h1 class="text-danger">মাদ্‌রাসা হেদায়াতুল উম্মাহ্‌ ঢাকা এর দৈনিক ক্লাস রুটিন</h1>
            </div>
        </div>
    </section>
    <section class="HifjoBivag">
        <div class="card shadow-lg my-4"> 
         <div class="container my-4">
             <h2 class="text-center mb-4 text-primary">হিফ্‌জ বিভাগ এর দৈনিক ক্লাস রুটিন</h2>
             <div class="table-responsive">
                 <table class="table table-bordered border-primary text-center">
                     <thead class="table-primary">
                     <tr>
                         <th>সময় সূচি</th>
                         <th colspan="8">কার্যক্রম</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                        <td>রাত ৩.৩০ মিনিট</td> 
                        <td>ঘুম থেকে উঠে ৪.০০টা পর্যন্ত  এস্তেঞ্জা, অজু এবং তাহাজ্জুদের সালাত আদায় করা।</td>
                     </tr>
                     <tr>
                        <td>ভোর ৪.০০টা </td> 
                        <td>ফজরের নামাজ পর্যন্ত সবক ইয়াদ করে ওস্তাদকে শোনানো শেষ করা বাধ্যতামূলক।</td>
                     </tr>
                     <tr> 
                        <td>ফজরের পর থেকে সকাল ৮.০০টা</td>
                        <td>সাত সবক শোনানো শেষ করা বাধ্যতামূলক।</td>
                     </tr>
                     <tr>
                        <td>সকাল ৮.০০টা থেকে ৮.৩০ মিনিট</td>
                        <td>ইশরাক নামাজ ও নাস্তার বিরতি।</td>
                     </tr>
                     <tr>
                        <td>সকাল ৮.৩০ থেকে ৯ টা ৩০ মিনিট</td>
                        <td>আমুক্তা ওস্তাদকে শোনানো ।</td>
                     </tr>
                     <tr> 
                        <td>৯.৩০ মিনিট থেকে ১০.০০টা</td>
                        <td>তাজবিদ এবং মাস্ক উস্তাদ করাবেন।</td>
                     </tr>
                     <tr>
                        <td>সকাল ১০.০০টা থেকে দুপুর ১২.০০টা</td>
                        <td>ঘুম ও বিশ্রামের বিরতি।</td>
                     </tr>
                     <tr>
                        <td>দুপুর ১২.০০টা থেকে ১২.৩০ মিনিট</td>
                        <td>গোসলের বিরতি।</td>
                     </tr>
                     <tr>
                        <td>দুপুর ১২.৩০ মিনিট থেকে দুপুর ১.৩০ মিনিট</td> 
                        <td>আমুক্তা শোনানো শেষ করতে হবে বাধ্যতামূলক।</td>
                     </tr>
                     <tr>
                        <td>দুপুর ১.৩০ মিনিট থেকে ২.০০টা </td> 
                        <td>জোহরের নামাজের বিরতি এবং জামাতে নামাজ আদায় করতে হবে। </td>
                     </tr>
                     <tr>
                        <td>দুপুর ২.০০টা থেকে ২.৩০ মিনিট</td>
                        <td>দুপুরের খাবারের বিরতি।</td>
                     </tr>
                     <tr>
                        <td> দুপুর ২:৩০ মিনিট থেকে আসর নামাজ পর্যন্ত</td>
                        <td>নির্ধারিত পাড়া গুলো তেলাওয়াত করা এবং সবকের পড়া দেখা। </td>
                     </tr>
                     <tr>
                        <td>বিকাল ৪.৪৫ মিনিট থেকে বিকাল ৫.০০টা</td>
                        <td>আসর নামাজের বিরতি।</td>
                     </tr>
                     <tr>
                        <td colspan="12" class="text-danger fs-5">বিকাল তথা আসর নামাজ থেকে সন্ধ্যা তথা মাগরিবের নামাজের আগ পর্যন্ত ছাত্রদের খেলাধুলার বিরতি।</td>
                     </tr>
                     <tr>
                        <td colspan="12" class="text-primary fs-5">মাগরিবের নামাজের ১৫ মিনিট আগে ইজতেমায়ী দোয়ার আমল।</td>
                     </tr>
                     <tr>
                        <td>মাগরিব এর পর থেকে রাত ৯.০০টা</td>
                        <td>সবক ইয়াদ করে, একে অপরকে শুনিয়ে কমপ্লিট করা। </td>
                     </tr>
                     <tr>
                        <td>রাত ৯.০০টা থেকে ১০.০০টা</td> 
                        <td>নামাজ এবং রাতের খাবারের বিরতি।</td>
                     </tr>
                     <tr>
                        <td colspan="12" class="text-success fs-4">রাত ১০.১৫ মিনিট থেকে রাত ৩.৩০ মিনিট পর্যন্ত রাতের ঘুমের আমল।</td>
                     </tr>
                 </tbody>
             </table>
             <div class="card-footer">
                <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                    এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
             </div>
             </div>
         </div>
        </div>
     </section>
    <section class="classThree">
       <div class="card shadow-lg my-4">
        <div class="container my-4">
            <h2 class="text-center mb-4 text-primary">তৃতীয় শ্রেণী এর দৈনিক ক্লাস রুটিন</h2>
            <div class="table-responsive">
                <table class="table table-bordered border-primary text-center">
                    <thead>
                    <tr class="fs-5 text-dark">
                        <th>দিনের নাম </th>
                        <th>১ম পিরিয়ড <br> ০৮.০০-০৮.৩০মি</th>
                            <th>২য় পিরিয়ড <br> ০৮.৩০-১০.০০টা</th>
                            <th>৩য় পিরিয়ড <br> ১০.০০-১০.৩০মি</th>
                            <th>টিফিন বিরতি <br> ১০.৩০-১১.০০টা</th>
                            <th>৪র্থ পিরিয়ড <br> ১১.০০-১১.৪০মি</th>
                            <th>৫ম পিরিয়ড <br> ১১.৪০-১২.২০মি</th>
                            <th>৬ষ্ঠ পিরিয়ড <br> ১২.২০-০১.০০টা</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>শনিবার</td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ, ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>ইংরেজী</td>
                    <td>গণিত</td>
                    <td>বাংলা</td>
                   </tr>
                   <tr>
                    <td>রবিবার </td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ,ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>ইংরেজী</td>
                    <td>গণিত</td>
                    <td>বাংলা</td>
                   </tr>
                   <tr>
                    <td>সোমবার</td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ, ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>ইংরেজী</td>
                    <td>গণিত</td>
                    <td>বাংলা</td>
                   </tr>
                   <tr>
                    <td>মঙ্গলবার</td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ, ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>ইংরেজী</td>
                    <td>গণিত</td>
                    <td>বাংলা</td>
                   </tr>
                   <tr>
                    <td>বুধবার</td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ, ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>ইংরেজী</td>
                    <td>গণিত</td>
                    <td>বাংলা</td>
                   </tr>
                   <tr>
                    <td>বৃহস্পতিবার</td>
                    <td>হাদীস, আদিয়ায়ে মাসনুনাহ, ও খুৎবা</td>
                    <td>কুরআন ও তাজবীদ </td>
                    <td>আরবী লিখা</td>
                    <td>বিরতি ৩০মি.</td>
                    <td>বক্তিতা সেমিনার</td>
                    <td>বক্তিতা সেমিনার</td>
                    <td>***</td>
                   </tr> 
                   <tr>
                    <td>শুক্রবার</td>
                    <td>***</td>
                    <td>*** </td>
                    <td>*** </td>
                    <td>*** </td>
                    <td>*** </td>
                    <td>*** </td>
                    <td>*** </td>
                   </tr>
                   <tr>
                    <td colspan="12" class="text-danger fs-5">০১.০০ থেকে ০১.১৫মি পর্যন্ত নামাজের বিরতি। তারপর ছুটি ।</td>
                   </tr>
                   <tr>
                    <td colspan="6"> মাগরিবের পর থেকে ০৮.২০মি পর্যন্ত কুরআন মাজীদ ও তাজবীদ</td>
                    <td colspan="6"> ০৮.২৫মি থেকে ০৯.০০টা পর্যন্ত মাসআলা ও আদিয়ায়ে সলাহ</td>
                   </tr>
                   <tr>
                    <td colspan="12" class="text-danger fs-5"> ০৯.০০টা এর পর এশার নামাজ ও ছুটি</td>
                   </tr>  
                </tbody>
            </table>
            </div>
            <div class="card-footer">
                <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                    এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
             </div>
        </div>
       </div>
    </section>
    <section class="classTwo">
        <div class="card shadow mb-3">
            <div class="container my-4">
                <h2 class="text-center mb-4 text-primary">দ্বিতীয় শ্রেণী এর দৈনিক ক্লাস রুটিন</h2>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>দিনের নাম </th>
                            <th>১ম পিরিয়ড <br> ০৮.০০-০৮.৩০মি</th>
                            <th>২য় পিরিয়ড <br> ০৮.৩০-১০.০০টা</th>
                            <th>৩য় পিরিয়ড <br> ১০.০০-১০.৩০মি</th>
                            <th>টিফিন বিরতি <br> ১০.৩০-১১.০০টা</th>
                            <th>৪র্থ পিরিয়ড <br> ১১.০০-১১.৪০মি</th>
                            <th>৫ম পিরিয়ড <br> ১১.৪০-১২.২০মি</th>
                            <th>৬ষ্ঠ পিরিয়ড <br> ১২.২০-০১.০০টা</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <td>শনিবার</td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>রবিবার </td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>সোমবার</td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>মঙ্গলবার</td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>বুধবার</td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>বৃহস্পতিবার</td>
                        <td>হাদীস, আদিয়ায়ে মাসনুনাহ মাসআলা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>***</td>
                       </tr> 
                       <tr>
                        <td>শুক্রবার</td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>              
                       </tr> 
                       <tr>
                        <td colspan="12" class="text-danger fs-5">০১.০০ থেকে ০১.১৫মি পর্যন্ত নামাজের বিরতি। তারপর ছুটি ।</td>
                       </tr>
                       <tr>
                        <td colspan="6"> মাগরিবের পর থেকে ০৮.২০মি পর্যন্ত কুরআন মাজীদ ও তাজবীদ</td>
                        <td colspan="6"> ০৮.২৫মি থেকে ০৯.০০টা পর্যন্ত কালিমা, আসমাউল হুসনা, আদিয়ায়ে সলাহ </td>
                       </tr>
                       <tr>
                        <td colspan="12" class="text-danger fs-5"> ০৯.০০টা এর পর এশার নামাজ ও ছুটি</td>
                       </tr>  
                    </tbody>
                </table>
                <div class="card-footer">
                    <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                        এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <section class="classOne">
        <div class="card shadow mb-3">
            <div class="container my-4">
                <h2 class="text-center mb-4 text-primary">প্রথম শ্রেণী এর দৈনিক ক্লাস রুটিন</h2>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>দিনের নাম </th>
                            <th>১ম পিরিয়ড <br> ০৮.০০-০৮.৩০মি</th>
                            <th>২য় পিরিয়ড <br> ০৮.৩০-১০.০০টা</th>
                            <th>৩য় পিরিয়ড <br> ১০.০০-১০.৩০মি</th>
                            <th>টিফিন বিরতি <br> ১০.৩০-১১.০০টা</th>
                            <th>৪র্থ পিরিয়ড <br> ১১.০০-১১.৪০মি</th>
                            <th>৫ম পিরিয়ড <br> ১১.৪০-১২.২০মি</th>
                            <th>৬ষ্ঠ পিরিয়ড <br> ১২.২০-০১.০০টা</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <td>শনিবার</td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>রবিবার </td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>সোমবার</td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>মঙ্গলবার</td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>বুধবার</td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বাংলা</td>
                       </tr>
                       <tr>
                        <td>বৃহস্পতিবার</td>
                        <td>হাদীস শরীফ ও কালিমা</td>
                        <td>কুরআন ও তাজবীদ </td>
                        <td>আরবী লিখা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>***</td>
                       </tr> 
                       <tr>
                        <td>শুক্রবার</td>
                        <td>***</td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td> 
                       </tr>
                       <tr>
                        <td colspan="12" class="text-danger fs-5">০১.০০ থেকে ০১.১৫মি পর্যন্ত নামাজের বিরতি। তারপর ছুটি ।</td>
                       </tr>
                       <tr>
                        <td colspan="6"> মাগরিবের পর থেকে ০৮.২০মি পর্যন্ত কুরআন মাজীদ ও তাজবীদ</td>
                        <td colspan="6"> ০৮.২৫মি থেকে ০৯.০০টা পর্যন্ত মাসআলা ও আদিয়ায়ে সলাহ</td>
                       </tr>
                       <tr>
                        <td colspan="12" class="text-danger fs-5"> ০৯.০০টা এর পর এশার নামাজ ও ছুটি</td>
                       </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                        এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <section class="NarsaryJamat">
        <div class="card shadow mb-3">
            <div class="container my-4">
                <h2 class="text-center mb-4 text-primary">নার্সারি জামাত এর দৈনিক ক্লাস রুটিন</h2>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>দিনের নাম </th>
                            <th>১ম পিরিয়ড <br> ০৯.০০-০৯.৩০মি</th>
                            <th>২য় পিরিয়ড <br> ০৯.৩০-১০.০০টা</th>
                            <th>৩য় পিরিয়ড <br> ১০.০০-১০.৩০মি</th>
                            <th>টিফিন বিরতি <br> ১০.৩০-১১.০০টা</th>
                            <th>৪র্থ পিরিয়ড <br> ১১.০০-১১.৩০মি</th>
                            <th>৫ম পিরিয়ড <br> ১১.৩০-১২.০০টা</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <td>শনিবার</td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                       </tr>
                       <tr>
                        <td>রবিবার </td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                       </tr>
                       <tr>
                        <td>সোমবার</td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                       </tr>
                       <tr>
                        <td>মঙ্গলবার</td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                       </tr>
                       <tr>
                        <td>বুধবার</td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                       </tr>
                       <tr>
                        <td>বৃহস্পতিবার</td>
                        <td>আরবি পড়া ও মাখরাজ </td>
                        <td>কালিমা, মাসআলা, <br> হাদীস ও সাধারন জ্ঞান </td>
                        <td>বাংলা</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>বক্তিতা সেমিনার</td>
                       </tr> 
                       <tr>
                        <td>শুক্রবার</td>
                        <td>***</td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                       </tr> 
                       <tr>
                        <td colspan="12" class="text-danger fs-5">১২.০০টার সময় ছুটি ।</td>
                       </tr> 
                    </tbody>
                </table>
                <div class="card-footer">
                    <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                        এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <section class="PlayJamat">
        <div class="card shadow mb-3">
            <div class="container my-4">
                <h2 class="text-center mb-4 text-primary">প্লে জামাত এর দৈনিক ক্লাস রুটিন</h2>
                <div class="table-responsive">
                    <table class="table table-bordered border-primary text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>দিনের নাম </th>
                            <th>১ম পিরিয়ড <br> ০৯.০০-০৯.৩০মি</th>
                            <th>২য় পিরিয়ড <br> ০৯.৩০-১০.০০টা</th>
                            <th>৩য় পিরিয়ড <br> ১০.০০-১০.৩০মি</th>
                            <th>টিফিন বিরতি <br> ১০.৩০-১১.০০টা</th>
                            <th>৪র্থ পিরিয়ড <br> ১১.০০-১১.৩০মি</th>
                            <th>৫ম পিরিয়ড <br> ১১.৩০-১২.০০টা</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <td>শনিবার</td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>আরবি পড়া, মাসআলা, মাখরাজ</td>
                        <td>কালিমা, হাদীস ও সাধারন জ্ঞান</td>
                       </tr>
                       <tr>
                        <td>রবিবার </td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>আরবি পড়া, মাসআলা, মাখরাজ</td>
                        <td>কালিমা, হাদীস ও সাধারন জ্ঞান</td>
                       </tr>
                       <tr>
                        <td>সোমবার</td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>আরবি পড়া, মাসআলা, মাখরাজ</td>
                        <td>কালিমা, হাদীস ও সাধারন জ্ঞান</td>
                       </tr>
                       <tr>
                        <td>মঙ্গলবার</td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>আরবি পড়া, মাসআলা, মাখরাজ</td>
                        <td>কালিমা, হাদীস ও সাধারন জ্ঞান</td>
                       </tr>
                       <tr>
                        <td>বুধবার</td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td>
                        <td>বিরতি ৩০মি.</td>
                        <td>আরবি পড়া, মাসআলা, মাখরাজ</td>
                        <td>কালিমা, হাদীস ও সাধারন জ্ঞান</td>
                       </tr>
                       <tr>
                        <td>বৃহস্পতিবার</td>
                        <td>বাংলা</td>
                        <td>ইংরেজী</td>
                        <td>গণিত</td> 
                        <td>বিরতি ৩০মি.</td>
                        <td>বক্তিতা সেমিনার</td>
                        <td>বক্তিতা সেমিনার</td>
    
                       </tr> 
                       <tr>
                        <td>শুক্রবার</td>
                        <td>***</td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                        <td>*** </td>
                       </tr>  
                       <tr>
                        <td colspan="12" class="text-danger fs-5">১২.০০টার সময় ছুটি ।</td>
                       </tr>    
                    </tbody>
                </table>
                 <div class="card-footer">
                    <h4 class="text-primary"> <strong class="text-danger">বিশেষ দ্রষ্টব্য:-</strong> ছাত্রদের সুবিধার্থে মাঝেমধ্যে সময়কে শিথিল করে দেওয়া হয়।
                        এবং রাত, দিন, ছোট, বড়, হওয়ার কারণে সময়কে মানিয়ে নেওয়া হয়। ( ধন্যবাদ )</h4>
                 </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection