<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pay Now!</title>
    <style>
        body {
            background-image: linear-gradient(to top right, rgb(180, 42, 42), rgb(190, 112, 125), rgb(66, 66, 150), rgb(192, 192, 119));
            font-family: 'Kalpurush', sans-serif;
        }
       .monthlySelarry{
        animation: monthlySalaryAnim 3s ease 0s 1 normal forwards;
       }
       @keyframes monthlySalaryAnim{0%{transform:scale(.5)}100%{transform:scale(1)}}
       .examFee{
        animation: examFeeAnim 2s ease 0s 1 normal forwards;
       }
       @keyframes examFeeAnim{0%{animation-timing-function:ease-in;opacity:0;transform:translateX(250px)}38%{animation-timing-function:ease-out;opacity:1;transform:translateX(0)}55%{animation-timing-function:ease-in;transform:translateX(68px)}100%,72%,90%{animation-timing-function:ease-out;transform:translateX(0)}81%{animation-timing-function:ease-in;transform:translateX(32px)}95%{animation-timing-function:ease-in;transform:translateX(8px)}}
       .admissionFee{
        animation: admissionFeeAnim 2s ease 0s 1 normal forwards;
       }
       @keyframes admissionFeeAnim{0%{animation-timing-function:ease-in;opacity:0;transform:translateY(-250px)}38%{animation-timing-function:ease-out;opacity:1;transform:translateY(0)}55%{animation-timing-function:ease-in;transform:translateY(-65px)}100%,72%,90%{animation-timing-function:ease-out;transform:translateY(0)}81%{animation-timing-function:ease-in;transform:translateY(-28px)}95%{animation-timing-function:ease-in;transform:translateY(-8px)}}
    </style>
</head>
<body>
    
    <section>
        <div class="container">
            <h1 class="text-center text-light mt-5">Select Your Payment Method!</h1>
            <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="card text-center h-100 p-4 shadow">
                        <div class="card-header">
                            <h5><label for="selectPayMethod" class="fs-5 ">পেমেন্টের ধরন নির্বাচন করুন:</label></h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 monthlySelarry">
                                 <a href="{{ route('salary_of_students') }}" class="btn btn-info w-100">
                                    <p class="fs-4 mt-2">মাসিক বেতন পরিশোধ করুন</p>
                                 </a>
                            </div>
                            <div class="mb-3 examFee">
                                <a href="{{ route('exam.fee') }}" class="btn btn-success w-100">
                                   <p class="fs-4 mt-2">পরীক্ষার ফি পরিশোধ করুন</p>
                                </a>
                           </div>
                           <div class="mb-3 admissionFee">
                            <a href="{{ route('admission.fee') }}" class="btn btn-danger w-100">
                               <p class="fs-4 mt-2">ভর্তি ফি পরিশোধ করুন</p>
                            </a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('donation.index') }}" class="btn btn-dark w-100">
                                   <p class="fs-4 mt-2">এতিমদের জন্য সাধারণ দান</p>
                                </a>
                            </div>
                            <div class="mb-3 monthlySelarry">
                                <a href="{{ route('zakat') }}" class="btn btn-warning w-100">
                                   <p class="fs-4 mt-2">জাকাতের একটি অংশ দান</p>
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
