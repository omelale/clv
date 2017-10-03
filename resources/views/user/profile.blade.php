@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px">
            <h2>{{$user->name}}'s profile</h2>
             @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <form enctype="multipart/form-data" action="/profile_pic" method="post">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <input type="submit" class="pull-left btn btn-sm btn-primary" style="margin-top:10px;">
            </form>
        </div>
    </div>
</div>
@endsection