@include('layouts/header')
		<!--************************************
				Banner Start
		*************************************-->
		<div class="tg-banner tg-haslayout">
			<div class="tg-imglayer">
				<img src="images/bg-pattran.png" alt="image desctription">
			</div>
			<div class="container">
				<div class="row">
					<div class="tg-banner-content tg-haslayout">
						<div class="tg-pagetitle">
							<h1>fixtures</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active">fixtures</li>
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
																	<img src="{{ asset('images/logo') }}/{{$fixture->team_1_name}}.png" alt="Team_1_image">
																</strong>
															<h4>{{$fixture->team_1_name}}</h4>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('images/logo') }}/{{$fixture->team_2_name}}.png" alt="Team_2_image">
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
																@if (Auth::check())
                                                @if (Auth::user()->user_type=="admin")
												<div class="tg-btnsbox">	
												<a class="tg-btn" href="/score/{{$fixture->f_id}}/add-score">Add Scores</a>
												</div>
												@else
												<div class="tg-btnsbox">
														
													<a class="tg-btn" href="#">book my ticket</a>
												</div>
													@endif
													@endif
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
					Upcoming Match Start
			*************************************-->
			<section class=" tg-haslayout tg-bgstyleone">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-upcomingmatch-counter">
								<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="images/img-02.png" alt="image description">
									</figure>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Upcoming Match End
			*************************************-->
			<!--************************************
					Other Fixtures Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>other fixtures</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div id="tg-otherfixtures-slider" class="tg-otherfixtures-slider tg-tickets">
										<div class="swiper-wrapper">
											@foreach ($fixtures as $fixture)
											<div class="swiper-slide">
												<div class="tg-ticket">
													<time class="tg-matchdate" datetime="2016-05-03"><?php $mydatetime= $fixture->match_date;
														$datetimearray = explode(" ", $mydatetime);
														$date = $datetimearray[0];
														$time = $datetimearray[1];
														$reformatted_date = date('j',strtotime($date));
														$reformatted_time = date('F',strtotime($date));  echo $reformatted_date." <span>".$reformatted_time; ?></span></time>
													<div class="tg-matchdetail">
														<span class="tg-theme-tag">English Premier League</span>
														<h4>{{$fixture->team_1_name}} <span>vs</span> {{$fixture->team_2_name}}</h4>
														<ul class="tg-matchmetadata">
															<li><time datetime="2016-05-03">
																<?php $mydatetime= $fixture->match_date;
																$datetimearray = explode(" ", $mydatetime);
																$date = $datetimearray[0];
																$time = $datetimearray[1];
																$reformatted_date = date('Y-m-d',strtotime($date));
																$reformatted_time = date('g:i A',strtotime($time));  echo $reformatted_date." ".$reformatted_time; ?>  
															</time></li>
															<li><address>{{$fixture->name}}, {{$fixture->location}}</address></li>
														</ul>
													</div>
													
													@if (Auth::check())
                                                @if (Auth::user()->user_type=="admin")
												<div class="tg-btnsbox">	
												<a class="tg-btn" href="/score/{{$fixture->f_id}}/add-score">Add Scores</a>
												</div>
												@else
												<div class="tg-btnsbox">
														
													<a class="tg-btn" href="#">book my ticket</a>
												</div>
													@endif
													@endif
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
			</section>
			<!--************************************
					Other Fixtures End
			*************************************-->
			<!--************************************
					Video Start
			*************************************-->
			<section class="tg-videobox tg-haslayout">
				<figure>
					<img src="{{ asset('images/bg-video.jpg')}}" alt="image description">
					<figcaption>
						<a class="tg-playbtn" aria-disabled="false"  ></a>
						<h2>Best Football Skills</h2>
					</figcaption>
				</figure>
			</section>
			<!--************************************
					Video End
			*************************************-->
		
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		@include('layouts/footer')