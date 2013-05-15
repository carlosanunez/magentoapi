<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>{{$title}}</title>
	{{Asset::container('header')->styles()}}
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div id="container">
		<h1 id="pagetitle">{{$pagetitle}}</h1>
		@foreach($apilist as $api)
			<div class="row head-row">
				<h3>{{ $api->title }}</h3>
			</div>
			<table border="0">
				@foreach($api->methods as $method)
					<tr>
						<td>
							<div class="row">
								<span class="title">Method</span>
								<span>{{ $api->name }}.{{ $method->name }}</span>
							</div>
						</td>
						<td>
							@if(isset($method->aliases[0]))
								<div class="row">
									<span class="title">Alias</span>
									<span>{{ $method->aliases[0] }}</span>
								</div>
							@endif
						</td>
						<td>
							<span class="method-title">{{ $method->title }}</span>
						</td>
					</tr>
				@endforeach
			</table>
		@endforeach
    </div>
</body>
</html>