<!DOCTYPE html>
<html lang="fr">
@include('template.header')
<body>
	<div class="container">
		<div class="row">
			<div  class="col-sm-4"></div>
			<div  class="col-sm-4 center"><img src="img/logo.jpg"></div>
			<div  class="col-sm-4"></div>
		</div>		
	</div>
		<div class="row">
			<div  class="col-sm-4"></div>
			<div  class="col-sm-4 center">@yield ('content')</div>
			<div  class="col-sm-4"></div>
		</div>
	</div>

		



</body>
</html>
