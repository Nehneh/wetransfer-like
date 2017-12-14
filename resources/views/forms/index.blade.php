
{{ Form::open(array('url' => 'input')) }}
   {{ Form::text('username', 'Your name') }}
   {{ Form::file('thefile') }}
   {{ Form::submit('Transfer') }}
{{ Form::close() }}
