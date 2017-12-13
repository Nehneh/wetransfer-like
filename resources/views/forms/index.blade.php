
{{ Form::open(array('url' => 'input')) }}
   
   {{ Form::text('username', 'Your name') }}
   {{ Form::email('youremail', 'Your email') }}
   {{ Form::email('email', 'Email to') }}
   {{ Form::file('thefile') }}
   {{ Form::submit('Transfer') }}
   {{ Form::close() }}
