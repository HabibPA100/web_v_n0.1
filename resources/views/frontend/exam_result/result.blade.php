<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Result Sheet</title>
    <style>
        body{
            background-image: linear-gradient( 135deg, #FFF720 10%, #3CD500 100%);
            font-family: 'Kalpurush', sans-serif;
        }
        .btn-grad_2,.btn_1,.btn_3,.btn_4,.btn_5,.btn_6,.btn_7{margin:10px;padding:10px 5px;text-align:center;text-transform:uppercase;transition:.5s;background-size:200% auto;color:#fff;box-shadow:0 0 20px #eee;border-radius:10px;display:block}.btn_1{background-image:linear-gradient(to right,#16a085 0,#f4d03f 51%,#16a085 100%)}.btn-grad_2:hover,.btn_1:hover,.btn_3:hover,.btn_4:hover,.btn_5:hover,.btn_6:hover,.btn_7:hover{background-position:right center;color:#fff;text-decoration:none}.btn-grad_2{background-image:linear-gradient(to right,#dc2424 0,#4a569d 51%,#dc2424 100%)}.btn_3{background-image:linear-gradient(to right,#c21500 0,#ffc500 51%,#c21500 100%)}.btn_4{background-image:linear-gradient(to right,#870000 0,#190a05 51%,#870000 100%)}.btn_5{background-image:linear-gradient(to right,#89a841 0,#3a7bd5 51%,#00d2ff 100%)}.btn_6{background-image:linear-gradient(to right,#360033 0,#0b8793 51%,#360033 100%)}.btn_7{background-image:linear-gradient(to right,#ff0084 0,#33001b 51%,#ff0084 100%)}
           
        .bnt_1_Animation{-webkit-animation:btn_1_Anim 2s ease-in-out forwards;animation:btn_1_Anim 2s ease-in-out forwards}
        @-webkit-keyframes btn_1_Anim{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes btn_1_Anim{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
        
        .oneDivAnimation{-webkit-animation:oneTexAnim 2s 5 both;animation:oneTexAnim 2s 5 both}
        @-webkit-keyframes oneTexAnim{0%,50%,100%{opacity:1}25%,75%{opacity:0}}@keyframes oneTexAnim{0%,50%,100%{opacity:1}25%,75%{opacity:0}}
        .narsaryTextAnimation{-webkit-animation:narsaryTextAnim 2s linear both;animation:narsaryTextAnim 2s linear both}
        @-webkit-keyframes narsaryTextAnim{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes narsaryTextAnim{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}
        .threeDivAnimation{-webkit-animation:threeDivAnim 2s cubic-bezier(.68,-.55,.265,1.55) 2s both;animation:threeDivAnim 2s cubic-bezier(.68,-.55,.265,1.55) 2s both}
        @-webkit-keyframes threeDivAnim{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes threeDivAnim{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
        .twoBtnAnimation{-webkit-animation:twoBtnAnim 2s ease-in 5s infinite alternate-reverse both;animation:twoBtnAnim 2s ease-in 5s infinite alternate-reverse both}
        @-webkit-keyframes twoBtnAnim{0%{-webkit-transform:scale(.5);transform:scale(.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes twoBtnAnim{0%{-webkit-transform:scale(.5);transform:scale(.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card text-center h-100 p-4 shadow">
                    <div class="card-body">
                        <h1 class="card-title">নুরানি বিভাগের রেজাল্ট</h1>
                        <div class="mb-3">
                             <a href="{{ route('play.result') }}" class="btn btn-info w-100 btn_1 bnt_1_Animation">
                                <p class="fs-4 mt-2 text-center">প্লে জামাতের রেজাল্ট সিট</p>
                             </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('narsary.result') }}" class="btn btn-success w-100 btn-grad_2">
                               <p class="fs-4 mt-2 text-center narsaryTextAnimation">নার্সারি জামাতের রেজাল্ট সিট</p>
                            </a>
                       </div>
                       <div class="mb-3">
                        <a href="{{ route('one.result') }}" class="btn btn-danger w-100 btn_3 oneDivAnimation">
                           <p class="fs-4 mt-2 text-center">প্রথম শ্রেণীর রেজাল্ট সিট</p>
                        </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('two.result') }}" class="btn btn-dark w-100 btn_4 twoBtnAnimation">
                               <p class="fs-4 mt-2 text-center">দ্বিতীয় শ্রেণীর রেজাল্ট সিট</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('three.result') }}" class="btn btn-warning w-100 btn_5 threeDivAnimation">
                               <p class="fs-4 mt-2 text-center">তৃতীয় শ্রেণীর রেজাল্ট সিট</p>
                            </a>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card text-center h-100 p-4 shadow">
                    <div class="card-body">
                        <h1 class="card-title">হিফয বিভাগের রেজাল্ট</h1>
                        <div class="mb-3">
                             <a href="{{ route('hifjo.result') }}" class="btn btn-info w-100 btn_6"> 
                                <p class="fs-4 mt-2 text-center">হিফয বিভাগের রেজাল্ট সিট</p>
                             </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('najera.result') }}" class="btn btn-success w-100 btn_7">
                               <p class="fs-4 mt-2 text-center">নাজেরা বিভাগের রেজাল্ট সিট</p>
                            </a>
                       </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>
{{-- js is here  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>