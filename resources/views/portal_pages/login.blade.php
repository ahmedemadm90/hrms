<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>HelloLogin - HRMS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="account-page">
    <div class="main-wrapper">
      <div class="account-content">
        {{-- <a  href="job-list.html" class="btn btn-primary apply-btn">Dumy</a> --}}
        <div class="container">
          <div class="account-logo">
            <a href="index.html"><img src="{{ asset('assets/img/logo.png')}}" alt="Admin Dashboard"></a>
          </div>
          <div class="account-box">
            <div class="account-wrapper">
              <h3 class="account-title">Login</h3>
              <p class="account-subtitle">Access to your dashboard</p>
              <form action="" method="POST" >
                <div class="form-group">
                  <label>Email Address</label>
                  <input name="email" id="login-email" class="form-control" type="text">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label>Password</label>
                    </div>
                    <div class="col-auto">
                      <a class="text-muted" href="forgot-password.html">
                      Forgot password?
                      </a>
                    </div>
                  </div>
                  <input class="form-control" name="password" id="login-password" type="password">
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-primary account-btn" type="submit">Login</button>
                </div>
                {{--
                <div class="account-footer">
                  <p>Don't have an account yet? <a href="register.html">Register</a></p>
                </div>
                --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
