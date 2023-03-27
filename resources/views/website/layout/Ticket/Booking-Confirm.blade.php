@extends('website.layout.index')

@section('content')
<div id="wrapper">
        <div class="content">
            <div class="banner-left hide-sp">
                
                
            </div>
            <div class="banner-right hide-sp">
                
                
            </div>
            <div class="inner">
                <div class="title_capnhattin">
                    <ul class="capnhattin hide-sp">
                        <li class="tin1">
                            <a href="#" class="tin1"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin1.png')}}" alt=""></a>
                        </li>
                        <li class="tin2">
                            <a href="#" class="tin2"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin2.png')}}" alt=""></a>
                        </li>
                        <li class="tin3 active">
                            <a href="#" class="tin3"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin3.png')}}" alt=""></a>
                        </li>
                        <li class="tin4">
                            <a href="#" class="tin4"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin4.png')}}" alt=""></a>
                        </li>
                        <li class="tin5">
                            <a href="#" class="tin5"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin5.png')}}" alt=""></a>
                        </li>
                    </ul>
                    <ul class="hide-pc capnhattin-sp">
                        <li><a href="#">1.MOVIE SELECT</a></li>
                        <li><a href="#">2.SEAT SELECT</a></li>
                        <li class="active"><a href="#">3.BOOKING CONFIRMATION</a></li>
                        <li><a href="#">4.PAYMENT</a></li>
                        <li><a href="#">5.NOTIFICATION</a></li>
                    </ul>
                </div>
                <div class="tittle-page">
                    <h3>3. BOOKING CONFIRMATION</h3>
                    <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon09.png')}}" alt="">
                </div>
                <div class="block-capnhat">
                    <div class="center-login marBot-capnhat">
                        <div class="right_title">
                            Your Booking
                        </div>
                        

                        

                        <div class="form_dangki">
                        <form action="/login/checkoutasguest?returnUrl=%2Fcheckout" method="post" novalidate="novalidate">                                

                                        <div class="email">
                                            Movie
                                            <input readonly  autofocus="autofocus " id="Email" name="movie" type="text" value="{{$show->mid->name}}" class="valid">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            
                                        </div>

                                        <div class="email">
                                            Hall
                                            <input readonly  autofocus="autofocus " id="Email" name="hall" type="text" value="{{$show->hallid->hall_name}}" class="valid">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            
                                        </div>

                                        <div class="email">
                                            Showtime
                                            <input readonly  autofocus="autofocus " id="Email" name="hall" type="text" value="{{$show->stt_time}} {{$show->showdate}}" class="valid">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            
                                        </div>

                                        <div class="email">
                                            Seats
                                            <input readonly  autofocus="autofocus " id="selectedSeats" name="selectedSeats" type="text" value="" class="valid">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            
                                        </div>

                                        <div class="email">
                                            Total
                                            <input readonly  autofocus="autofocus " id="totalPrice" name="totalPrice" type="text" value="" class="valid">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            
                                        </div>
                                  
                                   <script>
                                      // Get selected seats and total price from URL parameters
                                      const urlParams = new URLSearchParams(window.location.search);
                                        const selectedSeats = urlParams.get("seats").split(",");
                                        const totalPrice = urlParams.get("price").split(",")

                                        // Create comma-separated string of selected seats
                                        const seatNumbers = selectedSeats.map(seat => seat.id).join(', ');

                                        // Display selected seats and total price
                                        const selectedSeatsDisplay = document.getElementById('selectedSeats');
                                        selectedSeatsDisplay.value = seatNumbers;
                                        const totalPriceDisplay = document.getElementById('totalPrice');
                                        totalPriceDisplay.value = `${totalPrice.toFixed(2)}VND`;
                                   </script>

                                    
                                    <div class="btn-thongbao form_dangki">
                                        <button class="btn-back" onclick="location.href='/PlanScreenings/BookTicket?pId=302973'">RETURN TO SEAT SELECT</button>
                                        <button class="btn-contact" type="submit" name="ctl00$cph1$btnPayment" value="" id="ctl00_cph1_btnPayment">CONTINUE TO PAYMENT</button>
                                    </div>
                                    
                                    

                                </form>
                        
                            
                            </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection