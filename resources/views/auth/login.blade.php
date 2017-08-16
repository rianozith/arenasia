<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arenasia Login Page | </title>

    <!-- Bootstrap -->
    <link href="{{asset('../vendorsgen/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../vendorsgen/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <h1>Login Form</h1>
              <div>
                <input id="username" type="text" class="form-control" placeholder="Username / Email" name="username" value="{{ old('username') }}" required autofocus/>
                  @if ($errors->has('username'))
                    <span class="help-block">
                      <stron style="color: red"g>{{ $errors->first('username') }}</strong>
                    </span>
                  @endif
              </div>

              {{-- <div>
                <input id="email" type="text" class="form-control" placeholder="Username / Email" name="email" value="{{ old('email') }}" required autofocus/>
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
              </div> --}}

              <div>
                <input id="password" type="password" class="form-control" name="password" required  placeholder="Password"/>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong style="color: red">{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
               
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> Arenasia</h1>
                  <p>©2017 All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
              <h1>Create Account</h1>
              <div>
                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
              <div>
                <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                  @if ($errors->has('username'))
                      <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif
              </div>
              <div>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="" required autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
              <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> Arenasia</h1>
                  <p>©2017 All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>