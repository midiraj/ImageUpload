<!DOCTYPE html>
<html>
<head>
	<title>Image Uploader</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app"><br>
	<div class="container col-lg-offset-4 col-lg-4">
		<div class="row">
			
			@if(count($errors))
				@foreach($errors->all() as $error)
					<span class="text-danger">{{$error}}</span>
				@endforeach
			@endif

			<form action="{{route('upload')}}" enctype="multipart/form-data" method="post">
				{{csrf_field()}}
				<input type="file" name="image">
				<img src="/storage/{{auth()->user()->avatar}}" alt="Image">
				<input class="btn btn-success" type="submit" name="submit">
			</form>
		</div>
	</div>
	
</div>
<script src="{{asset('js/app.js')}}"></script>
	
</style>
</body>
</html>