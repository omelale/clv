<title>Register</title>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome</h1>
          <h2 class="text-center">Register to our site</h2>
        </div>
         <div class="modal-body">
            <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <input type="text"id="name" name="name" class="form-control input-lg" placeholder="Name"/>
                 @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                 @endif
             </div>
             
             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <input type="text"id="email" name="email" class="form-control input-lg" placeholder="E-mail"/>
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
             </div>

             <div class="form-group">
                 <input type="password" id="password" class="form-control input-lg" name="password" placeholder="Password"/>
                 @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
             </div>
             
             <div class="form-group">
                 <input type="password" id="password-confirm" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password"/>
             </div>
            

             <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Register"/>
             </div>
             </form>
         </div>
    </div>
 </div>