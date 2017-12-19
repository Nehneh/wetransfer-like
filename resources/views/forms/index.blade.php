@extends ('layout')

@section ('title')
	MEGATEAM-TRANSFER
@endsection

@section ('content')
	
				<h1 class="center"><span class="bleu">ME</span><span class="vert">GA</span><span class="jaune">TE</span><span class="orange">AM</span> <h1 class="center"><span class="bleu">TR</span><span class="vert">AN</span><span class="jaune">SF</span><span class="orange">ER</span> </h1><br><br><br> <p>Partage de fichiers sur le web</p>
		
			{{ Form::open(array('url' => '/','files' => true)) }}
		    {{ Form::text('username', 'Your name') }}
		    {{ Form::email('emailto', 'Email to') }}
		    {{ Form::email('emailfrom', 'Your email') }}
		    <br><br>
		    {{ Form::file('thefile') }}
		    <br><br>
		    {{ Form::submit('Transfer') }}
		    {{ Form::close() }}
			
			
	

@endsection



