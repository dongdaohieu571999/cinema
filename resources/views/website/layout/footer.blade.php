<div class="footer">
    <div class="fott">
    <div class="inner">
        <p id="pageTop">
            <a href="#"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon-top.png') }}" alt=""></a>
        </p>
        <ul>
            <li><a href="/t/chinhsachmuave" class="active">Policy</a></li>
            <li><a href="/showtimes-lich-chieu-phim">Schedule</a></li>            
            <li><a href="/t/giave">Ticket Price</a></li>
            <li><a href="/hoi-dap-zone-z-9">FAQ</a></li>
            <li class="last"><a href="/contactus">Contact</a></li>
            

        </ul>
        <style type="text/css">
    .visit_online {
        color: #fff;
        width: 100%;
        text-align: center;
        margin:0 auto;
        /*display:table;*/
    }
   .visit_online dl{
    width:50%;
    display:table-cell;
    text-align:center;
    margin:0 auto;
   }
   .visit_online dd{
    padding-top:5px;
   }
   </style>

<div class="box_left">
   
                    <div class="clear"></div>
            </div>
        <div class="down">
            <a href="#"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img24.png') }}" alt=""></a>
            <a href="#"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img25.png') }}" alt=""></a>
        </div>
        
        <div class="link">
            <a href="#"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img26.png') }}" alt=""></a>
            <a href="https://www.facebook.com/chieuphimquocgiavn/"><img src="WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img27.png') }}" alt=""></a>
            <a href="#"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img28.png') }}" alt=""></a>

        </div>
    </div>
    <div class="clear"></div>
</div>


    
    <script type="text/javascript" src="{{ asset('WebsiteCSS/XScripts/public.footer.js') }}"></script>




</div>


    
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2388839731257302&autoLogAppEvents=1"></script>
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog1" role="document">
                <div class="modal-content">


                    <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="WebsiteCSS" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    <script type="text/javascript">
        $(document).ready(function () {
            videoSrc = '';
            $('div.play_trainer').on('click', function () {
                videoSrc = $(this).children('a').attr("data-src");
                $("iframe#video").attr('src', videoSrc + "?autoplay=1");
                console.log(videoSrc);
            });


            $('#myModal').on('shown.bs.modal', function () {
                $("iframe#video").attr('src', videoSrc + "?autoplay=1");
            });

            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("iframe#video").attr('src', $videoSrc);
            }) 

        });

    </script>
    <!-----------------------------videolightbox---------------->
    
    <!-----------------------------videolightbox---------------->
    <!-----------------------------videolightbox---------------->
</body>
</html>