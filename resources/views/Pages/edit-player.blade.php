
 
  
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
                            <h1>Add Players</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Add Players</li>
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
                        <h2>edit Players</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contactinfobox">
                                            <div class="tg-section-heading">
                                                <h4>Please Provide Player Details &amp; image</h4>
                                            </div>
                                            <img src="{{ asset('images/simphiwe.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        {{-- <form action="/add/player/team" method="post" class="tg-commentform help-form" id="tg-commentform" enctype="multipart/form-data"> --}}
                                            {!! Form::open(['action'=>['PlayerController@update',$player->id],'method'=>'POST','class'=>'tg-commentform help-form','id'=>'tg-commentform','enctype'=>'multipart/form-data']) !!}
                                            @csrf
                                            <fieldset>
                                                @include('layouts.messages')
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Full Name*" class="form-control" style="height:35px;" name="fullname" value="{{ $player->full_name }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" required="" placeholder="Jersey No*" class="form-control" style="height:35px;" name="Jerseyno" value="{{ $player->jersey_no }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" required="" placeholder="Age*" class="form-control" style="height:35px;" name="age" value="{{ $player->age }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Province of Birth*" class="form-control" style="height:35px;" name="province" value="{{ $player->province_of_birth }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Home Town*" class="form-control" style="height:35px;" name="town" value="{{ $player->home_town }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Country of Birth*" class="form-control" style="height:35px;" name="country" value="{{ $player->country_of_birth }}">
                                                </div>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="player_image" value="{{ $player->player_image }}">
                                                    <label class="custom-file-label" for="customFile">Upload Player Image</label>
                                                </div>
                                                {{Form::hidden('_method','PUT ')}}
                                                <div class="form-group">
                                                    <button type="submit" style="width: 100%; height:40px;" class="tg-btn submit">Update Player</button>
                                                </div>
                                                
                                            </fieldset>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br/><br/><br/>
            <img src="{{ asset('images/sport-ground.png')}}" />
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
