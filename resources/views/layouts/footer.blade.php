 <!--************************************
				Footer Start
		*************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            
            <div class="tg-footerbar">
                <div class="container">
                    <span class="tg-copyright"><a target="_blank" href="https://www.templateshub.net">Mfundo Soccer League</a></span>
                    <nav class="tg-footernav">
                        <ul>
                            <li><a href="#">Main</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Buy Tickets</a></li>
                            <li><a href="#">Match Results</a></li>
                            <li><a href="#">Upcoming Matches</a></li>
                            <li><a href="#">Shop</a></li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
        <!--************************************
				Footer End
		*************************************-->
    </div>
    <!--************************************
			Wrapper End
	*************************************-->
    <!--************************************
			Search Start
	*************************************-->
    <div class="tg-searchbox">
        <a id="tg-close-search" class="tg-close-search" href="javascript:void(0)"><span class="fa fa-close"></span></a>
        <div class="tg-searcharea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form class="tg-form-search">
                            <fieldset>
                                <input type="search" class="form-control" placeholder="keyword">
                                <i class="icon-icon_search2"></i>
                            </fieldset>
                        </form>
                        <p>Start typing and press Enter to search</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
			Search End
    *************************************-->
    {{-- Add League Start --}}
<div class="tg-modalbox modal fade" id="add-league" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="tg-modal-content">
            <div class="tg-formarea">  
                <div class="tg-border-heading">
                    <div class="tg-section-heading">
                        <h4>Add League</h4>
                    </div>
                    @include('layouts.messages')
                </div>
                <form class="tg-loginform" method="post" action="/league/create/store">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="Lname" value="{{ old('Lname') }}" class="form-control" placeholder="League Name">
                        </div>
                        <div class="form-group">
                            <input type="number" name="Lno_teams" value="{{ old('Lno_teams') }}" class="form-control" placeholder="Number of teams">
                        </div>
                        <div class="form-group">
                            <button class="tg-btn tg-btn-lg" style="width:100%" type="submit">Add League</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- add league End --}}
{{-- Add Referee --}}
<div class="tg-modalbox modal fade" id="add-referee" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="tg-modal-content">
            <div class="tg-formarea">  
                <div class="tg-border-heading">
                    <div class="tg-section-heading">
                        <h4>Add Referee</h4>
                    </div>
                    @include('layouts.messages')
                </div>
                <form class="tg-loginform" method="post" action="/referee/create/store">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="Rname" value="{{ old('Rname') }}" class="form-control" placeholder="Referee Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="Remail" value="{{ old('Remail') }}" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Rhometown" value="{{ old('Rhometown') }}" class="form-control" placeholder="Home Town">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Rprovince" value="{{ old('Rprovince') }}" class="form-control" placeholder="Province">
                        </div>
                        <div class="form-group">
                            <button class="tg-btn tg-btn-lg" style="width:100%" type="submit">Add Referee</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- add Referee --}}
{{-- Add  Venues --}}
<div class="tg-modalbox modal fade" id="add-venues" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="tg-modal-content">
            <div class="tg-formarea">  
                <div class="tg-border-heading">
                    <div class="tg-section-heading">
                        <h4>Add Venue</h4>
                    </div>
                    @include('layouts.messages')
                </div>
                <form class="tg-loginform" method="post" action="/add/venue">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="Vname" value="{{ old('Vname') }}" class="form-control" placeholder="Venue Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Vprovince" value="{{ old('Vprovince') }}" class="form-control" placeholder="Province">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Vcity" value="{{ old('Vcity') }}" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="number" name="Vcapacity" value="{{ old('Vcapacity') }}" class="form-control" placeholder="Capacity">
                        </div>
                        <div class="form-group">
                            <button class="tg-btn tg-btn-lg" style="width:100%" type="submit">Add Venue</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- add venues --}}
    <!--************************************
		LightBoxes Start
	*************************************-->
    <div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="tg-modal-content">
                <div class="tg-formarea">
                    <div class="tg-border-heading">
                        <div class="tg-section-heading">
                            <h4>Login</h4>
                        </div>
                    </div>
                   
                        <form class="tg-loginform" method="POST" action="{{ route('login') }}">
                            @csrf
                        <fieldset>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>
									<input type="checkbox" value="rememberme" class="checkbox">
									<em>Remember Me</em>
								</label>
                                <a href="#">
                                    <em>Forgot Password</em>
                                    <i class="fa fa-question-circle"></i>
                                </a>
                            </div>
                            <div class="form-group">
                                <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                            </div>
                            <div class="tg-description">
                                <p>Don't have an account? <a href="#">Signup</a></p>
                            </div>
                        </fieldset>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="tg-modal-content">
                <div class="tg-formarea">
                    <div class="tg-border-heading">
                        <h3>Signup</h3>
                    </div>
                    <form class="tg-loginform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Names">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select id="homeTeam" name="league" style="height:35px;">
                                        <option value="">Select League*</option>
                                        @foreach ($league as $league)
                                            <option>{{$league->league_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('league')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Repeat Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <button class="tg-btn tg-btn-lg" style="width: 100%; height:40px;" type="submit">Register Now</button>
                            </div>
                            <div class="tg-description">
                                <p>Already have an account? <a href="#">Login</a></p>
                            </div>
                        </fieldset>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <!--************************************
		LightBoxes End
    *************************************-->
    
    <script src="{{ asset('js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/customScrollbar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('js/prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/countTo.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $("#matchDate").change(function(){



            var GivenDate = $("#matchDate").val();
            var CurrentDate = new Date();
            GivenDate = new Date(GivenDate);

            if(GivenDate > CurrentDate){
                // alert('Given date is greater than the current date.');
                $('#errorT').empty();
                $("button").attr("disabled", false);
                $('#btnSubmit').prop('disabled', false);
            }else{
                // alert('Given date is not greater than the current date.');
                $('#errorT').html('There is no way a match can be for a previous date *');
                $("button").attr("disabled", true);
                $('#btnSubmit').prop('disabled', true);
            }
        
        });
        $("select").change(function(){
         homeTeam = $("#homeTeam").val();
         awayTeam = $("#awayTeam").val();
         if(homeTeam ===awayTeam){
            $('#btnSubmit').prop('disabled', true);
            $("button").attr("disabled", true);
            $('#errorM').html('You Cant Play same Team *');
         }else{
            $('#errorM').empty();
            $("button").attr("disabled", false);
            $('#btnSubmit').prop('disabled', false);
         }
        });
    </script>

    <script>
        
        $('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%D days %H:%M:%S'));
  });
});
     </script>
</body>
</html>