

        @include('layouts/header')
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <!--************************************
				Banner Start
		*************************************-->
        <div class="tg-banner tg-haslayout">
            <div class="tg-imglayer">
                <img src="{{ asset('images/bg-pattran.png')}}" alt="image desctription">
            </div>
            <div class="container">
                <div class="row">
                    <div class="tg-banner-content tg-haslayout">
                        <div class="tg-pagetitle">
                            <h1>Fixture</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Edit Fixture</li>
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
        <main id="tg-main" class="tg-main tg-paddingbottom-zero tg-haslayout">
            <section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>Edit Fixture</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tg-section-heading">
                                            <h5>Home Team</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tg-section-heading">
                                            <h5>Away Team</h5>
                                        </div>
                                    </div>
                                </div>
                                @include('layouts.messages')
                                
                                <div class="row mt-5">

                                    {!! Form::open(['action'=>['FixtureController@update',$fixture->id],'method'=>'POST','class'=>'tg-commentform help-form','id'=>'tg-commentform','enctype'=>'multipart/form-data']) !!}
                                        @csrf 
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <fieldset>
                                                <div class="tg-select">
                                                    <select id="homeTeam" value="{{ old('home_team') }}" name="home_team" style="height:35px;">
                                                        <option>{{ $fixture->team_1_name}}</option>
                                                        @foreach ($teams as $team)
                                                            <option>{{$team->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="tg-select">
                                                        <select id="awayTeam"  name="away_team" style="height:35px;">
                                                        <option>{{ $fixture->team_2_name}}</option>
															@foreach ($teams as $team)
                                                              <option >{{$team->name}}</option>
                                                            @endforeach
														</select>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6">
                                            <p style="text-align:center;" id="errorM" class="alert-danger"></p>
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="tg-select">
                                                        <select name="referee"  style="height:35px;">
															<option>Select Referee</option>
															@foreach ($referees as $referee)
                                                               <option value="{{$referee->id}}">{{$referee->fullname}}</option>
                                                            @endforeach
														</select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="tg-select" style="height:35px;">
                                                        <select name="field"  style="height:35px;">
															<option >Select Field of Play*</option>
															@foreach ($venues as $venue)
                                                              <option value="{{$venue->id}}">{{$venue->name}}</option>
                                                             @endforeach
														</select>
                                                    </div>
                                                </div>
                                                <p style="text-align:center;" id="errorT" class="alert-danger"></p>
                                                <div class="form-group">
                                                    <input type="datetime-local" value="{{ $fixture->match_date }}" id="matchDate" title="Match Date" required=""  min="2020-06-07T00:00" max="2021-06-14T00:00" class="form-control" style="height:35px;" name="match_date">
                                                </div>
                                                {{Form::hidden('_method','PUT ')}}
                                                <div class="form-group">
                                                    <button type="submit" id="btnSubmit" style="width: 100%; height:40px;" class="tg-btn submit">send</button>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br/><br/> <br/><br/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114546.17009469806!2d27.898316017280834!3d-26.210733740878656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95090d44757ecb%3A0x12892e9b33f65a14!2sFNB%20Stadium!5e0!3m2!1sen!2sza!4v1598889163069!5m2!1sen!2sza" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
        </main>
        <!--************************************
				Main End
		*************************************-->
        @include('layouts/footer')
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input1").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label1").addClass("selected").html(fileName);
        });
    </script>