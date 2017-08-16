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
			<li class="active"><a href="{{ url('dashboard/pitch') }}">Pitch</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($pitches->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Lapangan</th>
					<th>Status Lapangan</th>
					<th>Harga Lapangan</th>
					<th>Jadwal ID</th>
					<th>Booking ID</th>
					<th>Pemilik Lapangan</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($pitches as $pitch)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('dashboard/pitch/' . $pitch->id) }}">{{ $pitch->nama_lapangan }}</a></td>
					<td>{{ $pitch->status_lapangan }}</td>
					<td style="text-align: left;">Rp. <span style="float:right;">{{ number_format($pitch->harga_lapangan) }}</span></td>
					<td style="text-align: center">{{ $pitch->jadwal_id }}</td>
					<td style="text-align: center">{{ $pitch->booking_id }}</td>
					<td>{{ $pitch->nama_venue }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('dashboard/pitch/' . $pitch->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('dashboard/pitch/' . $pitch->id) }}" style="display:inline" method="POST">
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
			<h2>No pitch yet!</h2>
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
