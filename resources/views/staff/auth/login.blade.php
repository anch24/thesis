<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/material/assets/images/favicon.png">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="/material/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/material/html/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/material/html/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">

    <div class="container">
        <div class="col-lg-5 col-xlg-6 col-md-4 mx-auto m-t-40">

            <div class="card">
                <div class="card-block">
                    <center class="m-t-30 m-b-40"> <img src="/material/assets/images/users/1.jpg" class="img-circle" width="100" />
                        <h4 class="card-title m-t-10">{{ __('Login as Staff') }}</h4>
                    </center>
                    <form method="POST" action="{{ route('staff.login') }}" class="form-horizontal form-material mt-30" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" placeholder="Email or Username" class="form-control form-control-line {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" name="email" id="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="password" placeholder="Password" class="form-control form-control-line {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <a class="btn btn-link text-left" href="{{ route('admin.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                                <button type="submit" class="btn btn-success text-right">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>