@extends('layouts.front.master')

@section('title', 'Register')

@section('body')

<div id="fh5co-main">
    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Register to join LaraSCI
                        <span class="fh5co-border"></span>
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Please fill the fields below!</h3>
            </div>
            <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                @foreach($errors->all() as $error)
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-danger col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{ $error }}
                    </div>
                </div>                
                @endforeach

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">First Name</label>
                        <input placeholder="Please enter your first name" name="first_name" value="{{ Input::old('first_name') }}" type="text" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Last Name</label>
                        <input placeholder="Please enter your last name" name="last_name" value="{{ Input::old('last_name') }}" type="text" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Email</label>
                        <input placeholder="Please enter your email" name="email" value="{{ Input::old('email') }}" type="email" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="">Please choose a profile Picture</label>
                        <input name="picture" type="file">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message" class="sr-only">Short bio</label>
                        <textarea placeholder="Say something about yourself" name="bio" class="form-control input-lg" rows="3">{{ Input::old('bio') }}</textarea>
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="sr-only">Password</label>
                        <input placeholder="Password" name="password" type="password" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="sr-only">Confirm Password</label>
                        <input placeholder="Confirm Password" name="password_confirmation" type="password" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Register">
                        <input type="reset" class="btn btn-outline  " value="Reset">
                    </div>	
                </div>
            </form>	
        </div>
    </div>
</div>

@stop