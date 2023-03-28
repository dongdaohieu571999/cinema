@extends('website.layout.index')

@section('content')

<div id="wrapper">
    <div class="content bg_content">
        <div class="banner-left hide-sp">
            
            
        </div>
        <div class="banner-right hide-sp">
            
            
        </div>
        <div class="inner">
            <div class="tittle-page">
                <h3 class="title-page8-3">NOW SHOWING</h3>
                <img src="/Themes/RapChieuPhim/Content/content.v2/images/img48.png" alt="">
            </div>
            <div class="tab-date">


                    <ul>


                            <li itemid="22/03/2023 12:00:00 SA" class="viewmoredate" tabindex="0" id="first_scheudle"><span>Thứ Tư - 22/03/2023</span></li>
                            <div class="more_0"><div class="">
        <div class="block-view">
            <div class="movie-check">
                <img src="/Content/Images/0016812_0.jpeg" style="width:176px;height:260px;">
                <div class="movie-cont">
                    <h3><a href="/tim-nha-cho-boss--p-chi-tiet-film-9986" style="color:black"><b>$movie->name </b></a>
                        
                        <span>2D</span>
                    </h3>
                    <p class="tx-moive">
                        
                        <b>Duration:</b> $movie->duration m<br>
                        <b>Actors:</b> $movie->actors <br>
                        <b>Director:</b> $movie->directors <br>
                        <b>Premiere:</b> $movie->premiere<br>
                                            </p>
                    <div class="mar-top">
                        <ul>
                                  <li><a class="bor_pink" href="/PlanScreenings/BookTicket?pId=303001" style="color:black;">09:20</a></li>
                                  <li><a class="bor_pink" href="/PlanScreenings/BookTicket?pId=303003" style="color:black;">13:15</a></li>
                                  <li><a class="bor_pink" href="/PlanScreenings/BookTicket?pId=303005" style="color:black;">17:10</a></li>
                                  <li><a class="bor_pink" href="/PlanScreenings/BookTicket?pId=302977" style="color:black;">20:30</a></li>
                                  <li><a class="bor_pink" href="/PlanScreenings/BookTicket?pId=302978" style="color:black;">22:30</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
       
                    <ul>


                            <li itemid="23/03/2023 12:00:00 SA" class="viewmoredate" tabindex="1"><span>Thứ Năm - 23/03/2023</span><span>Click vào đây để xem chi tiết</span></li>
                            <div class="more_1">

                            </div>


                    </ul>
            </div>
        </div>

    </div>
        
    </div>

@endsection