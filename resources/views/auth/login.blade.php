 
  
  @include('includes.header_css')
  <div class="authentication">
  <div class="authWrapper">
      <div class="authContent">
        <div class="container">
          <div class="authLogo">
            <a href="#"><img src="{{ url('asset/images/logLogo.png') }}" /></a>
          </div>

          <div class="authBox">
            <div class="auth_wrapper">
              
            <form method="POST" action="{{ route('login') }}" name="signin-form">
              @csrf 
                <div class="form-group">
                  <label>Email Address</label>
                  <input class="form-control" type="text" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <div class="position-relative">
                    <input class="form-control" type="password" name="password" value="123456" id="password"/>
                    <span class="fa fa-eye-slash" id="toggle-password"></span>
                  </div>
                </div>

                <div class="form-group text-center">
                  <button class="btn btn-primary authBtn" type="submit" name="login">
                    Login
                  </button>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Stay Logged in</span>
                      </label>
                    </div>
                    <div class="col-auto">
                      <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 @includes('includes.footer')
