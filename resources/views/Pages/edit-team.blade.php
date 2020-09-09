
 
  
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
                            <h1>Add Teams</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Add Teams</li>
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
                        <h2>Add Players</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contactinfobox">
                                            <div class="tg-section-heading">
                                                <h4>Please Add Team &amp; image</h4>
                                            </div>
                                            <img src="{{ asset('images/simphiwe.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <form action="/add/team" method="post" class="tg-commentform help-form" id="tg-commentform" enctype="multipart/form-data">
                                            @csrf
                                            <fieldset>
                                                @include('layouts.messages')
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Team Name*" class="form-control" style="height:35px;" name="name" value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Team Contact*" class="form-control" style="height:35px;" name="phone" value="{{ old('phone') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Team General Email*" class="form-control" style="height:35px;" name="email" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Physical Address*" class="form-control" style="height:35px;" name="address" value="{{ old('address') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Team Owner*" class="form-control" style="height:35px;" name="manager" value="{{ old('manager') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Team Couch*" class="form-control" style="height:35px;" name="couch" value="{{ old('couch') }}">
                                                </div>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="logo" value="{{ old('logo') }}">
                                                    <label class="custom-file-label" for="customFile">Upload Team logo</label>
                                                </div>
                                                
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="home_kit" value="{{ old('home_kit') }}">
                                                    <label class="custom-file-label" for="customFile">Upload Home Kit</label>
                                                </div>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="away_kit" value="{{ old('away_kit') }}">
                                                    <label class="custom-file-label" for="customFile">Upload Away Kit</label>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <textarea required placeholder="About the Team*" style="height: 100px;" name="about" value="{{ old('about') }}"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" style="width: 100%; height:40px;" class="tg-btn submit">Add Team</button>
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
