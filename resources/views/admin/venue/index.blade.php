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
			<li class="active"><a href="{{ url('dashboard/venue') }}">Venue</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($venues->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Venue</th>
					<th>Alamat</th>
					<th>Telp</th>
					<th>Info</th>
					<th>Daftar Lapangan</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($venues as $venue)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('dashboard/venue/' . $venue->id) }}">{{ $venue->nama_venue }}</a></td>
					<td>{{ $venue->alamat_venue }}</td>
					<td>{{ $venue->telp_venue }}</td>
					<td>{{ $venue->info_venue }}</td>
					<td><a href="{{ url('dashboard/venue/list/' . $venue->id)}}">Check</a></td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('dashboard/venue/' . $venue->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('dashboard/venue/' . $venue->id) }}" style="display:inline" method="POST">
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
			<h2>No venue yet!</h2>
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
