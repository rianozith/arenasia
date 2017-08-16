@if(Session::has('success'))
<div class="row">
	<div class="">
		<div class="alert alert-success " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4>Success </h4> <h5>{{ Session::get('success') }}</h5>
		</div>
	</div>
</div>
@endif

@if(Session::has('delete'))
<div class="row">
	<div class="">
		<div class="alert alert-success " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4>Success </h4> <h5>{{ Session::get('delete') }}</h5>
		</div>
	</div>
</div>
@endif

@if(Session::has('warning'))
<div class="row">
	<div class="">
		<div class="alert alert-warning " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4>Warning </h4> <h5>{{ Session::get('warning') }}</h5>
		</div>
	</div>
</div>
@endif
