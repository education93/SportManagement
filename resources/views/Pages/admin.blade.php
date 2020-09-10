
 
  
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
                            <h1>Admin</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Admin</li>
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
                        <h2>Admin</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contactinfobox">
                                            <div class="tg-section-heading">
                                                <h4>Team Admin</h4>
                                            </div>
                                            <img src="{{ asset('images/simphiwe.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                      @include('layouts.messages')
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                              <div class="card-header" id="headingOne">
                                                <h1 class="mb-0">
                                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Players
                                                  </button>
                                                </h1>
                                              </div>
                                          
                                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <table class="table table-striped table-light">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Full Name</th>
                                                            
                                                            <th scope="col">Jersey No</th>
                                                            <th scope="col">Edit</th>
                                                            <th scope="col">Delete</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            @foreach ($players as $key => $player)
                                                          <th scope="row">{{$key+1}}</th>
                                                          <td>{{$player->full_name}}</td>>
                                                            <td>{{$player->jersey_no}}</td>
                                                          <td><a href='/players/{{$player->id}}/edit-player'> <button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                          
                                                          </td>
                                                            <td>
                                                              {!!Form::open(['action'=> ['PlayerController@destroy',$player->id],'method'=>'POST'])!!}
                                                              {{Form::hidden('_method','DELETE')}}
                                                              {{Form::submit('Delete Player',['class'=>'btn btn-danger btn-sm'])}}
                                                          {!!Form::close()!!}
                                                            </td>
                                                          </tr>
                                                         @endforeach
                                                        </tbody>
                                                      </table>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headingTwo">
                                                <h1 class="mb-0">
                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Team Info
                                                  </button>
                                                </h1>
                                              </div>
                                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                               
                                                  
                                                    <form action="/add/team" method="post" class="tg-commentform help-form" id="tg-commentform" enctype="multipart/form-data">
                                                        @csrf
                                                        <fieldset>
                                                            @include('layouts.messages')
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Team Name*" class="form-control" style="height:35px;" name="name" value="{{ $team->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Team Contact*" class="form-control" style="height:35px;" name="phone" value="{{ $team->phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Team General Email*" class="form-control" style="height:35px;" name="email" value="{{ $team->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Physical Address*" class="form-control" style="height:35px;" name="address" value="{{ $team->address }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Team Owner*" class="form-control" style="height:35px;" name="manager" value="{{ $team->manager }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" required="" placeholder="Team Couch*" class="form-control" style="height:35px;" name="couch" value="{{ $team->couch }}">
                                                            </div>
                                                            <div class="custom-file mb-3">
                                                                <input type="file" class="custom-file-input" id="customFile" name="logo" value="{{ $team->logo }}">
                                                                <label class="custom-file-label" for="customFile">Upload Team logo</label>
                                                            </div>
                                                            
                                                            <div class="custom-file mb-3">
                                                                <input type="file" class="custom-file-input" id="customFile" name="home_kit" value="{{ $team->home_kit }}">
                                                                <label class="custom-file-label" for="customFile">Upload Home Kit</label>
                                                            </div>
                                                            <div class="custom-file mb-3">
                                                                <input type="file" class="custom-file-input" id="customFile" name="away_kit" value="{{ $team->away_kit }}">
                                                                <label class="custom-file-label" for="customFile">Upload Away Kit</label>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <textarea required placeholder="About the Team*" style="height: 100px;" name="about" value="{{ $team->about }}"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" style="width: 100%; height:40px;" class="tg-btn submit">Update Team</button>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                        
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headingThree">
                                                <h1 class="mb-0">
                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Top Players
                                                  </button>
                                                </h1>
                                              </div>
                                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                 



                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        
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
