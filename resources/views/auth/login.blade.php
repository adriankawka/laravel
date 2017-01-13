@extends('app')
@include('partials.header')
@section('template_title')
	Login
@endsection

@section('content')
<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ Lang::get('titles.login') }}</div> -->
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
				<div class="panel-body">

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<div class="form-group">
								<strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}<br /><br />
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
									<li>{!! HTML::link(url('/password/email'), Lang::get('auth.forgot_message'), array('id' => 'forgot_message',)) !!}</li>
								</ul>

							</div>
						</div>
					@endif

					{!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class' => 'lockscreen-credentials form-horizontal', 'role' => 'form')) !!}
						<div class="form-group">
							<!-- {!! Form::label('email', Lang::get('auth.email') , array('class' => 'col-sm-4 control-label')); !!} -->
							<!-- <div class="col-sm-6"> -->
								{!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_email'), 'required' => 'required',)) !!}
								<!-- <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span> -->
							<!-- </div> -->
						</div>
						<div class="form-group">
							<!-- {!! Form::label('password', Lang::get('auth.password') , array('class' => 'col-sm-4 control-label')); !!} -->
							<!-- <div class="col-sm-6"> -->
								{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_password'), 'required' => 'required',)) !!}
								<!-- <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span> -->
							<!-- </div> -->
						</div>
						<!-- <div class="form-group">
							<div class="col-sm-6 col-xs-offset-1 col-sm-offset-4">
								<div class="checkbox">
									{!! Form::checkbox('remember', 'remember', true, array('id' => 'remember')); !!}
									{!! Form::label('remember', Lang::get('auth.rememberMe')); !!}
								</div>
							</div>
						</div> -->
						<div class="form-group">
							<!-- <div class="col-sm-6 col-sm-offset-3"> -->
								{!! Form::button(Lang::get('auth.login'), array('class' => 'btn btn-primary block full-width m-b','type' => 'submit')) !!}
								{!! HTML::link(url('/password/email'), Lang::get('auth.forgot'), array('id' => 'forgot', 'class' => 'btn btn-link')) !!}
							<!-- </div> -->
								 <p class="text-muted text-center"><small>Do not have an account?</small></p>
               					 <a class="btn btn-sm btn-white btn-block" href="/sign up">Create an account</a>
						</div>
						<!-- <p class="text-center">Or</p>
						<div class="form-group">
							<div class="col-sm-6 col-sm-offset-3">
								{!! HTML::link(route('social.redirect', ['provider' => 'facebook']), 'Facebook', array('class' => 'btn btn-lg btn-primary btn-block facebook')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'twitter']), 'Twitter', array('class' => 'btn btn-lg btn-primary btn-block twitter')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'google']), 'Google +', array('class' => 'btn btn-lg btn-primary btn-block google')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'github']), 'GitHub', array('class' => 'btn btn-lg btn-primary btn-block github')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'youtube']), 'YouTube', array('class' => 'btn btn-lg btn-primary btn-block youtube')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'twitch']), 'Twitch', array('class' => 'btn btn-lg btn-primary btn-block twitch')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => 'instagram']), 'Instagram', array('class' => 'btn btn-lg btn-primary btn-block instagram')) !!}
								{!! HTML::link(route('social.redirect', ['provider' => '37signals']), 'Basecamp 37signals', array('class' => 'btn btn-lg btn-primary btn-block 37signals')) !!}
							</div>
						</div> -->
					{!! Form::close() !!}
					 <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
				</div>
			</div>
		</div>

