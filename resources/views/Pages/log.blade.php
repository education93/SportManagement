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
                    <h1>Table</h1>
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