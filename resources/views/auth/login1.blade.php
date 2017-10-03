<title>Login</title>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome</h1>
          <h2 class="text-center">Log in to our site</h2>
        </div>
         <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <input type="text"id="email" name="email" class="form-control input-lg" placeholder="E-mail"/>
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
             </div>

             <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                 <input type="password" id="password" class="form-control input-lg" name="password" placeholder="Password"/>
                 @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
             </div>

             <div class="form-group">
                <div class="col-md-6 pull-left">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                        
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                 <span class="pull-right"><a href="{{url('/register')}}">Register</a></span><span><a href="{{route('password.request')}}">Forgot Password</a></span>
             </div>
             </form>
         </div>
    </div>
 </div>