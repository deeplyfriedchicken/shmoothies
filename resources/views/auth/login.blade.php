<html>
<head>
  <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
</head>
<body>
<div class="login-page">
  <div class="form">
      <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}
      <input type="text" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>
      @if ($errors->has('username'))
          <span class="help-block">
              <strong>{{ $errors->first('username') }}</strong>
          </span>
      @endif

      <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
      <button type="submit">login</button>
      <p class="message">
        <a href="{{ url('/password/reset') }}">
            Forgot Your Password?
        </a>
      </p>
      <p class="message">Not registered? <a href="{{ url('/register') }}">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
