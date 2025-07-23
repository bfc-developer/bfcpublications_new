@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Book Stall</li>

        </ol>
    </nav>

    <section id="gallery" class="pb-5">
        <div class="container">
            <h1>BOOK STALL</h1>
            <p class="short-desc text-center py-4">
                "The inaugural edition of KLF-Awadh was a rare opportunity for BFC Publications to showcase its books, get
                face-to-face with the people it creates for i.e. the readers, and collect some valuable first-hand feedback.

                "

            </p>
            <div class="wrapper gw rounded">
                <div class="gallery">
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/1.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/2.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/3.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/4.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/5.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/6.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/7.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/8.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/9.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/10.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/11.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/12.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/13.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/14.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/15.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/16.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/17.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span></div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/18.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/19.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/20.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/21.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/22.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/23.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/24.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/25.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/26.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/27.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/28.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/29.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/30.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/31.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/32.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/33.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>
                    <div class="image"><span><img src="{{ url('assets/gallery/book-stall/34.webp') }}"
                                alt=""></span><span class="zoom-pic"><i class="fa fa-plus-circle"></i></span>
                    </div>

                </div>
            </div>
            <div class="preview-box">
                <div class="details">
                    <span class="title">
                        <p class="current-img"></p> of <p class="total-img"></p>
                    </span>
                    <span class="icon fa fa-times"></span>
                </div>
                <div class="image-box">
                    <div class="slide prev"><i class="fa fa-angle-left"></i></div>
                    <div class="slide next"><i class="fa fa-angle-right"></i></div>
                    <img src="" alt="">
                </div>
            </div>
            <div class="shadow"></div>
        </div>
        </div>
    </section>

    <!--------------------------------------------------->
    <!-- ============= Footer Section ================ -->
    <!--------------------------------------------------->
@endsection
