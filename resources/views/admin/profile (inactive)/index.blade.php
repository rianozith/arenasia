@extends('admin.dashboard')
@section('css')
	<!-- Bootstrap -->
    <link href="{{asset('../vendorsgen/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../vendorsgen/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
@endsection

@section('content')
	@include('message')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li class="active"><a href="{{ url('dashboard/profile') }}">Profile</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($profiles->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>profile</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($profiles as $profile)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('dashboard/profile/' . $profile->id) }}">{{ $profile->name }}</a></td>
					<td>{{ $profile->profilename }}</td>
					<td>{{ $profile->email }}</td>
					<td>{{ $profile->password }}</td>
					<td>{{ $profile->role }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('dashboard/profile/' . $profile->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('dashboard/profile/' . $profile->id) }}" style="display:inline" method="POST">
							<input type="hidden" name="_method" value="DELETE" />
							{{ csrf_field() }}
							<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
						</form>
						
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		@else
			<h2>No profile yet!</h2>
		@endif
	</div>
</div>
@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('../vendorsgen/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('../vendorsgen/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('js/custom.min.js')}}"></script>

@endsection
