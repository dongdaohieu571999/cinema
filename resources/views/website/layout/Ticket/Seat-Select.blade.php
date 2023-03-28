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
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin2-selected.png')}}" alt=""></a>
                    </li>
                    <li class="tin3 ">
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin3.png')}}" alt=""></a>
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
                <h3>2. SEAT SELECT</h3>
                <!-- debug thêm phòng chiếu -->
                <img src="images/icon11.png" alt="">
                @csrf
                <p>SELECTED MOVIE: <span>{{ $show->mid->name }}</span></p><br>
                <strong>HALL : <span>{{ $show->hallid->hall_name }}</span></strong> <br>
                <strong>SHOW TIME : <span>{{ $show->stt_time }} {{ $show->showdate }}</span></strong> <br>
            </div>
            <div class="block-chonghe">
                

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".room_box_seat").each(function () {
                var $rowLength = jQuery(this).find("div.seat_line:first").find("a").length;
                jQuery(this).find("div.seat_line").attr("style", "width:" + ($rowLength * 25) + "px");
            });
        })
    </script>
        <div class="room_floor">
         
        </div>
        <div class="left-checkghe">
            <p>
                
                Please select seat based on the icons<br>
                Click again on the selected seat to cancel the seat selection<br>
                <span style="color:red">Seatmap displays at its best in landscape mode on mobile devices</span>
            </p>
           
            <ul class="list-ghe">
                <li><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" alt=""> Available Seats </li>
                <li><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_active.png')}}" alt=""> Selected Seats</li>
                <li><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_lock.png')}}" alt=""> Unavailable Seats</li>
            </ul>
            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img49.png')}}" alt="" class="img-center">
            

           



                <div class="line-ghe" id="seatingChart">
                    <p class="tx-lf">A</p>
                    <ul> 
                    
                    @foreach ($seats_rowA as $seatA)
                        
                    <?php $seatNumberA = $seatA->seat_row . $seatA->seat_number; ?>
                        @if (in_array($seatNumberA, $bookingSeatNumbers))    
                           
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_lock.png')}}"/><span class="number_seat">{{$seatA->seat_number}}</span>
                        
                        @else
                        <a title="{{$seatA->seat_number}}"  data-seat="{{$seatA->seat_row}}{{$seatA->seat_number}}" data-price="70000" class="seat available seat preview  8 distance_seat" id="{{$seatA->seat_id}}" ><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" id="imgClickAndChange{{$seatA->seat_number}}" onclick="changeImage(this)"/><span class="number_seat">{{$seatA->seat_number}}</span></a>
                        <script>                            
                            function changeImage(image) {
                                if (image.src == "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}"){
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_active.png')}}";
                                } else {
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}";
                                }
                            }                       
                        </script>
                        @endif  
                    @endforeach
                    </ul>      
                               
                    <p class="tx-lf">A</p>
                    <br></br>
                    <p class="tx-lf">B</p>
                    <ul>    
                    @foreach ($seats_rowB as $seatB)
                        
                    <?php $seatNumberB = $seatB->seat_row . $seatB->seat_number; ?>
                        @if (in_array($seatNumberB, $bookingSeatNumbers))    
                            
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_lock.png')}}"/><span class="number_seat">{{$seatB->seat_number}}</span>
                        
                        @else
                        <a title="{{$seatB->seat_number}}" data-seat="{{$seatB->seat_row}}{{$seatB->seat_number}}" data-price="70000" class="seat available seat preview  8 distance_seat" id="{{$seatB->seat_id}}" ><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" id="imgClickAndChange{{$seatB->seat_number}}" onclick="changeImage(this)"/><span class="number_seat">{{$seatB->seat_number}}</span></a>
                        <script>                            
                            function changeImage(image) {
                                if (image.src == "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}"){
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_active.png')}}";
                                } else {
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}";
                                }
                            }                       
                        </script>
                        @endif  
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">B</p>
                    <br></br>
                    <p class="tx-lf">C</p>
                    <ul> 
                    @foreach ($seats_rowC as $seatC)
                    <?php $seatNumberC = $seatC->seat_row . $seatC->seat_number; ?>
                        @if (in_array($seatNumberC, $bookingSeatNumbers))    
                            
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_lock.png')}}"/><span class="number_seat">{{$seatC->seat_number}}</span>
                        
                        @else
                                           
                        <a title="{{$seatC->seat_number}}" data-seat="{{$seatC->seat_row}}{{$seatC->seat_number}}" data-price="70000" class="seat available seat preview  8 distance_seat" id="{{$seatC->seat_id}}" ><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" id="imgClickAndChange{{$seatC->seat_number}}" onclick="changeImage(this)"/><span class="number_seat">{{$seatC->seat_number}}</span></a>
                        <script>                            
                            function changeImage(image) {
                                if (image.src == "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}"){
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_active.png')}}";
                                } else {
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}";
                                }
                            }                       
                        </script>

                        @endif
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">C</p>
                    <br></br>
                    <p class="tx-lf">D</p>
                    <ul> 
                    @foreach ($seats_rowD as $seatD)
                        
                        <?php $seatNumberD = $seatD->seat_row . $seatD->seat_number; ?>
                        @if (in_array($seatNumberD, $bookingSeatNumbers))    
                            
                        <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_lock.png')}}"/><span class="number_seat">{{$seatD->seat_number}}</span>
                        
                        @else
                                           
                        <a title="{{$seatD->seat_row}}{{$seatD->seat_number}}" data-price="70000" data-seat="{{$seatD->seat_row}}{{$seatD->seat_number}}"  class="seat available seat preview  8 distance_seat" id="{{$seatD->seat_id}}" ><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" id="imgClickAndChange{{$seatD->seat_number}}" onclick="changeImage(this); selected_seats()"  /><span class="number_seat">{{$seatD->seat_number}}</span></a>
                        <script>                            
                            function changeImage(image) {
                                if (image.src == "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}"){
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/seat_active.png')}}";
                                } else {
                                    image.src = "{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}";
                                }
                            }        
                            
                            function selected_seats(){
                                const selected_seats = document.getElementbyId('selected_seats');                                
                                document.getElementbyId("{{$seatD->seat_id}}").title = selected_seats.innerText;
                            }
                        </script>

                        @endif
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">D</p>
                </div>
                <script>
                  const seatElements = document.querySelectorAll('.seat');
                    seatElements.forEach(seat => {
                        seat.addEventListener('click', () => {
                        // Toggle seat selection
                        seat.classList.toggle('selected');
                        seat.classList.toggle('available');
                        
                        // Update selected seat display
                        const selectedSeats = document.querySelectorAll('.seat.selected');
                        const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.dataset.seat).join(',');
                        const selectedSeatsDisplay = document.getElementById('selectedSeats');
                        const totalPriceDisplay = document.getElementById('totalPrice');
                        const selectedSeatPrices = Array.from(selectedSeats).map(seat => parseFloat(seat.dataset.price)).filter(price => !isNaN(price));
                        const totalPrice = selectedSeatPrices.reduce((sum, price) => sum + price, 0);
                        selectedSeatsDisplay.innerHTML = ` ${selectedSeatNumbers}`;
                        totalPriceDisplay.innerHTML = ` ${totalPrice} VND `;
                        
                         // Store selected seats and total price in local storage
                        localStorage.setItem('selectedSeats', selectedSeatNumbers);
                        localStorage.setItem('totalPrice', totalPrice);
                        
                        });
                    });                    
                    
                  
                </script>
           
                <div class="clear"></div>
                
                <div class="clear"></div>
        </div>

                <div class="right-checkmovie">
                    <button class="title-movie" onclick="location.href='/'" style="background:#ffffff08">RESELECT MOVIE </button>
                    
                    <img src="{{ asset('AdminCSS/Movie_Banner/'.$show->mid->movie_banner) }}" alt="" style="width:176px;height:260px;">
                    <div class="order_cart_list_1">
                        <table>
                            <tr>                                
                                <td>Selected Seats:</td>
                                <td class="tx-yel" id="selectedSeats"></td>
                            </tr>
                            <tr>                                
                                <td>Total Price:</td>
                                <td class="tx-yel" id="totalPrice"></td>
                            </tr>
                        </table>
                    </div>
                    

                    <div class="order_cart_list_1">
       @csrf
         <button id="bookButton" name="checkout" class="btn-ao-continue"><a href="{{ route('show.checkout', $show->show_id) }}">Checkout</a></button>
        
        </div>



  
                </div>
            </div>
        </div>
      
    </div>
</div>

@endsection