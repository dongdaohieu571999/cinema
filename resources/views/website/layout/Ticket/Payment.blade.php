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
                        <li class="tin3 ">
                            <a href="#" class="tin3"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin3.png')}}" alt=""></a>
                        </li>
                        <li class="tin4 active">
                            <a href="#" class="tin4"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin4.png')}}" alt=""></a>
                        </li>
                        <li class="tin5">
                            <a href="#" class="tin5"><img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/tin5.png')}}" alt=""></a>
                        </li>
                    </ul>
                    <ul class="hide-pc capnhattin-sp">
                    <li><a href="#">1.MOVIE SELECT</a></li>
                    <li><a href="#">2.SEAT SELECT</a></li>
                    <li><a href="#">3.BOOKING CONFIRMATION</a></li>
                    <li class="active"><a href="#">4.PAYMENT</a></li>
                    <li><a href="#">5.NOTIFICATION</a></li>
                    </ul>
                </div>
                <div class="tittle-page">
                    <h3>4. PAYMENT</h3>
                    <img src="{{ asset('/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon-thanhtoan.png')}}" alt="">
                </div>
<form action="/onepagecheckout" data-ajax="true" data-ajax-begin="return BeforeSumbit();" data-ajax-loading="#lean_overlay" data-ajax-method="Post" data-ajax-success="checkForRedirect(data)" id="form0" method="post" novalidate="novalidate">                    <div class="block-payment" style="height: 1441.3px;">
                        <div class="center-login marBot-capnhat">
                            <div class="form-payment">
                                
                                    <div class="title-pay">
                                        1. Your  Information
                                    </div>
                                    




  

<input data-val="true" data-val-number="The field Id must be a number." data-val-required="'Id' must not be empty." id="BillingNewAddress_Id" name="BillingNewAddress.Id" type="hidden" value="0">
<div class="title-information">
    <p>Email Address (<span>*</span>)</p>
    <input data-val="true" data-val-email="Định dạng hòm thư không đúng" data-val-required="Yêu cầu nhập hòm thư." id="BillingNewAddress_Email" name="BillingNewAddress.Email" type="text" value="">
    <span class="field-validation-valid" data-valmsg-for="BillingNewAddress.Email" data-valmsg-replace="true"></span>
    
</div>
<div class="row">
    <div class="col-md-6">
        <p>Full Name (<span>*</span>)</p>
        <input data-val="true" data-val-required="Yêu cầu nhập họ." id="BillingNewAddress_LastName" name="BillingNewAddress.LastName" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="BillingNewAddress.LastName" data-valmsg-replace="true"></span>
        
    </div>
   
</div>
    <div class="title-information">
        <p>Telephone (<span>*</span>)</p>
        <input data-val="true" data-val-required="Yêu cầu nhập số điện thoại" id="BillingNewAddress_PhoneNumber" name="BillingNewAddress.PhoneNumber" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="BillingNewAddress.PhoneNumber" data-valmsg-replace="true"></span>
        
    </div>
    
    <div class="text-last-information">
        <span>(*) Required Information</span>
    </div>


    
                                    <div class="title-pay">
                                        2. Payment Method
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="container-chose">
                                                <input id="paymentmethod_0" type="radio" name="paymentmethod" value="Payments.VNPay" class="paymentmethod">
                                                <span class="chose-pay"></span>
                                                <img src="/WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/cash_pay.png" height="50px" width="90px" alt="">
                                            </label>

                                        </div>


                                        

                                    </div>
                                 
                                    <table class="table table-payment">
    <thead>
        <tr>
            <th>Selected Seats</th>
            <th>Amount</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>K9,K8</td>
            <td>2</td>
            <td>130000 (VND)</td>
        </tr>
    </tbody>
</table>


                                  
                                    
                                    <div class="btn-thongbao form_dangki">
                                        <button class="btn-back" onclick="location.href='/PlanScreenings/BookTicket?pId=302973'">RETURN TO SEAT SELECT</button>
                                        <button class="btn-contact" type="submit" name="ctl00$cph1$btnPayment" value="" id="ctl00_cph1_btnPayment">CONTINUE</button>
                                    </div>
                                
                            </div>
                            <script>
                                $("input:checkbox").on('click', function () {
                                    // in the handler, 'this' refers to the box clicked on
                                    var $box = $(this);
                                    if ($box.is(":checked")) {
                                        // the name of the box is retrieved using the .attr() method
                                        // as it is assumed and expected to be immutable
                                        var group = "input:checkbox[name='" + $box.attr("name") + "']";
                                        // the checked state of the group/box on the other hand will change
                                        // and the current value is retrieved using .prop() method
                                        $(group).prop("checked", false);
                                        $box.prop("checked", true);
                                    } else {
                                        $box.prop("checked", false);
                                    }
                                });
                            </script>
                        </div>
                        
                    </div></form>
            </div>
           
        </div>
    </div>
@endsection