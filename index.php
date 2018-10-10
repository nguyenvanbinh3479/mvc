<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="public/img/icons/logo.png">
        <link rel="stylesheet" href="public/css/index/styles.css">
        <meta http-equiv="Content-Language" content="vi">
        <meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">     
		<link rel="stylesheet" href="public/css/index/bootstrap.min.css">
		<script src="public/js/jquery-3.3.1.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <!-- <script src="public/js/disable-copy.js"></script> -->
        <title>M.S.C - Home</title>
    </head>
    <body>
        <!--A Begin box header-->
        <div class="box-header" id="header">
            <div class="wrap">
                <div class="content-wrap">
                    <a class="logo" href="index.html"></a>
                    <div class="menu-subdomain">
                        <a href="index.html" class="active">MUSIC</a>
                        <a href="videos.html" target="_blank">VIDEO</a>
                    </div>
                      <div id="box_search_quick" class="box_search">
                        <div class="bg-top-noel"></div>
                        <form id="formSearchQuick" method="GET" action="tim-kiem" onsubmit="return NCTQuickSearch.buttonSearchProcess();">
                            <input id="txtSearch" maxlength="45" name="q" type="text" class="i-search" value="" rel="Tìm bài hát, video, playlist, ca sĩ" autocomplete="off">                    
                            <input id="btnSearch" type="submit" class="b-search" value="SEARCH">
                            <div class="list-keyword" id="divHotKeyword">                            
                            </div>
                        </form>
                        <div id="divSuggestion" class="hideShowCase suggestion" m="0">                        
                            <div style="float:left; width:346px; max-height: 450px;">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 0px;"><div id="idScrllSuggestion" style="overflow: hidden; width: auto; height: 0px;">
                                    <ul id="contentSuggestion" class="content_search" style="text-transform:capitalize;"></ul>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>
                        </div>
                    </div>
					<div class="follow">
						<a href="https://www.youtube.com/channel/UCf0SS3m2zdRtfaAgnr5kIBw/?sub_confirmation=1">
							<img src="public/img/icons/youtube.png" alt="">
						</a>
						<a href="http://123link.pw/WV3BLpxl">
							<img src="public/img/icons/facebook.png" alt="">
						</a>
						<a href="http://123link.pw/EKl2z">
							<img src="public/img/icons/google.png" alt="">
						</a>
						<a href="http://123link.pw/qaXD0FW">
							<img src="public/img/icons/blogger.png" alt="">
						</a>
					</div>
                </div>
            </div>
        </div>
        <!--End box header-->

        <!--A Begin sub-menu-header-->
        <div id="submenu" class="sub-menu-header">
            <div class="wrap">
                <div class="content-wrap">
                    <!--A Begin sub-menu-top-->   
                    <div class="menu-top">
                        <ul class="notifi" id="menuTop">
                            <li class="icon_logo_menu" id="icon_menu_logo">
                                <a href="index.html" title="Home" class="active">Home</a>
                            </li>
                            
                            <li>                                
                                <a href="songs.html" title="Songs">Songs</a>
                            </li>
                            
                            <li>
                                <a rel="follow" href="genres.html" title="Genres">Genres</a>
                            </li>
                            
                            <li>
                                <a rel="follow" href="singers.html" title="Singer">Singers</a>
                            </li>
                        </ul>
                    </div>
                    <!--End sub-menu-top-->

                </div>
            </div>
        </div>
        <!--End sub-menu-header-->

        <!--A Begin box content-->
        <div class="box-content">
            <div class="wrap">
                <div class="content-wrap">
                    <div class="box-left">
                        <div class="slide_default">
                            <div class="slider">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <a href="Koni---No-Other.html">
                                                <img class="d-block img-fluid" src="public/img/slider/Koni---No-Other.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Koni</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="Culture Code_Make Me Move V2.html">									
                                                <img class="d-block img-fluid" src="public/img/slider/Culture-Code_Make-Me-Move-V2.jpg" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Culture Code</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="Hailee-Steinfeld,-Alesso---Let-Me-Go.html">
                                                <img class="d-block img-fluid" src="public/img/slider/Hailee-Steinfeld,-Alesso_Let-Me-Go.jpg" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Hailee Steinfeld, Alesso</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html">
                                                <img class="d-block img-fluid" src="public/img/slider/Ina-Wroldsen---Strongest-(Alan-Walker-Remix).jpg" alt="Four slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Ina Wroldsen (Alan Walker Remix)</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="Next-To-Me---Axel-Johansson-Tina-Stachowiak.html">
                                                <img class="d-block img-fluid" src="public/img/slider/Next-To-Me---Axel-Johansson-Tina-Stachowiak.jpg" alt="Four slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Axel Johansson - Tina Stachowiak</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list_video">
                            <div class="fram_select">
                                <div class="tile_box_key">
                                    <h2><a title="Videos" href="video.html">Videos</a></h2>                    
                                </div>
                                <ul>
                                    <li class="videolarge">
                                        <ul>
                                            
                                            <li class="videosmall">
                                                <div class="box_absolute">
                                                    <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5495615" wgct="1">103</span></span>
                                                    <span class="tab_lable_"></span>
                                                    <a href="Axel Johansson_The RiverV.html" title="Axel Johansson_The River" class="img" ><span class="icon_play"></span><img src="public/img/videos/big/Axel-Johansson_The-River-V2.jpg"></a>
                                                    <span class="icon_time_video">03:33</span> 
                                                    <div class="name_video_large"> 
                                                        <h3><a href="Axel Johansson_The RiverV.html" title="The River - Axel Johansson " class="name_song">The River</a></h3>
                                                        <h4><a href="Axel Johansson.html" class="name_singer" title="Axel Johansson" target="_blank">Axel Johansson</a></h4>  
                                                    </div>
                                                    <a href="Axel Johansson_The RiverV.html" title="The River - Axel Johansson "><span class="item-mask-bg"></span></a>
                                                </div>
                                            </li>

                                            <li class="videosmall">
                                                <div class="box_absolute">
                                                    <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5495615" wgct="1">93</span></span>
                                                    <span class="tab_lable_"></span>
                                                    <a href="Culture Code_Make Me Move V2V.html" title="Culture Code_Make Me Move" class="img" ><span class="icon_play"></span><img src="public/img/videos/big/Culture-Code_Make-Me-Move-V2.jpg"></a>
                                                    <span class="icon_time_video">03:33</span> 
                                                    <div class="name_video_large">  
                                                        <h3><a href="Culture Code_Make Me Move V2V.html" title="Culture Code_Make Me Move " class="name_song">Make Me Move</a></h3>
                                                        <h4><a href="Culture Code.html" class="name_singer" title="Culture Code" target="_blank">Culture Code</a></h4>  
                                                    </div>
                                                    <a href="Culture Code_Make Me Move V2V.html" title="Culture Code_Make Me Move "><span class="item-mask-bg"></span></a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="Hailee-Steinfeld,-Alesso---Let-Me-GoV.html" title="Hailee Steinfeld, Alesso_Let-Me-Go" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">61</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/Hailee-Steinfeld,-Alesso---Let-Me-Go.jpg" title="Hailee Steinfeld, Alesso_Let-Me-Go">
                                            </a>
                                            <span class="icon_time_video">02:55</span>
                                        </div>
                                        <h3><a href="Hailee-Steinfeld,-Alesso---Let-Me-GoV.html" title="Hailee Steinfeld, Alesso_Let-Me-Go" class="name_song_index">Let Me Go</a></h3>
                                        <h4><a href="Hailee-Steinfeld.html" class="name_singer" title="Hailee Steinfeld" target="_blank">Hailee Steinfeld</a>, <a href="Alesso.html" class="name_singer" title="Alesso" target="_blank">Alesso</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="Ina Wroldsen_Strongest (Alan Walker_ Remix)V.html" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">91</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/Ina-Wroldsen---Strongest-(Alan-Walker-Remix).jpg" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)">
                                            </a>
                                            <span class="icon_time_video">03:31</span>
                                        </div>
                                        <h3><a href="Ina Wroldsen_Strongest (Alan Walker_ Remix)V.html" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" class="name_song_index">Strongest</a></h3>
                                        <h4><a href="Ina-Wroldsen.html" class="name_singer" title="Ina-Wroldsen" target="_blank">Ina-Wroldsen</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-SeungriV.html" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">84</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.jpg" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri">
                                            </a>
                                            <span class="icon_time_video">03:31</span>
                                        </div>
                                        <h3><a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-SeungriV.html" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" class="name_song_index">Ignite</a></h3>
                                        <h4><a href="K-391.html" class="name_singer" title="K-391" target="_blank">K-391</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="Koni---No-OtherV.html" title="Koni---No-Other" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">87</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/Koni---No-Other.jpg" title="Koni---No-Other">
                                            </a>
                                            <span class="icon_time_video">03:20</span>
                                        </div>
                                        <h3><a href="Koni---No-OtherV.html" title="Koni---No-Other" class="name_song_index">No-Other</a></h3>
                                        <h4><a href="Koni.html" class="name_singer" title="Koni" target="_blank">Koni</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="Martin-Jensen---Solo-DanceV.html" title="Martin-Jensen---Solo-Dance" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">62</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/Martin-Jensen---Solo-Dance.jpg" title="Martin-Jensen---Solo-Dance">
                                            </a>
                                            <span class="icon_time_video">02:56</span>
                                        </div>
                                        <h3><a href="Martin-Jensen---Solo-DanceV.html" title="Martin-Jensen---Solo-Dance" class="name_song_index">Solo-Dance</a></h3>
                                        <h4><a href="Martin-Jensen.html" class="name_singer" title="Martin-Jensen" target="_blank">Martin-Jensen</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="Next-To-Me---Axel-Johansson-Tina-StachowiakV.html" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">66</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/Next-To-Me---Axel-Johansson-Tina-Stachowiak.jpg" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak">
                                            </a>
                                            <span class="icon_time_video">03:00</span>
                                        </div>
                                        <h3><a href="Next-To-Me---Axel-Johansson-Tina-StachowiakV.html" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak" class="name_song_index">Next-To-Me</a></h3>
                                        <h4><a href="Axel-Johansson.html" class="name_singer" title="Axel-Johansson" target="_blank">Axel-Johansson</a>, <a href="Tina-Stachowiak.html" class="name_singer" title="Tina-Stachowiak" target="_blank">Tina-Stachowiak</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="The-Script---SuperheroesV.html" title="The-Script---Superheroes" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">82</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/The-Script---Superheroes.jpg" title="The-Script---Superheroes">
                                            </a>
                                            <span class="icon_time_video">04:06</span>
                                        </div>
                                        <h3><a href="The-Script---SuperheroesV.html" title="The-Script---Superheroes" class="name_song_index">Superheroes</a></h3>
                                        <h4><a href="The-Script.html" class="name_singer" title="The-Script" target="_blank">The-Script</a></h4>
                                    </li>
                                    
                                    <li class="videosmall">
                                        <div class="box_absolute">                    		
                                            <a href="All-I-Wanna-Do---Martin-JensenV.html" title="All-I-Wanna-Do---Martin-Jensen" class="img" >
                                                <span class="view_mv"><span class="icon_view"></span><span id="NCTCounter_sg_5508556" wgct="1">61</span></span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/videos/small/All-I-Wanna-Do---Martin-Jensen.jpg" title="All-I-Wanna-Do---Martin-Jensen">
                                            </a>
                                            <span class="icon_time_video">03:15</span>
                                        </div>
                                        <h3><a href="All-I-Wanna-Do---Martin-JensenV.html" title="All-I-Wanna-Do---Martin-Jensen" class="name_song_index">All-I-Wanna-Do</a></h3>
                                        <h4><a href="Martin-Jensen.html" class="name_singer" title="Martin-Jensen" target="_blank">Martin-Jensen</a></h4>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="list_music">
                            <div class="fram_select">
                                <div class="tile_box_key">
                                    <h2><span class="icon_song"></span><a title="Songs" href="songs.html">Songs</a></h2>
                                </div>
                                <ul>
                                    
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Axel Johansson_The River.html" class="avatar_song" title="Alex johansson_The River" >
                                                    <img src="public/img/songs/small/Axel-Johansson_The-River.jpg" title="Alex johansson_The River">
                                                </a>
                                                <h3><a href="Axel Johansson_The River.html" class="name_song" title="Alex johansson_The River" >Alex johansson_The River</a></h3>
                                                <div class="name_sing_under"><a href="Alex johansson.html" class="name_singer" title="Alex johansson" target="_blank">Alex johansson</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">115</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Alex johansson_The River to playlist"></a>        
                                                <a href="Axel Johansson_The River.html" class="button_playing" title="Listen Alex johansson_The River" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="All-I-Wanna-Do---Martin-Jensen.html" class="avatar_song" title="All-I-Wanna-Do---Martin-Jensen" >
                                                    <img src="public/img/songs/small/All-I-Wanna-Do---Martin-Jensen.jpg" title="All-I-Wanna-Do---Martin-Jensen">
                                                </a>
                                                <h3><a href="All-I-Wanna-Do---Martin-Jensen.html" class="name_song" title="All-I-Wanna-Do---Martin-Jensen" >All-I-Wanna-Do---Martin-Jensen</a></h3>
                                                <div class="name_sing_under"><a href="Martin-Jensen.html" class="name_singer" title="Martin-Jensen" target="_blank">Martin-Jensen</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">10</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add All-I-Wanna-Do---Martin-Jensen to playlist"></a>        
                                                <a href="All-I-Wanna-Do---Martin-Jensen.html" class="button_playing" title="Listen All-I-Wanna-Do---Martin-Jensen" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Culture Code_Make Me Move V2.html" class="avatar_song" title="Culture Code_Make Me Move V2" >
                                                    <img src="public/img/songs/small/Culture-Code_Make-Me-Move.jpg" title="Culture Code_Make Me Move V2">
                                                </a>
                                                <h3><a href="Culture Code_Make Me Move V2.html" class="name_song" title="Culture Code_Make Me Move V2" >Culture Code_Make Me Move V2</a></h3>
                                                <div class="name_sing_under"><a href="Culture Code.html" class="name_singer" title="Culture Code" target="_blank">Culture Code</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">93</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Culture Code_Make Me Move V2 to playlist"></a>        
                                                <a href="Culture Code_Make Me Move V2.html" class="button_playing" title="Listen Culture Code_Make Me Move V2" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html" class="avatar_song" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" >
                                                    <img src="public/img/songs/small/Ina-Wroldsen---Strongest-(Alan-Walker-Remix).jpg" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)">
                                                </a>
                                                <h3><a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html" class="name_song" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" >Ina-Wroldsen---Strongest-(Alan-Walker-Remix)</a></h3>
                                                <div class="name_sing_under"><a href="Ina-Wroldsen.html" class="name_singer" title="Ina-Wroldsen" target="_blank">Ina-Wroldsen</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">91</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Ina-Wroldsen---Strongest-(Alan-Walker-Remix) to playlist"></a>        
                                                <a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html" class="button_playing" title="Listen Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Hailee-Steinfeld,-Alesso---Let-Me-Go.html" class="avatar_song" title="Hailee-Steinfeld,-Alesso---Let-Me-Go" >
                                                    <img src="public/img/songs/small/Hailee-Steinfeld,-Alesso---Let-Me-Go.jpg" title="Hailee-Steinfeld,-Alesso---Let-Me-Go">
                                                </a>
                                                <h3><a href="Hailee-Steinfeld,-Alesso---Let-Me-Go.html" class="name_song" title="Hailee-Steinfeld,-Alesso---Let-Me-Go" >Hailee-Steinfeld,-Alesso---Let-Me-Go</a></h3>
                                                <div class="name_sing_under"><a href="Hailee-Steinfeld.html" class="name_singer" title="Hailee-Steinfeld" target="_blank">Hailee-Steinfeld</a>, <a href="Alesso.html" class="name_singer" title="Alesso" target="_blank">Alesso</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">61</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Hailee-Steinfeld,-Alesso---Let-Me-Go to playlist"></a>        
                                                <a href="Hailee-Steinfeld,-Alesso---Let-Me-Go.html" class="button_playing" title="Listen Hailee-Steinfeld,-Alesso---Let-Me-Go" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Just-Say-It---Fly-By-Midnight.html" class="avatar_song" title="Just-Say-It---Fly-By-Midnight" >
                                                    <img src="public/img/songs/small/Just-Say-It---Fly-By-Midnight.jpg" title="Just-Say-It---Fly-By-Midnight">
                                                </a>
                                                <h3><a href="Just-Say-It---Fly-By-Midnight.html" class="name_song" title="Just-Say-It---Fly-By-Midnight" >Just-Say-It---Fly-By-Midnight</a></h3>
                                                <div class="name_sing_under"><a href="Fly-By-Midnight.html" class="name_singer" title="Fly-By-Midnight" target="_blank">Fly-By-Midnight</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">25</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Just-Say-It---Fly-By-Midnight to playlist"></a>        
                                                <a href="Just-Say-It---Fly-By-Midnight.html" class="button_playing" title="Listen Just-Say-It---Fly-By-Midnight" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.html" class="avatar_song" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" >
                                                    <img src="public/img/songs/small/K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.jpg" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri">
                                                </a>
                                                <h3><a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.html" class="name_song" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" >K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri</a></h3>
                                                <div class="name_sing_under"><a href="K-391.html" class="name_singer" title="K-391" target="_blank">K-391</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">84</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri to playlist"></a>        
                                                <a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.html" class="button_playing" title="Listen K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Koni---No-Other.html" class="avatar_song" title="Koni---No-Other" >
                                                    <img src="public/img/songs/small/Koni---No-Other.jpg" title="Koni---No-Other">
                                                </a>
                                                <h3><a href="Koni---No-Other.html" class="name_song" title="Koni---No-Other" >Koni---No-Other</a></h3>
                                                <div class="name_sing_under"><a href="Koni.html" class="name_singer" title="Koni" target="_blank">Koni</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">96</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Koni---No-Other to playlist"></a>        
                                                <a href="Koni---No-Other.html" class="button_playing" title="Listen Koni---No-Other" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Martin-Jensen---Solo-Dance.html" class="avatar_song" title="Martin-Jensen---Solo-Dance" >
                                                    <img src="public/img/songs/small/Martin-Jensen---Solo-Dance.jpg" title="Martin-Jensen---Solo-Dance">
                                                </a>
                                                <h3><a href="Martin-Jensen---Solo-Dance.html" class="name_song" title="Martin-Jensen---Solo-Dance" >Martin-Jensen---Solo-Dance</a></h3>
                                                <div class="name_sing_under"><a href="Martin-Jensen.html" class="name_singer" title="Martin-Jensen" target="_blank">Martin-Jensen</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">65</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Martin-Jensen---Solo-Dance to playlist"></a>        
                                                <a href="Martin-Jensen---Solo-Dance.html" class="button_playing" title="Listen Martin-Jensen---Solo-Dance" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Never-Give-Up---Sia.html" class="avatar_song" title="Never-Give-Up---Sia" >
                                                    <img src="public/img/songs/small/Never-Give-Up---Sia.jpg" title="Never-Give-Up---Sia">
                                                </a>
                                                <h3><a href="Never-Give-Up---Sia.html" class="name_song" title="Never-Give-Up---Sia" >Never-Give-Up---Sia</a></h3>
                                                <div class="name_sing_under"><a href="Sia.html" class="name_singer" title="Sia" target="_blank">Sia</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">70</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Never-Give-Up---Sia to playlist"></a>        
                                                <a href="Never-Give-Up---Sia.html" class="button_playing" title="Listen Never-Give-Up---Sia" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Next-To-Me---Axel-Johansson-Tina-Stachowiak.html" class="avatar_song" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak" >
                                                    <img src="public/img/songs/small/Next-To-Me---Axel-Johansson-Tina-Stachowiak.jpg" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak">
                                                </a>
                                                <h3><a href="Next-To-Me---Axel-Johansson-Tina-Stachowiak.html" class="name_song" title="Next-To-Me---Axel-Johansson-Tina-Stachowiak" >Next-To-Me---Axel-Johansson-Tina-Stachowiak</a></h3>
                                                <div class="name_sing_under"><a href="Axel-Johansson.html" class="name_singer" title="Axel-Johansson" target="_blank">Axel-Johansson</a>, <a href="Tina-Stachowiak.html" class="name_singer" title="Tina-Stachowiak" target="_blank">Tina-Stachowiak</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">67</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Next-To-Me---Axel-Johansson-Tina-Stachowiak to playlist"></a>        
                                                <a href="Next-To-Me---Axel-Johansson-Tina-Stachowiak.html" class="button_playing" title="Listen Next-To-Me---Axel-Johansson-Tina-Stachowiak" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="The-Script---Superheroes.html" class="avatar_song" title="The-Script---Superheroes" >
                                                    <img src="public/img/songs/small/The-Script---Superheroes.jpg" title="The-Script---Superheroes">
                                                </a>
                                                <h3><a href="The-Script---Superheroes.html" class="name_song" title="The-Script---Superheroes" >The-Script---Superheroes</a></h3>
                                                <div class="name_sing_under"><a href="The-Script.html" class="name_singer" title="The-Script" target="_blank">The-Script</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">82</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add The-Script---Superheroes to playlist"></a>        
                                                <a href="The-Script---Superheroes.html" class="button_playing" title="Listen The-Script---Superheroes" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="U-Make-Me---Disco-Fries-feat.-Raquel-Castro.html" class="avatar_song" title="U-Make-Me---Disco-Fries-feat.-Raquel-Castro" >
                                                    <img src="public/img/songs/small/U-Make-Me---Disco-Fries-feat.-Raquel-Castro.jpg" title="U-Make-Me---Disco-Fries-feat.-Raquel-Castro">
                                                </a>
                                                <h3><a href="U-Make-Me---Disco-Fries-feat.-Raquel-Castro.html" class="name_song" title="U-Make-Me---Disco-Fries-feat.-Raquel-Castro" >U-Make-Me---Disco-Fries-feat.-Raquel-Castro</a></h3>
                                                <div class="name_sing_under"><a href="Disco-Frie.html" class="name_singer" title="Disco-Frie" target="_blank">Disco-Frie</a>, <a href="Raquel-Castro.html" class="name_singer" title="Raquel-Castro" target="_blank">Raquel-Castro</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">70</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add U-Make-Me---Disco-Fries-feat.-Raquel-Castro to playlist"></a>        
                                                <a href="U-Make-Me---Disco-Fries-feat.-Raquel-Castro.html" class="button_playing" title="Listen U-Make-Me---Disco-Fries-feat.-Raquel-Castro" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                    <li>
                                        <div class="box-content-music-list home">
                                            <div class="info_song" style="color: #999999;">
                                                <a href="Where-Would-We-Be---Nicky-Romero,-ROZES.html" class="avatar_song" title="Where-Would-We-Be---Nicky-Romero,-ROZES" >
                                                    <img src="public/img/songs/small/Where-Would-We-Be---Nicky-Romero,-ROZES.jpg" title="Where-Would-We-Be---Nicky-Romero,-ROZES">
                                                </a>
                                                <h3><a href="Where-Would-We-Be---Nicky-Romero,-ROZES.html" class="name_song" title="Where-Would-We-Be---Nicky-Romero,-ROZES" >Where-Would-We-Be---Nicky-Romero,-ROZES</a></h3>
                                                <div class="name_sing_under"><a href="Nicky-Romero.html" class="name_singer" title="Nicky-Romero" target="_blank">Nicky-Romero</a>, <a href="ROZES.html" class="name_singer" title="ROZES" target="_blank">ROZES</a></div>
                                            </div>
                                            
                                            <span id="NCTCounter_sg_5508573" class="icon_listen" wgct="1">70</span>
                                            <div class="box_song_action">  
                                                <a href="javascript:;" id="btnShowBoxPlaylist_bpaZ8LGoHtOo" class="button_add_playlist" title="Add Where-Would-We-Be---Nicky-Romero,-ROZES to playlist"></a>        
                                                <a href="Where-Would-We-Be---Nicky-Romero,-ROZES.html" class="button_playing" title="Listen Where-Would-We-Be---Nicky-Romero,-ROZES" ></a>                 
                                            </div>
                                        </div>
                                    </li>
 
                                </ul>
                            </div>
                        </div>

                    </div>
                    
                    <div class="box-right">    
                        <div class="box_topic_music">
                            <div class="tile_box_key">
                                <h3><a href="genres.html" title="Genres">Genres</a></h3>
                            </div>
                            <ul>
                                
                                <li>
                                    <a title="EDM" target="target" href="edm.html"><img src="public/img/genres/EDM.jpg" alt="edm">
                                    </a>
                                </li>
                                
                                <li>
                                    <a title="country" target="target" href="country.html"><img src="public/img/genres/country.jpg" alt="country">
                                    </a>
                                </li>
                                
                                <li>
                                    <a title="Rock" target="target" href="Rock.html"><img src="public/img/genres/Rock.jpg" alt="Rock">
                                    </a>
                                </li>
                                
                                <li>
                                    <a title="hit" target="target" href="hit.html"><img src="public/img/genres/hit.jpg" alt="hit">
                                    </a>
                                </li>
                                
                                <li>
                                    <a title="pop" target="target" href="pop.html"><img src="public/img/genres/pop.jpg" alt="pop">
                                    </a>
                                </li>
                                
                            </ul>  
                        </div>
                             
                        <div class="box_chart_mv">
                            <div class="tile_box_key">
                                <h3><a class="nomore" href="songs.html" title="Top Songs">Top Songs</a></h3>
                                <a id="aUrlTop20MV" href="songs.html"  title="Top Songs" class="play_all"></a>
                            </div>
                            <div class="btn_tab_select">
                                <a id="topMV__au-my" href="javascript:;" class="active" title="EDM">EDM</a>
                                <span></span>
                                <a id="topMV__nhac-han" href="javascript:;" title="Hit">Hit</a>
                                <a id="topMV__nhac-viet" href="javascript:;" title="Vien Nam">Viet Nam</a>
                                <span></span>
                            </div>
                            <div class="list_chart_video" id="top20MV-content">
                                <ul>
                                    
                                    <li class="one">
                                        <div class="info_data">
                                            <a title="Axel-Johansson_The-River-V2" href="Axel Johansson_The River.html" class="img">
                                                <span class="number special-1">1</span>
                                                <span class="icon_play"></span>
                                                <img src="public/img/songs/big/Axel-Johansson_The-River.jpg" class="">
                                            </a>
                                            <div class="name_video_large">
                                                <h3>
                                                    <a href="Axel Johansson_The River.html" title="The-River" class="name_song">The-River</a>
                                                </h3>
                                                <h4>
                                                    <a href="Axel-Johansson.html" class="name_singer" title="Axel-Johansson" target="_blank">Axel-Johansson</a>
                                                </h4>
                                            </div>
                                            <a href="Axel Johansson_The River.html" title="The-River" >
                                                <span class="item-mask-bg"></span>
                                            </a>
                                        </div>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="Culture Code_Make Me Move V2.html" title="Culture Code_Make Me Move V2" >
                                            <div class="thumnail-small">
                                                <span class="number special-2">2</span>
                                                <span class="iconPlay"><img src="public/img/icons/icon-48x48-play.png"></span>
                                                <img src="public/img/songs/medium/Culture-Code_Make-Me-Move.jpg" alt="Culture Code_Make Me Move V2" title="Culture Code_Make Me Move V2">
                                                <span class="item-mask-bg"></span>
                                            </div>
                                        </a>
                                        <div class="info">
                                            <h3 class="h3"><a href="Culture Code_Make Me Move V2.html" class="name_song" title="Culture Code_Make Me Move V2">Culture Code_Make Me Move V2</a></h3>
                                            <h4 class="list_name_singer">
                                                <a href="Culture Code.html" class="name_singer" title="Culture Code" target="_blank">Culture Code</a>
                                            </h4>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" >
                                            <div class="thumnail-small">
                                                <span class="number special-3">3</span>
                                                <span class="iconPlay"><img src="public/img/icons/icon-48x48-play.png"></span>
                                                <img src="public/img/songs/medium/Ina-Wroldsen---Strongest-(Alan-Walker-Remix).jpg" alt="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)">
                                                <span class="item-mask-bg"></span>
                                            </div>
                                        </a>
                                        <div class="info">
                                            <h3 class="h3"><a href="Ina Wroldsen_Strongest (Alan Walker_ Remix).html" class="name_song" title="Ina-Wroldsen---Strongest-(Alan-Walker-Remix)">Ina-Wroldsen---Strongest-(Alan-Walker-Remix)</a></h3>
                                            <h4 class="list_name_singer">
                                                <a href="Ina-Wroldsen.html" class="name_singer" title="Ina-Wroldsen" target="_blank">Ina-Wroldsen</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a>
                                            </h4>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="Koni---No-Other.html" title="Koni---No-Other" >
                                            <div class="thumnail-small">
                                                <span class="number special-4">4</span>
                                                <span class="iconPlay"><img src="public/img/icons/icon-48x48-play.png"></span>
                                                <img src="public/img/songs/medium/Koni---No-Other.jpg" alt="Koni---No-Other" title="Koni---No-Other">
                                                <span class="item-mask-bg"></span>
                                            </div>
                                        </a>
                                        <div class="info">
                                            <h3 class="h3"><a href="Koni---No-Other.html" class="name_song" title="Koni---No-Other">Koni---No-Other</a></h3>
                                            <h4 class="list_name_singer">
                                                <a href="Koni.html" class="name_singer" title="Koni" target="_blank">Koni</a>
                                            </h4>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.html" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" >
                                            <div class="thumnail-small">
                                                <span class="number special-5">5</span>
                                                <span class="iconPlay"><img src="public/img/icons/icon-48x48-play.png"></span>
                                                <img src="public/img/songs/medium/K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.jpg" alt="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri">
                                                <span class="item-mask-bg"></span>
                                            </div>
                                        </a>
                                        <div class="info">
                                            <h3 class="h3"><a href="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri.html" class="name_song" title="K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri">K-391-&-Alan-Walker---Ignite-feat--Julie-Bergan-&-Seungri</a></h3>
                                            <h4 class="list_name_singer">
                                                <a href="K-391.html" class="name_singer" title="K-391" target="_blank">K-391</a>, <a href="Alan-Walker.html" class="name_singer" title="Alan-Walker" target="_blank">Alan-Walker</a>
                                            </h4>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="list_singer_hot">
                            <div class="tile_box_key">
                                <h3><a title="singers" href="singers.html">Singer</a></h3>
                            </div>
                            <ul>
                                <li><a href="Alan-Walker.html" class="img" title="Alan Walker"><img src="public/img/singers/Alan-Walker.jpg" title="alan walker" alt="alan walker"></a><a href="Alan-Walker.html" class="name_singer_main" title="alan walker">Alan Walker</a></li>
                            
                                <li><a href="marshmello.html" class="img" title="Marshmello"><img src="public/img/singers/Marshmello.jpg" title="Marshmello" alt="marshmello"></a><a href="marshmello.html" class="name_singer_main" title="Marshmello">Marshmello</a></li>
                            
                                <li><a href="Martin Jensen.html" class="img" title="Martin Jensen"><img src="public/img/singers/Martin-Jensen.jpg" title="Martin Jensen" alt="Martin Jensen"></a><a href="Martin Jensen.html" class="name_singer_main" title="Martin Jensen">Martin Jensen</a></li>
                            
                                <li><a href="Culture Code.html" class="img" title="Culture Code"><img src="public/img/singers/Culture-Code.jpg" title="Culture Code" alt="Culture Code"></a><a href="Culture Code.html" class="name_singer_main" title="Culture Code">Culture Code</a></li>
                            
                                <li><a href="Hailee Steinfeld.html" class="img" title="Hailee Steinfeld"><img src="public/img/singers/Hailee-Steinfeld.jpg" title="Hailee Steinfeld" alt="Hailee Steinfeld"></a><a href="Hailee Steinfeld.html" class="name_singer_main" title="Hailee Steinfeld">Hailee Steinfeld</a></li>
                            
                                <li><a href="Ina Wroldsen.html" class="img" title="Ina Wroldsen"><img src="public/img/singers/Ina-Wroldsen.jpg" title="Ina Wroldsen" alt="Ina Wroldsen"></a><a href="Ina Wroldsen.html" class="name_singer_main" title="Ina Wroldsen">Ina Wroldsen</a></li>
                            </ul>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
        <!--End box content-->

        <!--A Begin box footer-->
        <div class="footer">
            <div class="wrap">
                <div class="content-wrap">
                    <h6>@2018 M.S.C Channel. All Rights Reserved | Design by BinhNguyen</h6>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
        <!--End box footer-->

    </body>
</html>