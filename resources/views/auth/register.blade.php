<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

  <script src="https://kit.fontawesome.com/509c72249f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/509c72249f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet" />
    
  <link href="{{ url('asset/css/common.css')}}" rel="stylesheet" />
  <link href="{{ url('asset/css/sidebar.css')}}" rel="stylesheet" />
  <link href="{{ url('asset/css/dashboard.css')}}" rel="stylesheet" />
  <link href="{{ url('asset/css/authentication.css')}}" rel="stylesheet" />

</head>          

<body class="authentication">
    <div class="authWrapper">
      <div class="authContent">
        <div class="container">
          <div class="authLogo">
            <a href="#"><img src="{{ url('asset/images/logLogo.png') }}" /></a>
          </div>

          <div class="authBox">
            <div class="auth_wrapper">
              
            <form method="POST" action="{{ route('register') }}" name="signup-form">
                @csrf 
                <div class="form-group">
                    <label>Employee ID</label>
                    <input class="form-control" type="text" name="empId" value="11001"/>
                </div>  

                <div class="form-group">
                  <label>Role Type</label>
                  <select class="form-control" name="roleId">
                    <option value="2">Manager</option>
                    <option value="3">Finance</option>
                    <option value="4">HR</option>
                    <option value="5">Employee</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Full Name</label>
                  <input class="form-control @error('fullName') is-invalid @enderror" type="text" name="fullName" value="{{ old('fullName') }}"/>
                </div> 

                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" name="email" value="demoen"/>
                </div> 

                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" value="12345"/>
                </div>

                <div class="form-group text-center">
                  <button class="btn btn-primary authBtn" type="submit">
                    Submit
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>

    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/app.js"></script>
  </body>

</html>
      