@extends ('layout')

@section ('title')
	MEGATEAM-TRANSFER
@endsection

@section ('content')
		<!-- <div></div> -->
	<div class="row col-sm-6">
		<div class="fond">
		
		<div class="logo"></div>
			<h1 class="">MEGATEAM-TRANSFER <br> Partage de fichiers sur le web</h1>
		</div>
			{{ Form::open(array('url' => '/','files' => true)) }}
		    {{ Form::text('username', 'Your name') }}
		    {{ Form::email('emailto', 'Email to') }}
		    {{ Form::email('emailfrom', 'Your email') }}
		    {{ Form::file('thefile') }}
		    {{ Form::submit('Transfer') }}
		    {{ Form::close() }}
	</div>

@endsection



