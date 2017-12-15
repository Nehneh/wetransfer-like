<!-- 	//Form::open(array('url' => 'upload','files' => true))  -->

		<h1>upload a file</h1>
{{ Form::open(array('url' => '/','files' => true)) }}
   {{ Form::text('username', 'Your name') }}
   {{ Form::email('emailto', 'Email to') }}
   {{ Form::email('emailfrom', 'Your email') }}
   {{ Form::file('thefile') }}
   {{ Form::submit('Transfer') }}
{{ Form::close() }}
