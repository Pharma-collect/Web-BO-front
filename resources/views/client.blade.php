@extends('layouts.layout_master')

@section('content')

<style>
body {
  margin: 0;
  padding: 0;
  background-color: #81aa66;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

#login-box{
    border-radius: 20px;
}

.btn-info {
color: #fff;
background-color: #81aa66;
border-color: #81aa66;
}

.text-info {
    color: #81aa66!important;
}

#register .container #register-row #register-column #register-box {
  margin-top: 120px;
  max-width: 600px;
  height: 600px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#register .container #register-row #register-column #register-box #register-form {
  padding: 20px;
}
#register .container #register-row #register-column #register-box #register-form #register-link {
  margin-top: -85px;
}

#register-box{
    border-radius: 5%;
}

.btn {
color: #fff;
background-color: #81aa66;
border-color: #81aa66;
width: 10em;
}

</style>

<body>

<div class="row">
    
    <div class="col-lg-6">
   
    <div id="login">
    
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ url('login') }}" method="POST">
                        @csrf
                            <h3 class="text-center text-info">Login</h3>
                           
                            <div class="form-group">
                            <label for="username" class="text-info">Your UserName</label><br>
                                <div class="cols-sm-10">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
                            </div>
                            <div class="form-group">
                            <label for="password" class="text-info">Password</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/register" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    


    <div class="col-lg-6">

    <div id="register">
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="{{ url('register') }}" method="POST">
                        @csrf
                            <h3 class="text-center text-info">Register</h3>
                            
                            <div class="form-group">
                                <label for="firstname" class="text-info">Your FirstName</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								        <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="Enter your FirstName"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="text-info">Your LastName</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								        <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Enter your LastName"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">Your Email</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							            <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                     </div> 
                                </div>
                            </div>
                            

                            <div class="form-group">
                            <label for="username" class="text-info">Your UserName</label><br>
                                <div class="cols-sm-10">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
                            </div>




                            <div class="form-group">
                            <label for="password" class="text-info">Password</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="confirm-password" class="text-info">Confirm Password</label><br>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm your Password">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="position">
                                <div class="form-group">
                                
                                    <input type="submit" name="submit" class="btn" value="submit">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</div>


</body>




@endsection

