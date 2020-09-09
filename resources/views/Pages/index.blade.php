@include('layouts/header')
        <!--************************************
				Home Slider Start
		*************************************-->
        <div class="tg-sliderbox">
            <div class="tg-imglayer">
                <img src="{{ asset('images/bg-pattran.png') }}" alt="image desctription">
            </div>
            <div id="tg-home-slider" class="tg-home-slider tg-haslayout">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <figure class="floating">
                                <img src="{{ asset('images/slider/img-01.png') }}" alt="image description">
                            </figure>
                            <div class="tg-slider-content">
                                <h1>Best  <span>Football Skills</span></h1>
                                <div class="tg-btnbox">
                                    <h2>Gooooal</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <figure class="floating">
                                <img src="{{ asset('images/slider/img-01.png') }}" alt="image description">
                            </figure>
                            <div class="tg-slider-content">
                                <h1>Best  <span>Football Skills</span></h1>
                                <div class="tg-btnbox">
                                    <h2>Gooooal @include('layouts.messages')</h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <figure class="floating">
                                <img src="{{ asset('images/slider/img-01.png') }}" alt="image description">
                            </figure>
                            <div class="tg-slider-content">
                                <h1 >Best  <span>Football Skills</span></h1>
                                <div class="tg-btnbox">
                                    <h2>Gooooal @include('layouts.messages')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tg-btn-next">
                    <span>next</span>
                    <span class="fa fa-angle-down"></span>
                </div>
                <div class="tg-btn-prev">
                    <span>prev</span>
                    <span class="fa fa-angle-down"></span>
                </div>
            </div>
        </div>
        <!--************************************
				Home Slider End
		*************************************-->
        <!--************************************
				Main Start
		*************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
					About Us Start
			*************************************-->
            <section class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>About Mfundo Soccer League</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-aboutussection">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <figure>
                                            <img src="{{ asset('images/football.jpg') }}" alt="image description">
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="tg-contentbox">
                                            <div class="tg-section-heading">
                                                <h2>Mfundo Soccer League</h2>
                                            </div>
                                            <div class="tg-description">
                                                <p>Welcome to home of best football skill</p>
                                            </div>
           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
					About Us End
			*************************************-->

            <!--************************************
					Latest Result Start
			*************************************-->
            <section class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>latest result</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-latestresult">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <img src="{{ asset('images/soccer-city.jpg')}}" alt="Stadium">
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
                                            <ul class="tg-matchtabnav" role="tablist">
                                                @foreach ($match_outcome as $results)
                                                <li role="presentation">
                                                    <a href="#{{$results->id}}" aria-controls="{{$results->id}}" role="tab" data-toggle="tab">
                                                        <div class="tg-match">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
																	<img src="{{ asset('/storage/images/logo')}}/{{$results->team_1}}.png" alt="image description">
																</strong>
                                                                
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>{{ Score::team_score($results->team_1,$results->fixture_id) }} - {{ Score::team_score($results->team_2,$results->fixture_id) }}</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
																	<img src="{{ asset('/storage/images/logo')}}/{{$results->team_2}}.png" alt="image description">
																</strong>
                                                                
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>  
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tg-btnbox">
                                            <a class="tg-btn" href="#"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
					Latest Result End
			*************************************-->
            <!--************************************
					Statistics Start
			*************************************-->
            <section class="tg-main-section tg-haslayout tg-bgdark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tg-statistics">
                                <div class="tg-statistic tg-goals">
                                    <span class="tg-icon icon-Icon1"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="@foreach ($goals as $goal)  {{$goal->goals }}@endforeach" data-speed="4000" data-refresh-interval="50">@foreach ($goals as $goal)  {{$goal->goals }}@endforeach</span></h2>
                                    <h3>Goals</h3>
                                </div>
                                <div class="tg-statistic tg-activeplayers">
                                    <span class="tg-icon icon-Icon2"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="@foreach ($players as $player)  {{$player->players }}@endforeach" data-speed="4000" data-refresh-interval="50">@foreach ($players as $player)  {{$player->players }}@endforeach</span></h2>
                                    <h3>Active Players</h3>
                                </div>
                                <div class="tg-statistic tg-activeteams">
                                    <span class="tg-icon icon-Icon3"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="@foreach ($teamss as $team)  {{$team->teams }}@endforeach" data-speed="4000" data-refresh-interval="50">@foreach ($teams as $team)  {{$team->teams }}@endforeach</span></h2>
                                    <h3>Active Teams</h3>
                                </div>
                                <div class="tg-statistic tg-earnedawards">
                                    <span class="tg-icon icon-Icon4"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="3" data-speed="4000" data-refresh-interval="50">3</span></h2>
                                    <h3>Earned Awards</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
					Statistics End
			*************************************-->
            <!--************************************
					Fixtures Start
			*************************************-->
            <section class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>fixtures</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-latestresult">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contentbox">
											<div class="tg-section-heading"><h2>{{$league_name}} 2020 Fixtures</h2></div>
											<div class="tg-description">
												<p>Relax, Sit Back, have something to seep and watch great matches of football, Quality players with genuis skills to keep you and your friends entertained </p>
											</div>
										</div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
                                            <div class="swiper-wrapper">
                                                @foreach ($fixtures as $fixture)
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('/storage/images/logo') }}/{{$fixture->team_1_name}}.png" alt="Team_1_image">
																</strong>
															<h4>{{$fixture->team_1_name}}</h4>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('/storage/images/logo') }}/{{$fixture->team_2_name}}.png" alt="Team_2_image">
																</strong>
																<h4>{{$fixture->team_2_name}}</h4>
															</div>
														</div>
														<div class="tg-matchhover">
															<address><?php $mydatetime= $fixture->match_date;
																$datetimearray = explode(" ", $mydatetime);
																$date = $datetimearray[0];
																$time = $datetimearray[1];
																$reformatted_date = date('Y-m-d',strtotime($date));
																$reformatted_time = date('g:i A',strtotime($time));  echo $reformatted_date." ".$reformatted_time; ?>  {{$fixture->name}}, {{$fixture->location}}</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>book my ticket</span></a> 
															</div>
														</div>
													</div>
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
                    </div>
                </div>
            </section>
            <!--************************************
					Fixtures End
			*************************************-->
            <!--************************************
					Video Start
			*************************************-->
            <section class="tg-videobox tg-haslayout">
                <figure>
                    <img src="{{ asset('images/bg-video.jpg') }}" alt="image description">
                    <figcaption>
                        <p class="tg-playbtn"></p>
                        <h2>Best Fooball skills, to keep you and your family entertained</h2>
                    </figcaption>
                </figure>
            </section>
            <!--************************************
					Video End
			*************************************-->
            
            <!--************************************
					Points Table Start
			*************************************-->
            <section class=" tg-haslayout tg-bgstyletwo">
                <div class="tg-bgboxone"></div>
                <div class="tg-bgboxtwo"></div>
                <div class="tg-bgpattrant">
                    <div class="container">
                        <div class="row">
                            <div class="tg-pointstablewrapper">
                                <div class="col-sm-8 col-xs-12">
                                    <div class="tg-pointstable">
                                        <div class="tg-section-heading">
                                            <h2>points table</h2>
                                        </div>
                                        
                                        <table class="table table-dark" style="color: #428bca">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Played</th>
                                                <th scope="col">Win</th>
                                                <th scope="col">Loss</th>
                                                <th scope="col">Draw</th>
                                                <th scope="col">GF</th>
                                                <th scope="col">GA</th>
                                                <th scope="col">GD</th>
                                                <th scope="col">Points</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($teams as $key => $team)
                                                <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                    <td>{{$team->team_name}}</td>
                                                    <td>{{$team->mp}}</td>
                                                    <td>{{$team->w}}</td>
                                                    <td>{{$team->l}}</td>
                                                    <td>{{$team->d}}</td>
                                                    <td>{{$team->GF}}</td>
                                                    <td>{{$team->GA}}</td>
                                                    <td>{{$team->GD}}</td>
                                                    <td>{{$team->pts}}</td>
                                                  </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12 hidden-xs">
                                    <figure>
                                        <img src="{{ asset('images/img-03.png') }}" alt="image description">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
					Points Table End
			*************************************-->
           
        </main>
        <!--************************************
				Main End
		*************************************-->
       @include('layouts/footer')