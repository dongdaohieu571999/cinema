<script type="text/javascript">
<!--
    function rightleftads() {
        if (1300 >= $(window).width()) {
            $('.rightleftads').hide();
        }
        else {
            $('.rightleftads').show();
        }
    }
    $(window).resize(function () {
        rightleftads();
    });
    rightleftads();
    //-->
</script>
<script>
    function FloatTopDiv() {
        startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust, startLY = TopAdjust + 80;
        startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust, startRY = TopAdjust + 80;
        var d = document;
        function ml(id) {
            var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            el.sP = function (x, y) { this.style.left = x + 'px'; this.style.top = y + 'px'; };
            el.x = startRX;
            el.y = startRY;
            return el;
        }
        function m2(id) {
            var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            e2.sP = function (x, y) { this.style.left = x + 'px'; this.style.top = y + 'px'; };
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }
        window.stayTopLeft = function () {
            if (document.documentElement && document.documentElement.scrollTop)
                var pY = document.documentElement;
            else if (document.body)
                var pY = document.body;
            if (document.body.scrollTop > 30) { startLY = 3; startRY = 3; } else { startLY = TopAdjust; startRY = TopAdjust; };
            ftlObj.y += (pY + startRY - ftlObj.y) / 16;
            ftlObj.sP(ftlObj.x, ftlObj.y);
            ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            setTimeout("stayTopLeft()", 1);
        }
        ftlObj = ml("divAdRight");
        //stayTopLeft();
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
    function ShowAdDiv() {
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");

        if (document.body.clientWidth < 1016) {
            if (objAdDivRight != null) {
                objAdDivRight.style.display = "none";
                objAdDivLeft.style.display = "none";
            }
        }
        else {
            if (objAdDivRight != null) {
                objAdDivRight.style.display = "block";
                objAdDivLeft.style.display = "block";
            }
            //FloatTopDiv();
        }
    }
</script>
<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1016;LeftBannerW = 150;RightBannerW = 130;LeftAdjust = 0;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();<\/script>");
</script>

 <script type="text/javascript">
        //AjaxCart.init(false, '.header-links .cart-qty', '.header-links .wishlist-qty', '#flyout-cart');
    </script>

<div id="dialog-notifications-success" title="Notification" style="display:none;">
</div>
<div id="dialog-notifications-error" title="Error" style="display:none;">
</div>




<div class="header">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<link href="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/css/library.meanmenu.css" rel="stylesheet" />

<link href="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/css/jquery.bxslider.css" rel="stylesheet" />
<link href="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/css/style.css" rel="stylesheet" />
<link href="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/css/smart.css" rel="stylesheet" />

<script src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/js/jquery.js"></script>
<script src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/js/jquery.meanmenu.js"></script>
<script src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/js/slick.min.js"></script>
<div class="header header_home">
    

    
<div class="inner">
    <a href="/" class="f-left"><img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/logo_home.png" alt="" style="width:100px;height:100px"></a>
    
    
    <div class="right">
        <span>
                <span>
                    <a href="" type="button" class="active" data-toggle="modal" style="font-size:14px">Hi, {{session('user')}}</a>
                    <a href="{{ route ('logout') }}" type="button" data-toggle="modal" style="font-size:14px">Logout</a>
                </span>
        </span><br>
               <div class="hotline">
                   <span><i class="fas fa-phone fa-flip-horizontal" style="color:red"></i> <span style="color:red">Hotline:</span><span class="tx_black"> 024.35141791</span></span>
                   
               </div>
    </div>
    <div class="clear"></div>
</div>
 
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/js/jquery.js"></script>
<script src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/js/jquery.meanmenu.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




</div>
<div id="globalNavi" class="mainNav menu menu_home">
    <div class="inner">
        
<ul class="mainMenu">
    <li><a href="/" class="active pink_tx first-child">HOMEPAGE</a></li>
    <li><a href="/gioi-thieu-zone-z-1" style="font-weight:700">INTRODUCTION</a></li>
    <li><a href="/showtimes-lich-chieu-phim">SCHEDULE</a></li>
    <li><a href="/tin-tuc-zone-z-7">OFFERS<span style="color:red;font-size:18px;"> *</span></a></li>
    <li><a href="/t/giave">TICKET PRICE</a></li>
    <li class="last"><a href="http://cskh.chieuphimquocgia.com.vn">MEMBERS</a></li>
    
</ul>
        <div class="button_mua button_mua_home">
            <a href="/PlanScreenings/Sessiontimes"><img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/ticket.png" alt=""> TICKET BOOKING </a>
        </div>
    <input  type="hidden" id="hidden-cutomerid" value="0"/>

    </div>
</div>