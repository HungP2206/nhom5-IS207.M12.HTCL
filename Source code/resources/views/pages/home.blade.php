@extends('welcome')
@section('content')
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($slide->slice(0,1) as $key =>$slide1)
            <div class="carousel-item active">
                <img src="{{asset('./../public/frontend/image/'.$slide1->Img)}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
            @foreach($slide->slice(1,2) as $key => $slide2)
            <div class="carousel-item">
                <img src="{{asset('./../public/frontend/image/'.$slide2->Img)}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
            @foreach($slide->slice(2.3) as $key => $slide3)
            <div class="carousel-item">
                <img src="{{asset('./../public/frontend/image/'.$slide3->Img)}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="row p-5">

    <div class="col-lg-9 col-md-9 col-sm-12 border">
        <div>
            <h2 class="border-bottom border-danger d-inline pe-5 ps-1 float-start">S??ch k?? n??ng s???ng</h2>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">T?? duy - S???ng ?????p</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">T?? duy h???c t???p</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">H???t gi???ng t??m h???n</h6>
        </div>

        <div class="">
            <a href="#" title="V??n h???c n???i ti???ng">
                <img width="100%" class="lazy" style="image-rendering: pixelated;" alt="V??n h???c n???i ti???ng" src="{{asset('./../public/frontend/image/bn_pr_4.png')}}">
            </a>
        </div>
        <div>
            <div>
                <div id="" class="carousel slide" data-bs-ride="">
                    <div class="">
                    </div>
                    <div class="mt-2  p-2">
                        <div class=" w-100">
                            <div class="mySlides" style="display: block;">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(0, 4) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi ti???t</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(4, 8) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi ti???t</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(8, 12) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi ti???t</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="slibar" class="col-lg-3 col-md-0 col-sm-0 border">
        <h3 class="border-bottom border-danger">C??NG ????N ?????C</h3>
        @foreach($relate_product->slice(0, 4) as $key => $relates)
        <div class="row border m-2 p-2 zoom">           
            <div class="col-lg-5"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="1250px" alt=""></a></div>
            <div class="col-lg-7">
                <b>{{$relates->BookName}}</b>
                <div>T??c gi???: {{$relates->AuthorName}}</div>
                <div class="product-price-slibar">
                    <span class="special-price font-weight-bold">{{number_format($relates->PriceSale,0)}}???</span>
                    <del class="old-price">{{number_format($relates->PriceUnit,0)}}???</del>
                </div>
                <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi ti???t</a></h6>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- <div class="pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container border border-dark float-left">
            <div class="col-12 col-xl-9 d-inline check border-bottom border-dark">
                <h2 class="d-inline">V??n h???c n???i ti???ng</h2>
                <p class="d-inline ms-3">
                    <a href="#">Kinh doanh b??n h??ng</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">V??n h???c Vi???t Nam</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">K?? n??ng h?????ng nghi???p</a>
                </p>
                <div class="bn_product mt-4 mb-5">
                    <a href="#" title="V??n h???c n???i ti???ng">
                        <img class="lazy" style="image-rendering: pixelated;" alt="V??n h???c n???i ti???ng" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
                    </a>
                </div>   
                <a href="#" class="" title="Virgo">
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                </a>
            </div>
            
            <div class="float-right">C??ng ????n ?????c</div>
            
        </div>

        
    </div> -->

<div class="about w-auto m-5" style="background-image: url('./../public/frontend/image/about_bg.png');">
    <div class="position-relative h-100 w-auto b_tx w-100">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center flex-column h-100 bg">
                <div class="title_s text-uppercase font-weight-bold">
                    ????ng k?? ?????i l??
                </div>
                <div class="content">
                    B???n c?? kh??? n??ng kinh doanh v?? ??ang t??m ki???m s???n ph???m.<br>
                    Tr??? th??nh ?????i l?? c???a Mew BS
                    ????? ???????c h?????ng tr???n c??c quy???n l???i sau:<br><br>
                    - Chi???t kh???u v?? c??ng h???p d???n<br>
                    - Ch??nh s??ch ho??n h??ng linh ho???t<br>
                    - Lu??n lu??n mi???n ph?? v???n chuy???n<br>
                    - H??? tr??? truy???n th??ng ????? b??n h??ng t???t h??n<br>
                    - H??? tr??? th??? t???c b??n tr??n s??n TM??T<br>
                    - C?? nh??n vi??n h??? tr??? ri??ng
                </div>
                <div class="open_form">
                    <a id="open_form" href="{{URL::to('/lien-he')}}" title="????ng k?? ngay" class="pt-3 pb-3 pl-5 pr-5 sitdown text-uppercase modal-open position-relative btn_send d-inline-block font-weight-bold">
                        <span class="m_op">????ng k?? ngay</span>
                        <!-- <span class="m_cl position-absolute h-100 w-100 d-flex justify-content-center align-items-center">????ng</span> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m_blog pb-lg-5 pt-lg-5 pt-3 pb-3">
    <div class="container">
        <h2 class="mb-5 text-uppercase font-weight-bold text-center position-relative" href="#" title="Tin t???c - S??? ki???n">
            Tin t???c - S??? ki???n
        </h2>
        <article class="row">
            @foreach($news as $key => $value)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="item_grid mb-4">
                    <div class="position-relative">
                        <a href="{{URL::to('/news-detail/'.$value->NewsID)}}"  class="effect-ming">
                            <div class="position-relative w-100 m-0 be_opa modal-open">
                                <img src="{{asset('./../public/frontend/image/'.$value->Img)}}" class="lazy loaded" alt="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens" width="300px;">
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </a>
                        <div class="entry-date position-absolute text-center rounded-right">
                            <p class="day font-weight-bold m-0">
                            {{$value->NewsDay}}
                            </p>
                            <p class="yeah">
                            {{$value->NewsMonthYear}}
                            </p>
                        </div>
                    </div>
                    <div class="cont">
                        <h6 class="font-weight-bold mt-2" href="#" title="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens">Review s??ch {{$value->NewsName}}</h6>
                        <div class="line_3 line_1 h-auto">
                        {{$value->short_decription}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </article>
    </div>
</div>
<link rel="stylesheet" href="{{asset('./../public/frontend/css/style.css')}}">
@endsection