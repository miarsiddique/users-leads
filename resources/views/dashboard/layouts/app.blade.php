<!DOCTYPE html>
<html lang="en">

@include('dashboard.includes.head')

<body class="bg-gradient-primary">
	<div class="container">
		<!-- Outer Row -->
		<br>
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12 col-md-9">
				@include('dashboard.includes.flash-message')
				@if($errors->any())
				    @foreach ($errors->all() as $error)
				        <div class="alert alert-danger alert-block">{{ $error }}</div>
				    @endforeach
				@endif
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0" style="height: 525px">
						<!-- Nested Row within Card Body -->
						<div class="row">
							@yield('image')
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">@yield('heading')</h1>
									</div>
									@yield('content')
									<br><br>
									<div class="text-center"></div>
									<div class="text-center"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	@include('dashboard.includes.javascripts')

</body>
</html>
