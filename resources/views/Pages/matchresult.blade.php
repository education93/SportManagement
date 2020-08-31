@include('layouts/header')
<!--************************************
				Header End
		*************************************-->
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
                    <h1>match result</h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Match Result</li>
                </ol>
            </div>
        </div>
    </div>
</div>
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>match result</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tab-content tg-tabscontent">
								@foreach ($results as $result)
                            <div role="tabpanel" class="tab-pane fade" id="{{$result->id_no}}">
									<div class="tg-matchresult">
										<div class="tg-box">
											<div class="tg-score"><h3>{{ Score::team_score($result->team_1,$result->fixture_id) }} - {{ Score::team_score($result->team_2,$result->fixture_id) }}</h3></div>
											<div class="tg-teamscore">
												<strong class="tg-team-logo">
													<a href="#">
														<img src="{{ asset('images/logo')}}/{{$result->team_1}}.png" alt="image description">
													</a>
												</strong>
												<div class="tg-team-nameplusstatus">
													<h4><a href="#">{{$result->team_1}}
											
															@if (Score::win_lose_draw($result->team_1,$result->fixture_id) >Score::win_lose_draw($result->team_2,$result->fixture_id) )
																( Win )
															 @endif
															 @if (Score::win_lose_draw($result->team_1,$result->fixture_id) <Score::win_lose_draw($result->team_2,$result->fixture_id) )
																( Lose )
															 @endif
															 @if (Score::win_lose_draw($result->team_1,$result->fixture_id) ==Score::win_lose_draw($result->team_2,$result->fixture_id) )
																( Draw )
															 @endif
												
													</a></h4>
												</div>
												<ul class="tg-playernameplusgoadtime">
													{{ Score::goal_scorer($result->team_1,$result->fixture_id) }}
												</ul>
											</div>
											<div class="tg-teamscore">
												<strong class="tg-team-logo">
													<a href="#">
														<img src="{{ asset('images/logo')}}/{{$result->team_2}}.png" alt="image description">
													</a>
												</strong>
												<div class="tg-team-nameplusstatus">
													<h4><a href="#">{{$result->team_2}} 
														@if (Score::win_lose_draw($result->team_2,$result->fixture_id) >Score::win_lose_draw($result->team_1,$result->fixture_id) )
														( Win )
													 @endif
													 @if (Score::win_lose_draw($result->team_2,$result->fixture_id) <Score::win_lose_draw($result->team_1,$result->fixture_id) )
														( Lose )
													 @endif
													 @if (Score::win_lose_draw($result->team_2,$result->fixture_id) ==Score::win_lose_draw($result->team_1,$result->fixture_id) )
														( Draw )
													 @endif
													</a></h4>
												</div>
												<ul class="tg-playernameplusgoadtime">
													
													{{ Score::goal_scorer($result->team_2,$result->fixture_id) }}
													
												</ul>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								
								
							</div>
							<ul class="tg-tickets tg-tabnav" role="tablist">
								
								@foreach ($results as $result)
                                <li role="presentation">
									<a href="#{{$result->id_no}}" aria-controls="{{$result->id_no}}" role="tab" data-toggle="tab">
										<div class="tg-ticket">
											<time class="tg-matchdate" datetime="2016-05-03">27<span>june</span></time>
											<div class="tg-matchdetail">
												<span class="tg-theme-tag">English Premier League</span>
												<h4>{{$result->team_1}} <span> vs </span> {{$result->team_2}}</h4>
												<ul class="tg-matchmetadata">
													<li><time datetime="2016-05-03">
														<?php $mydatetime= $result->match_date;
																$datetimearray = explode(" ", $mydatetime);
																$date = $datetimearray[0];
																$time = $datetimearray[1];
																$reformatted_date = date('Y-m-d',strtotime($date));
																$reformatted_time = date('g:i A',strtotime($time));  echo $reformatted_date." ".$reformatted_time; ?>
													</time></li>
                                                <li><address>{{$result->name}}</address></li>
												</ul>
											</div>
											<div class="tg-btnsbox">
												<span class="tg-btn">view result</span>
											</div>
										</div>
									</a>
								</li> 
                                @endforeach
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!--************************************
				Main End
		*************************************-->
<!--************************************
				Footer Start
		*************************************-->
@include('layouts/footer')