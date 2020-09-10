
 
  
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
                            <h1>Update League</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Update League</li>
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
                        <h2>Update League</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contactinfobox">
                                            <div class="tg-section-heading">
                                                <h4>Update League</h4>
                                            </div>
                                            <img src="{{ asset('images/simphiwe.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        @include('layouts.messages')
                                        {{-- <form action="/add/player/team" method="post" class="tg-commentform help-form" id="tg-commentform" enctype="multipart/form-data"> --}}
                                            {!! Form::open(['action'=>['LeaguesController@update',$leagues->id],'method'=>'POST','class'=>'tg-commentform help-form','id'=>'tg-commentform','enctype'=>'multipart/form-data']) !!}
                                            {{-- <form class="tg-loginform" method="post" action="/add/venue"> --}}
                                                @csrf
                                                <fieldset>
                                                <div class="form-group">
                                                        <input type="text" name="Lname" value="{{  $leagues->league_name }}" class="form-control" placeholder="League Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" name="Lno_teams" value="{{ $leagues->no_of_teams }}" class="form-control" placeholder="Number of teams">
                                                    </div>
                                                    {{Form::hidden('_method','PUT ')}}
                                                    <div class="form-group">
                                                        <button class="tg-btn tg-btn-lg" style="width:100%" type="submit">Update League</button>
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
