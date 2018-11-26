@if (session('success'))
<br>
<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<center>{{ session('success') }}</center>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>		
	</div>
</div>
@endif

@if (session('info'))
<br>
<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="alert alert-info alert-dismissible fade show" role="alert" >
			<center>{{ session('info') }}</center>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
@endif

@if (session('danger'))
<br>
<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<center>{{ session('danger') }}</center>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
@endif