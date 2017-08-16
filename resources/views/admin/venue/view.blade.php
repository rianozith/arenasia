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
		<h2>Details of {{$venue->nama_venue}}, id : {{$venue->id}}</h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>id</th>
					<th>Nama Venue</th>
					<th>Alamat</th>
					<th>No Telp</th>
					<th>Info Venue</th>
					<th>lapangan ID</th>
					<th>Lokasi ID</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$venue->id }}</td>
					<td>{{$venue->nama_venue }}</td>
					<td>{{$venue->alamat_venue }}</td>
					<td>{{$venue->telp_venue }}</td>
					<td>{{$venue->info_venue }}</td>
					<td>{{$venue->lapangan_id }}</td>
					<td><a href="{{url('dashboard/location/'. $venue->lokasi_id)}}" title="">{{$venue->lokasi_id }}</a> </td>
				</tr>
			</tbody>
		</table>
		
		<div class="">
			
			{!! Form::open(['class'=>'inline', 'method'=> 'delete', 'route' => ['venue.destroy', $venue->id] ]) !!}
				{{ csrf_field() }}
				<a class="btn btn-info" href="{{ URL::previous() }}">
				<span class="glyphicon glyphicon-chevron-left"></span> Back</a> 
				
				<a class="btn btn-primary" href="{{ url('dashboard/venue/' . $venue->id . '/edit')}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> 

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