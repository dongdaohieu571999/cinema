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
                        <a href="#" class="tin2"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin2-selected.png')}}" alt=""></a>
                    </li>
                    <li class="tin3 ">
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
                    <li>1.MOVIE SELECT</li>
                    <li class="active"><a href="#">2.SEAT SELECT</a></li>
                    <li><a href="#">3.BOOKING CONFIRMATION</a></li>
                    <li><a href="#">4.PAYMENT</a></li>
                    <li><a href="#">5.NOTIFICATION</a></li>
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
            



                <div class="line-ghe">
                    <p class="tx-lf">A</p>
                    <ul> 
                    @foreach ($seats_rowA as $seatA)
                                           
                        <a title="{{$seatA->seat_number}}" class="seat preview  8 distance_seat" id="{{$seatA->seat_id}}" onclick="onClick_ChooseChair('{{$seatA->seat_id}}','{{$show->show_id}}')"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" class="preview"><span class="number_seat">{{$seatA->seat_number}}</span></a>
                    
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">A</p>
                    <br></br>
                    <p class="tx-lf">B</p>
                    <ul> 
                    @foreach ($seats_rowB as $seatB)
                                           
                        <a title="{{$seatB->seat_number}}" class="seat preview  8 distance_seat" id="1__0_0_" onclick="onClick_ChooseChair('1__0_0_','8','303001','1','[0:0]','A14')"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" class="preview"><span class="number_seat">{{$seatB->seat_number}}</span></a>
                    
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">B</p>
                    <br></br>
                    <p class="tx-lf">C</p>
                    <ul> 
                    @foreach ($seats_rowC as $seatC)
                                           
                        <a title="{{$seatC->seat_number}}" class="seat preview  8 distance_seat" id="1__0_0_" onclick="onClick_ChooseChair('1__0_0_','8','303001','1','[0:0]','A14')"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" class="preview"><span class="number_seat">{{$seatC->seat_number}}</span></a>
                    
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">C</p>
                    <br></br>
                    <p class="tx-lf">D</p>
                    <ul> 
                    @foreach ($seats_rowD as $seatD)
                                           
                        <a title="{{$seatD->seat_number}}" class="seat preview  8 distance_seat" id="1__0_0_" onclick="onClick_ChooseChair('1__0_0_','8','303001','1','[0:0]','A14')"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/0000194_ghe-thuong.jpg')}}" class="preview"><span class="number_seat">{{$seatD->seat_number}}</span></a>
                    
                    @endforeach
                    </ul>                    
                    <p class="tx-lf">D</p>
                </div>
                <div class="clear"></div>
                
                <div class="clear"></div>
        </div>

                <div class="right-checkmovie">
                    <button class="title-movie" onclick="location.href='/showtimes-lich-chieu-phim'" style="background:#ffffff08">RESELECT MOVIE </button>
                    <img src="{{ asset('AdminCSS/Movie_Banner/'.$show->mid->movie_banner) }}" alt="" style="width:176px;height:260px;">
                    

                    <div class="order_cart_list_1">
       <table>
           <tbody>
               <tr>
                   <td>Selected Seats:</td>
                   <td class="tx-yel">K4,K5</td>
               </tr>
                <tr>
                 <td class="line">Amount:</td>
                 <td class="tx-yel tx-right line">2</td>
               </tr>
               <tr>
                   <td class="tx-big">Total:</td>
                   <td class="tx-yel tx-big">130.000 VNĐ</td>
               </tr>
              </tbody>
         </table>
         <input type="button" id="btn-ao-continue" name="checkout" value="Checkout" class="btn-ao-continue">
    <script type="text/javascript">
        jQuery(document).ready(function () {
              jQuery('#btn-ao-continue').click(function () {
                var _url = '/ShoppingCart/StartCheckout';
                if ($isProcess == true) {
                    alert("Xin bạn chờ đợi trong giấy lát hệ thống  đang thực hiện giao dịch trước đó của bạn");
                    return false;
                }
                  $isProcess = true;
                  jQuery.get(_url, function (data) {
                      $isProcess = false;
                     if (data != undefined && data.redirect) {
                         location.href = data.redirect;
                     }
                     else {
                         location.href = '/checkout';
                  }
              });
             });
        });</script></div>



  
                </div>
            </div>
        </div>
      
    </div>
</div>

@endsection