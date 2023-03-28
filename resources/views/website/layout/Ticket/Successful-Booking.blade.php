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
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin3.png')}}" alt=""></a>
                        </li>
                        <li class="tin4">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin4.png')}}" alt=""></a>
                        </li>
                        <li class="tin5">
                            <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin5-selected.png')}}" alt=""></a>
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
                    <h3>5. NOTIFICATION</h3>
                    <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon-thanhtoan.png')}}" alt="">
                </div>
<form action="/onepagecheckout" data-ajax="true" data-ajax-begin="return BeforeSumbit();" data-ajax-loading="#lean_overlay" data-ajax-method="Post" data-ajax-success="checkForRedirect(data)" id="form0" method="post" novalidate="novalidate">                    <div class="block-payment" style="height: 1441.3px;">
                        <div class="center-login marBot-capnhat">
                            <div class="form-payment">
                                
                                    <div class="title-pay">
                                        Congratulations!
                                    </div>
                                    




  

<div class="title-information">
    <p> Your Booking has been successfully sent! We will send a confirmation message to your email and phone number. </p>
    <p> Thank you for choosing us! </p>    
</div>

                                  
                                    
                                    <div class="btn-thongbao form_dangki">                                        
                                        <button class="btn-contact" type="submit" name="ctl00$cph1$btnPayment" value="" id="ctl00_cph1_btnPayment"><a href="/">Return to Homepage</a></button>
                                    </div>
                                
                            </div>
                            
                        </div>
                        
                    </div></form>
            </div>
           
        </div>
    </div>
@endsection