   @include('layouts/header')
        <!--************************************
				Banner Start
		*************************************-->
        <div class="tg-banner tg-haslayout">
            <div class="tg-imglayer">
                <img src="{{ asset('images/bg-pattran.png') }}" alt="image desctription">
            </div>
            <div class="container">
                <div class="row">
                    <div class="tg-banner-content tg-haslayout">
                        <div class="tg-pagetitle">
                            <h1>Teams </h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Teams</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
				Banner End
		*************************************-->
        <!--************************************
				Main Start
		*************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
					Top Rated Player Start
			*************************************-->
            <section class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>Teams</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-player-grid2 tg-haslayout">
                                <div id="tg-player-slider" class="tg-player-slider tg-haslayout">
                                    <div class="swiper-wrapper">
                                       
                                       @foreach ($teams as $team)
                                       <div class="swiper-slide">
                                        <figure class="tg-postimg">
                                        <img src="{{ asset('images/teams') }}/{{$team->image}}.jpg" alt="image description"><br/><br/><br/><br/>
                                            <!--<div class="tg-img-hover">-->
                                            <figcaption class="tg-img-hover">
                                                <h2 href="#" class="tg-theme-tag">{{$team->couch}}</h2>
                                                <div class="tg-section-heading">
                                                <h3><a href="#">{{$team->name}}</a></h3>
                                                   
                                                </div>
                                                <div class="tg-description">
                                                    <p>{{$team->about}}</p>
                                                </div>
                                               
                                            </figcaption>
                                            <!--</div>-->
                                        </figure>
                                    </div>
                                       @endforeach
                                        
                                    </div>
                                    <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                    <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
					Top Rated Player End
			*************************************-->
          
        </main>
        <!--************************************
				Main End
		*************************************-->
        <!--************************************
				Footer Start
		*************************************-->
        @include('layouts/footer')