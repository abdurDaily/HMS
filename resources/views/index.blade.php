@extends('frontend.layout')

@section('frontend-contains')
    <main>
         <!-- slider-area -->
         <section id="home" class="slider-area fix p-relative">
               
            <div class="slider-active2">
            <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url(img/an-bg/header-bg.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content s-slider-content text-left">
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Get Better Care For Your <span>Health</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Quisque leo augue, lobortis ac tellus nec, posuere ultricies nulla. Praesent massa odio, pellentesque in consectetur quis, volutpat sit amet erat.</p>
                                    <div class="slider-btn mt-25">                                          
                                        <a href="index.html#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Learn More <i class="fas fa-chevron-right"></i></a>					
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('frontend/img/bg/header-img.png') }}" alt="header-img" class="header-img"/>
                            </div>
                        </div>
                    </div>
                </div>
           
                </div>                    
           
           
        </section>
        <!-- slider-area-end -->
    </main>
@endsection
        