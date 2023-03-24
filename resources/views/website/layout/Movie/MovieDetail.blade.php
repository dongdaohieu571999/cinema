@extends('website.layout.index')

@section('content')

<div id="wrapper">
    <div class="content">
        <div class="inner">
            <div class="tittle-page">
                <h3>MOVIE DETAIL</h3>
                <img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/img31.png') }}" alt="">
            </div>
            <div class="tab-news2">
                <ul>
                    
                </ul>

            </div>
            <div class="phimdangchieu_content">
                <div class="header_phimdangchieu">
                    <div class="left_phimdangchieu_content">
                        <img src="{{ asset('AdminCSS/Movie_Banner/'.$selected_movie->movie_banner) }}" alt="{{$selected_movie->name}}" style="width:176px;height:260px;">
                    </div>
                    <div class="right_phimdangchieu_content">
                        <div class="title_phimdangchieu_content">
                            {{$selected_movie->name}}
                        </div>
                        <div class="col1_right_phimdangchieu_content">
                            <p>
                                <strong>Genres:</strong> {{$selected_movie->genre}} <br>
                                <strong>Duration:</strong> {{$selected_movie->duration}} <br>
                                <strong>Actors:</strong> {{$selected_movie->actors}} <br>
                                <strong>Director:</strong> {{$selected_movie->director}} <br>
                                <strong>Premiere:</strong> {{$selected_movie->premiere}} <br>

                            </p>
                                <button class="btn-muave" onclick="window.location.href='/PlanScreenings/Sessiontimes?filmId=9926'">TICKET</button>
                        </div>
                        <div class="col2_right_phimdangchieu_content">
                            <p>
                                {{$selected_movie->description}}
                            </p>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="table_binhluan">
                    <div class="menu-table">
                        <ul role="tablist">
                            <li role="presentation" class="active"><a href="#schedule" aria-controls="schedule" role="tab" data-toggle="tab" class="active"><img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon06.png')}}" alt=""> SCHEDULE </a></li>
                            <li role="presentation" class="rol2"><a href="#other1" aria-controls="other1" role="tab" data-toggle="tab"> <img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon08.png')}}" alt=""> TRAILER </a></li>
        
                            <li role="presentation" class="rol2"><a href="#other2" aria-controls="other2" role="tab" data-toggle="tab"> <img src="{{ asset('WebsiteCSS/Themes/RapChieuPhim/Content/content.v2/images/icon08.png')}}" alt=""> OTHER MOVIES</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">

                        <section role="tabpanel" class="tab-pane active" id="schedule" style="height: 250px;">
                            <div class="movie-detail-list row">
                                <div class="movie-detail-list__item">
                                            @foreach ($selected_movie_show as $show)
                                            <p class="showtime__day">{{$show->showdate}}</p>
                                            <div class="showtime">
                                                <ul class="showtime__list">
                                                    <li class="showtime__list__item">
                                                        <span><a href="{{route('seat.select', $show->show_id)}}">{{$show->stt_time}}</a></span>
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="movie-detail-type">
                                                    <div class="type-2d"><span>2D</span></div>
                                            </div>
                                            <br>
                                            @endforeach
                                </div>
                            </div>
                        </section>

                        <div role="tabpanel" class="tab-pane" id="other1">
                            <br></br>
                        <div><center><iframe width="756" align="center" height="424" src="https://www.youtube.com/embed/{{$selected_movie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center></div>
                            <br></br>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="other2">
                            <div class="cacphimkhac">
                            <script type="text/javascript">
    $(function () {
        $('.date_select').each(function (index) {
            var cmd = $(this);
            var _filmId = $('#fiml_id_' + index).val();
            var _date = $(this).val();
            var url = '/Film/LoadLichChieuPhim?filmId=' + _filmId + '&projectDate=' + _date;
            cmd.change(function () {

                //  alert('Hello word' + _filmId + _date);



            });

            $.get(url, function (data) {
                $('#session_time_' + index).html(data);
            });
        });
    });
</script>
                @foreach ($nowshowing_movies as $movie)
                <div class="left_cacphimkhac" style="margin-bottom: 50px;">
                    <div class="avatar_phimkhac">
                        <a href="{{ route('movie.detail', $movie->m_id) }}"><img src="{{ asset('AdminCSS/Movie_Banner/'.$movie->movie_banner) }}" alt="Picture of {{$movie->name}}" title="Show details for {{$movie->name}}" style="width:170px;height:260px;"></a>
                    </div>
                    <div class="content_phimkhac">
                        <div class="title_phimkhac">
                            <a href="{{ route('movie.detail', $movie->m_id) }}" style="color:black;font-size:85%;">{{$movie->name}}</a>
                        </div>
                        <div class="description_phimkhac">
                            <strong>Genres:</strong> {{$movie->genre}} <br>
                            <strong>Duration:</strong> {{$movie->duration}} <br>
                            <strong>Actors:</strong> {{$movie->actors}} <br>
                            <strong>Director:</strong> {{$movie->director}} <br>
                            <strong>Premiere:</strong> {{$movie->premiere}} <br>
                        </div>
                        <br>
                       
                            <button class="btn-muave" style="background-color:red; border:1px;width:100px;height:30px" onclick="window.location.href='/PlanScreenings/Sessiontimes?filmId=9926'">TICKET</button>
                    </div>
                </div>
                @endforeach
               


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="width:750px;margin:0 auto">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <iframe width="750" height="450" src="" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-left hide-sp">
            
        </div>
        <div class="banner-right hide-sp">
            
        </div>
        <div class="inner">

        </div>
        <!-- <img src="images/bg02.png" alt="" class="bg02 hide-sp">
        <img src="images/bg03.png" alt="" class="bg03 hide-sp"> -->
		
        
    </div>
</div>

@endsection
