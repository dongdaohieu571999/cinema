@extends('website.layout.index')

@section('content')

<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">

			<div class="item active" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/thanh-vat-cua-quy--c18-chi-tiet-film-9953">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/ThanhVatCuaQuy_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/15OhHurmgbI" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/titanic-(p--3d)-chi-tiet-film-9943">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/Titanic_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/nriaD_8Ktic" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/meo-beo-sieu-dang--p-(-long-tieng-)-chi-tiet-film-9913">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/MeoBeoSieuDang_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/ZVPsz9pO1Ag" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/hiep-si-mat-na-dai-chien-dau-truong-sinh-tu-chi-tiet-film-9956">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/DauTruongSinhTu_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <!-- <div class="play_trainer"> -->
                    <!-- <a class="video-btn video" data-toggle="modal" data-video="" data-target="#videoModal"><i class="icon-play"></i></a> -->
                    <!-- <div id="video-view"> -->
                    <!-- </div> -->
                <!-- </div> -->
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/avatar-2--2d-long-tieng-dong-chay-cua-nuoc-c13-chi-tiet-film-9904">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/Avatar2_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/q3dPNyAlCeY" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/nha-ba-nu-chi-tiet-film-9887">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/NhaBaNu_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/sKIOqcRjPYU" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
			
            <div class="item" style="margin:0px">
                <a href="https://chieuphimquocgia.com.vn/chi-chi-em-em-2-chi-tiet-film-9886">
                    <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/ChiChiEmEm2_Slider.jpg" alt="Chicago" style="margin:0px;">
                </a>
                <div class="play_trainer">
                    <a class="video-btn video" data-toggle="modal" data-video="https://www.youtube.com/embed/bd9gCumR8TY" data-target="#videoModal"><i class="icon-play"></i></a>
                    <div id="video-view">
                    </div>
                </div>
            </div>
	        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" style="margin-left: -100px;"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" style="margin-right: -100px;"></span>
        </a>

    </div>


    
<script type="text/javascript">
    $(document).ready(function () {
        $("#Films").change(function () {
            //$("#Date").empty();
            $.ajax({
                type: 'POST',
                url: '/Film/GetDate',
                dataType: 'json',
                data: { id: $("#Films").val() },
                success: function (dates) {
                    $.each(dates, function (i, date) {
                        $("#Date").append('<option value="' + date.Value + '">' + date.Text + '</option>');
                    });
                },
                error: function (ex) {
                    alert('Error' + ex);
                }
            })
            return false;
            })
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#Date").change(function () {
            //console.log("aaaaa");
            //$("#Plan").empty();
            $.ajax({
                type: 'POST',
                url: '/Film/GetPlan',
                dataType: 'json',
                data: { id: $("#Films").val(),projectDate: $("#Date").val() },
                success: function (plans) {
                    $.each(plans, function (i, plan) {
                        console.log(plan);
                        $("#Plan").append('<option value="' + plan.Value + '">' + plan.Text + '</option>');
                    });
                },

                error: function (ex) {
                    alert('Error' + ex);
                }
            })
            var planId = $("#Plan").val();
            return false;
            })
    });
</script>
<script>
    $(document).ready(function () {
        $('#Buy').click(function () {
            var planId = $('#Plan :selected').val();
            window.location.href = '/PlanScreenings/BookTicket?pId='+planId;
        });
    });
</script>


<img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img59.png" alt="" class="img-star hide-sp">
<div class="muave bot_block red_buy_bor hide-sp">
    <div class="title buy_red">TICKET BOOKING</div>
    <div class="phim bor_black">
<select id="Films" name="Films"><option value="">--Movie Select--</option>
<option value="9969">PHƯỢNG CH&#193;Y ( V&#201; MIỄN PH&#205;- C13)</option>
<option value="9968">CƠN GI&#212;NG ( V&#201; MIỄN PH&#205;- C16)</option>
<option value="9967">CH&#217;M PHIM HOẠT H&#204;NH VIỆT NAM ( V&#201; MIỄN PH&#205;- P)</option>
<option value="9966">B&#204;NH MINH ĐỎ ( V&#201; MIỄN PH&#205;- C13)</option>
<option value="9953">TH&#193;NH VẬT CỦA QUỶ- C18</option>
<option value="9954">MẤT T&#205;CH- C16</option>
<option value="9955">GI&#193;O SĨ QODRAT- C18</option>
<option value="9974">L&#218;C Đ&#211; T&#212;I Đ&#195; CHUYỂN SINH TH&#192;NH SLIME: M&#212;́I LI&#202;N K&#202;́T ĐỎ THẪM- C13</option>
<option value="9975">C&#218; M&#193;Y CHẾT CƯỜI- C16</option>
<option value="9970">NH&#192; TI&#202;N TRI ( V&#201; MIẾN PH&#205;- P)</option>
<option value="9951">Đ&#192;M PH&#193;N- C16</option>
<option value="9952">LẠC V&#192; T&#204;M- C16</option>
<option value="9949">B&#201; TI&#202;N RẮC RỐI- P</option>
<option value="9925">NGƯỜI KIẾN V&#192; CHIẾN  BINH ONG 2D/C13: Thế giới lượng tử</option>
<option value="9950">NGƯỜI KIẾN V&#192; CHIẾN BINH ONG 3D/C13: THẾ GIỚI LƯỢNG TỬ- C13</option>
<option value="9943">TITANIC ( C16 - 3D)</option>
<option value="9945">MUỐN GẶP ANH- C16</option>
<option value="9913">M&#200;O B&#201;O SI&#202;U ĐẲNG- P ( lồng tiếng )</option>
<option value="9914">X&#193;C ƯỚP ( lồng tiếng): CUỘC PHI&#202;U LƯU ĐẾN LONDON- P</option>
<option value="9886">CHỊ CHỊ EM EM 2- C18</option>
<option value="9887">NH&#192; B&#192; NỮ- C16</option>
<option value="9774">AVATAR 2 - 3D, PHỤ ĐỀ: D&#210;NG CHẢY CỦA NƯỚC-C13</option>
</select>
    </div>
    <div class="ngay bor_black">
        <select id="Date" name="Date"><option value="">--Day Select--</option>
</select>
    </div>
    <div class="suat bor_black">
        <select id="Plan" name="Plan"><option value="">--Show Select--</option>
</select>
    </div>
    <button class="bg_buy_red" id="Buy">Checkout</button>
</div>

<img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img29.png" alt="" class="img-star hide-sp">


    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:750px;margin:0 auto">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <iframe width="750" height="450" src="WebsiteCSS" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /end carousel -->


<div id="wrapper">
    <div class="content">
        <div class="banner-left hide-sp">
            
            
        </div>
        <div class="banner-right hide-sp">
            
            
        </div>
        <div class="inner">
            

<script type="text/javascript">

    $(document).ready(function () {
        $('#tab3,#tab2').css('opacity', 0);
        $('#tab3,#tab2').css('z-index', 0);
        $('#tab_1').click(function () {
            $('#tab2,#tab3,#tab4').css('opacity', 0);
            $('#tab2,#tab3,#tab4').css('z-index', 0);
            $('#tab_1').addClass('active icon32');
            $('#tab1').css('opacity', 1);
            $('#tab1').css('z-index', 3);
            $('#tab2,#tab_3,#tab_4').css('display', "none");
            $('#tab1').css('display',"contents");
            $('#tab_2,#tab_3,#tab_4').removeClass('active icon32');
            LoadMoviesByMode(0, 'tab1');


        });
        $('#tab_2').click(function () {

            $('#tab1,#tab3,#tab4').css('opacity', 0);
            $('#tab1,#tab3,#tab4').css('z-index', 0);
            $('#tab_2').addClass('active icon32');
            $('#tab2').css('opacity', 1);
            $('#tab2').css('z-index', 3);
            $('#tab1,#tab_3,#tab_4').css('display', "none");
            $('#tab2').css('display', "contents");
            $('#tab_1,#tab_3,#tab_4').removeClass('active icon32');
            LoadMoviesByMode(1, 'tab2');




        });
        $('#tab_3').click(function () {
            $('#tab2,#tab1').css('opacity', 0);
            $('#tab2,#tab1').css('z-index', 0);
            $('#tab_3').addClass('active icon32');
            $('#tab3').css('opacity', 1);
            $('#tab3').css('z-index', 3);
            $('#tab_2,#tab_1').removeClass('active icon32');
            LoadMoviesByMode(2, 'tab3');

        });
        $('#tab_4').click(function () {
            $('#tab2,#tab1,#tab3').css('opacity', 0);
            $('#tab2,#tab1,#tab3').css('z-index', 0);
            $('#tab_4').addClass('active icon32');
            $('#tab4').css('opacity', 1);
            $('#tab4').css('z-index', 3);
            $('#tab_2,#tab_1,#tab_3').removeClass('active icon32');
            LoadMoviesByMode(3, 'tab4');

        });
        //   setTimeout('LoadMoviesByMode(0,  "tab1");', 2000);
    });

    function LoadMoviesByMode(tab, container) {

        //alert(tab);
        if (typeof (tab) == 'undefined' || typeof (container) == 'undefined')
            return;

        var mode = "";
        switch (tab) {
        case 0:
            mode = "SHOWING";
            break;
        case 1:
            mode = "COMMING";
            break;
        case 2:
            mode = "EARLYSALES";
            break;

        case 3:
            mode = "FESTIVAL";
            break;
        }

        if (!(jQuery("#" + container).find('.movie_box').length>0)) {
            var url = "/Film/GetMovieListByMode?visMode=" + mode;
            jQuery.get(url, {}, function (data) {
                jQuery("#" + container).html(data);

                $(".t_"+container).mCustomScrollbar({
                    horizontalScroll: true,
                    scrollButtons: {
                        enable: true
                    },
                    theme: "dark-thin"
                });

        //   $(".content_movie_box a").prettyPhoto();

        $(".play_trainer").prettyPhoto();


            });
        }




    }
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        var url = "/Film/GetMovieListByMode?visMode=SHOWING" ;
        jQuery.get(url, {}, function (data) {
            jQuery("#tab1").html(data);
            //$('.t_tab1').mCustomScrollbar("destroy");
            //$(".t_tab1").mCustomScrollbar({
            //    horizontalScroll: true,
            //    scrollButtons: {
            //        enable: true
            //    },
                theme: "dark-thin"
            });
            //$(".play_trainer").prettyPhoto();

      
    });
</script>

<div class="menu-tab">
    <ul>
        <li class="tx_black"><a href="#tab1" id="tab_1" class="active icon32">NOW SHOWING</a></li>

        <li class="tx_black"><a href="#tab2" id="tab_2">COMING SOON</a></li>

        

    </ul>
    <p><a href="/showtimes-lich-chieu-phim">MORE <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon01.png" alt="icon"></a></p>
</div>
<div class="block-movie container-fluid container-fluid2">
    <div class="form_check_slider">
        <div class="t_tab1" id="tab1">

        </div>
        <div class="t_tab2" id="tab2">
        </div>
    </div>
        
    </div>

            <div class="menu-tab">
                <ul>
                    <li class="tx_black"><a href="https://chieuphimquocgia.com.vn/tin-tuc-zone-z-7" class="active title_flower">OFFERS</a></li>
                </ul>
                <p><a href="https://chieuphimquocgia.com.vn/tin-tuc-zone-z-7" class="more_pink">MORE <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon01.png" alt="icon"></a></p>
            </div>
            <div class="sale">

                <ul>
            <!-- <li>   <a href="https://chieuphimquocgia.com.vn/uu-dai-gia-ve-cho-hoc-sinh-sinh-vien-45000dve-2d-3">   <img src="https://chieuphimquocgia.com.vn/content/images/thumbs/0016636.png" style="width:395px;height:253px" /></a></li> -->
            <li>   <a href="https://chieuphimquocgia.com.vn/special-monday-dong-gia-45000dve-2d-thu-2-cuoi-thang-tu-0112023">   <img src="https://www.torchtheatre.co.uk/media/122318/special-offers-header.jpg" style="width:759px;height:253px" /></a></li>
</ul>


            </div>
            

            
            
        </div>
        <!-- <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/bg304_left.png" alt="" class="img55 hide-sp">
        <img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/bg304_right.png" alt="" class="img56 hide-sp"> -->
        
    </div>
</div>
<script>
    $(function () {
        $(".video").click(function () {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-video"),
                videoSRCauto = videoSRC + "?modestbranding=1&rel=1&controls=1&showinfo=1&html5=1&autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    });
</script>
<div class="clear"></div>



@endsection
    



