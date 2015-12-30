<!DOCTYPE html>
<html lang="en">
<head>
	<title>Twitter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="{{ elixir('css/app.css') }}" />

	@yield('header_styles')
	
</head>
<body id="app">

	<div class="container">
		<div class="row">
			<div class="col-md-3">

			</div>

			<div class="col-md-6">

				<tweets :tweets = "tweets">
				
				</tweets>


{{-- 				<ul class="list-group">
					<li class="list-group-item">
						<ul class="media-list">
							<li class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="http://placehold.it/60x60" alt="Image" />
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									</p>

									<button>Reply</button>

									<button>Retweet</button>

									<button>Like</button>
								</div>
							</li>
						</ul>
					</li>
				</ul> --}}
			</div>

			<div class="col-md-3">

			</div>
		</div>
	</div>

	<script src="/js/main.js"></script>
</body>
</html>