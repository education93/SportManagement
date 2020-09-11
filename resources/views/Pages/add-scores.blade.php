

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
                            <h1>contact</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">contact</li>
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
                        <h2>Add Fixture</h2>
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
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                    <form action="/create/scores/store" method="post" class="tg-commentform help-form" id="tg-commentform">
                                        @csrf 
                                        
                                            <fieldset>
                                                <input hidden name="fixture_id" value="{{$fixture->id}}" />
                                                <div class="tg-select">
                                                    <select id="homeTeam"  name="team_name" style="height:35px;">
                                                        <option>{{$fixture->team_1_name}}</option>
                                                    </select>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                Score By :
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="tg-select" style="height:35px;">
                                                                    <select name="player_id" style="height:35px;">
                                                                        <option value="">Select Player*</option>
                                                                        {!! Score::players($fixture->team_1_name) !!}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <button type="submit" id="btnSubmit" style="width: 100%; height:40px;" class="tg-btn submit">its a Gooal</button>
                                            </div>
                                       
                                    </form>
                                </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                    <form action="/create/scores/store" method="post" class="tg-commentform help-form" id="tg-commentform">
                                        @csrf
                                            <fieldset>
                                                <input hidden name="fixture_id" value="{{$fixture->id}}" />
                                                <div class="form-group">
                                                    <div class="tg-select">
                                                        <select id="awayTeam"  name="team_name" style="height:35px;">
															<option>{{$fixture->team_2_name}}</option>
															
														</select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            Score By :
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="tg-select" style="height:35px;">
                                                                <select name="player_id" style="height:35px;">
                                                                    <option value="">Select Player*</option>
                                                                    {!! Score::players($fixture->team_2_name) !!}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <button type="submit" id="btnSubmit" style="width: 100%; height:40px;" class="tg-btn submit">its a Gooal</button>
                                            </div>
                                      
                                        
                                    </form> 
                                </div>
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