@extends('layouts.master_customer')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-wrap set-bg" data-setbg="{{ asset('img/bg_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero__text">
                    <div class="icon row justify-content-center">
                        <img src ="assets/images/relax.png" width="100px" align="center" style="margin-left: 71%">
                    </div>
                    <div class="hero__text__title row justify-content-center " align="center" style="width: 62em">
                        <h1><b>Treatment Center</b></h1>
                        <p>Selamat datang di website Klinik BeautyCare, kami adalah klinik perawatan kulit wajah dan badan
                            yang didirikan oleh Modav. Di Klinik BeautyCare kami menyadari bahwa setiap individu memiliki
                            jenis dan masalah kulit yang berbeda-beda, untuk itu kami menyediakan berbagai macam perawatan kecantikan
                            kulit yang dilakukan langsung oleh dokter spesialis kulit dan kecantikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<section class="hero-wrap set-bg" data-setbg="{{ asset('img/homehijab.jpg') }}">
    <div class="container" width="250em">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text" style="padding-top: 0%">
                    <div class="hero__text__title" style="margin-left: 45%">
                         <h1 class="mb-2" ><b>Manfaat melakukan Treatments</b></h1>
                         <p class="mb-4 ftco-animate">Ada banyak manfaat melakukan facial di klinik kecantikan, salah satunya adalah untuk membersihkan pori-pori kulit secara menyeluruh.
                        Selain itu, masalah kulit yang Anda hadapi juga bisa ditangani oleh profesional yang bisa melakukan treatment yang sesuai dan bermanfaat. Facial treatment juga membantu kulit bisa tampak lebih muda dan segar kembali.</p>
                         <ul class="mt-3 do-list row justify-content-right">
                             <p class="ftco-animate"><span class="ion-ios-checkmark-circle mr-3"></span>Membantu Proses Regenerasi Kulit</a></p>
                             <p class="ftco-animate"><span class="ion-ios-checkmark-circle mr-3"></span>Untuk engatasi pori-pori kulit yang besar  hingga mencerahkan kulit</a></p>
                             <p class="ftco-animate"><span class="ion-ios-checkmark-circle mr-3"></span>Untuk mengembalikan kecerahan dan “kemurnian” kulit secara optimal</a></p>
                             <p class="ftco-animate"><span class="ion-ios-checkmark-circle mr-3"></span>Membantu Mengencangkan Kulit Yang Kendur</a></p>

                             <br>
                             <p class="ftco-animate"><span class="ion-ios-checkmark-circle mr-3"></span>Mengurangi Noda Bekas Jerawat</a></p>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Gallery</h3>
        <h2 class="mb-1">See the latest photos</h2>
      </div>
    </div>
        <div class="row">
                <div class="col-md-3 ftco-animate">
                    <a href="assets/images/1.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/1.png);">
                        <div class="d-flex align-items-center justify-content-center">
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="assets/images/3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/3.jpg);">
                        <div class="d-flex align-items-center justify-content-center">

                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="assets/images/5.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/5.png);">
                        <div class="d-flex align-items-center justify-content-center">

                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="assets/images/6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/6.jpg);">
                        <div class="d-flex align-items-center justify-content-center">

                    </div>
                    </a>
                </div>
            </div>
    </div>
</section>

@endsection
