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
    <!--************************************
		LightBoxes Start
	*************************************-->
    <div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="tg-modal-content">
                <div class="tg-formarea">
                    <div class="tg-border-heading">
                        <h3>Login</h3>
                    </div>
                    <form class="tg-loginform" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="userName/email" class="form-control" placeholder="username/email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="password">
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
                <div class="tg-logintype">
                    <div class="tg-border-heading">
                        <h3>Login with</h3>
                    </div>
                    <ul>
                        <li class="tg-facebook"><a href="#">facebook</a></li>
                        <li class="tg-twitter"><a href="#">twitter</a></li>
                        <li class="tg-googleplus"><a href="#">google+</a></li>
                        <li class="tg-linkedin"><a href="#">linkedin</a></li>
                    </ul>
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
                    <form class="tg-loginform" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="userName" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <div class="tg-note">
                                    <i class="fa fa-exclamation-circle"></i>
                                    <span>We will email you your password.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                            </div>
                            <div class="tg-description">
                                <p>Already have an account? <a href="#">Login</a></p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="tg-logintype">
                    <div class="tg-border-heading">
                        <h3>Signup with</h3>
                    </div>
                    <ul>
                        <li class="tg-facebook"><a href="#">facebook</a></li>
                        <li class="tg-twitter"><a href="#">twitter</a></li>
                        <li class="tg-googleplus"><a href="#">google+</a></li>
                        <li class="tg-linkedin"><a href="#">linkedin</a></li>
                    </ul>
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
        
        $('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%D days %H:%M:%S'));
  });
});
     </script>
</body>
</html>