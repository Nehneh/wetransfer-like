
{{ Form::open(array('url' => 'input')) }}
   {{ Form::text('username', 'Your name') }}
   {{ Form::email('emailto', 'Email to') }}
   {{ Form::email('emailfrom', 'Your email') }}
   {{ Form::file('thefile') }}
   {{ Form::submit('Transfer') }}
{{ Form::close() }}
