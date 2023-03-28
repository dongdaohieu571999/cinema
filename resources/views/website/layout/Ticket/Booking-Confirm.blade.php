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
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin1.png')}}" alt="">
                        </li>
                        <li class="tin2">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin2.png')}}" alt=""></a>
                        </li>
                        <li class="tin3 ">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin3-selected.png')}}" alt=""></a>
                        </li>
                        <li class="tin4">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin4.png')}}" alt=""></a>
                        </li>
                        <li class="tin5">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin5.png')}}" alt=""></a>
                        </li>
                    </ul>
                    <ul class="hide-pc capnhattin-sp">
                        <li>1.MOVIE SELECT</li>
                        <li class="active">2.SEAT SELECT</a></li>
                        <li>3.BOOKING CONFIRMATION</a></li>
                        <li>4.PAYMENT</a></li>
                        <li>5.NOTIFICATION</a></li>
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
                        <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
                            @csrf                                
                            <div class="email">
                                Full Name
                                <input readonly  autofocus="autofocus " id="Email" name="user_fullname" type="text" value="{{Auth::user()->full_name}}"  class="valid"></input>
                                <input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                
                            </div>


                            <div class="email">
                                Movie
                                <input readonly  autofocus="autofocus " id="Email" name="movie" type="text" value="{{$show->mid->name}}" class="valid">
                                <input type="hidden" name="show_id" value="{{$show->show_id}}">
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
                                <input readonly  autofocus="autofocus " id="selectedSeats" name="seat_number" type="text" value="" class="valid">
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                
                            </div>

                            <div class="email">
                                Total
                                <input readonly  autofocus="autofocus " id="totalPrice" name="total_price" type="text" value="" class="valid">
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                
                            </div>
                                  
                                   <script> 
                                     // Retrieve selected seats and total price from local storage
                                        const selectedSeatNumbers = localStorage.getItem('selectedSeats');
                                        const totalPrice = localStorage.getItem('totalPrice');

                                        // Display selected seats and total price on next page
                                        const selectedSeatsDisplay = document.getElementById('selectedSeats');
                                        const totalPriceDisplay = document.getElementById('totalPrice');
                                        selectedSeatsDisplay.value = ` ${selectedSeatNumbers} `;
                                        totalPriceDisplay.value = ` ${totalPrice} VND `;
                                   </script>

                                    
                                    <div class="btn-thongbao form_dangki">
                                        <a href="/" class="btn-back">CANCEL</a>
                                        <button class="btn-contact" type="submit" name="ctl00$cph1$btnPayment" value="" id="ctl00_cph1_btnPayment">CONTINUE TO PAYMENT</button>
                                    </div>

                                    <script>
                                        function goBack() {
                                        window.history.back();
                                        }
                                    </script>
                                    
                                    

                                </form>
                        
                            
                            </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection