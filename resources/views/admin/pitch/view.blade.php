@extends('admin.dashboard')

@section('css')
	<!-- Bootstrap -->
    <link href="{{asset('../vendorsgen/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../vendorsgen/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	{{-- date rangepicker --}}
	<link href="{{ asset('custom/daterangepicker.css') }} " rel="stylesheet">
	{{-- Full calendar --}}
	<link href="{{ asset('custom/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
	<!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
@endsection


@section('content')


<div class="row">
	<div class="col-lg-12">
		<h2>Details of {{$pitches->nama_lapangan}}, id : {{$pitches->id}}</h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>Nama Lapangan</th>
					<th>Status Lapangan</th>
					<th>Harga Lapangan</th>
					<th>Jadwal ID</th>
					<th>Booking ID</th>
					<th>Venue ID</th>
					<th>Photo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $pitches->nama_lapangan }}</td>
					<td>{{ $pitches->status_lapangan }}</td>
					<td>{{ $pitches->harga_lapangan }}</td>
					<td>{{ $pitches->jadwal_id }}</td>
					<td>{{ $pitches->booking_id }}</td>
					<td><a href="{{url('dashboard/venue/'. $pitches->venue_id)}}" title="">{{ $pitches->venue_id }}</a> </td>
					<td><a href="{{ $pitches->foto_lapangan }}" target="_blank"><img src="{{ $pitches->foto_lapangan }}" alt="" height="42" width="42"></a></td>
				</tr>
			</tbody>
		</table>
		
		<div class="">
			
			{!! Form::open(['class'=>'inline', 'method'=> 'delete', 'route' => ['pitch.destroy', $pitches->id] ]) !!}
				{{ csrf_field() }}
				<a class="btn btn-info" href="{{ URL::previous() }}">
				<span class="glyphicon glyphicon-chevron-left"></span> Back</a> 
				
				<a class="btn btn-primary" href="{{ url('dashboard/pitch/' . $pitches->id . '/edit')}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> 

				<button type="submit" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span>Delete </button>
			{!! Form::close() !!}
	
		</div>
		
	</div>
</div>
@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('../vendorsgen/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('../vendorsgen/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Fullcalendar -->
<script src="{{asset('custom/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('custom/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('js/custom.min.js')}}"></script>
<!-- Daterengepicker -->
<script src="{{asset('custom/daterangepicker.js')}}"></script>


<script src="{{ url('_asset/js') }}/daterangepicker.js"></script>
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY HH:mm:ss",
			"separator": " - ",
		}
	});
});
</script>
@endsection