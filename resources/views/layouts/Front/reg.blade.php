<?php $total_price = 0 ?>
<div class="logining">
    <div class="logining_body">
      <div class="left_dec">
        <h1>Login</h1>
        <p>By creating an account you will be able to shop faster, be up to date on an order’s status, and keep track of the orders you have previously made.</p>
      </div>
      <div class="right_log">
        <i class="glyphicon glyphicon-remove" id="hiddenlog"></i>
        <a id="btnlog">Log in</a>
        <a id="btnsign">Sign Up</a>
        <div class="clearfix"></div>
        <form method="POST" action="{{ route('login') }} " id="form1">
          @csrf
          <div class="form-group">
                <input placeholder="@lang('site.email')" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          <div class="form-group">
              <input placeholder="@lang('site.password')" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              @if (Route::has('password.request'))
                <a id="forget" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
          </div>
          <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Secure Login') }}
                  </button>
              </div>
          </div>
        </form>
        <form method="POST" action="{{ route('register') }}" id="form2">
          @csrf
          <div class="form-group row">
              <div class="col-md-12">
                  <input id="name" placeholder="Write Name " type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-12">
                  <input id="email" placeholder="Write Email " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-12">
                  <input id="password" placeholder="Write Password " type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-12">
                  <input id="password-confirm" placeholder="Confirm Password " type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
              </div>
          </div>
      </form>
        <img src="{{asset('front/images/log_img.jpg')}}"> 
      </div>
      </div>
    </div>
  </div>
      <div class="top_header">
    <div class="container">
      <div class="row">
        <div class="free_ship">
          <img src="{{asset('front/images/van.png')}}" id="myvan">
          <h1>FREE SHIPPING</h1>
        </div>
        <div class="mobile">
          <img src="{{asset('front/images/mob.png')}}" id="mob1">
          <h1>+201124928786</h1>
        </div>
        <div class="em_bar">
          
        </div>
        <div class="social">
          <a href="https://facebook.com/hamadasalah123"><i class="fa fa-facebook"></i></a>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-pinterest-p"></i>
        </div>
        @if (Route::has('login'))
            @auth
                <div class="after_log">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{auth()->user()->name}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <a class="dropdown-item"><button class="btn">Logout</button></a>
                      </form>
                    </div>
                  </div>
                  
                </div>
            @else
            <div class="log">
              <img src="{{asset('front/images/log.png')}}">
              <a id="log_click" >LOGIN</a>
            </div>
                @if (Route::has('register'))
                <div class="reg">
                  <a id="sign_click">REGISTER</a>
                </div>        
                @endif
            @endauth
    @endif
      </div>
    </div>
  </div>
