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
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li class="active"><a href="{{ url('dashboard/schedule/list') }}">Schedule List</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($events->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Event's Title</th>
					<th>Start</th>
					<th>End</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($events as $event)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('dashboard/schedule/' . $event->id) }}">{{ $event->title }}</a></td>
					<td>{{ date("g:ia\, jS M Y", strtotime($event->start_time)) }}</td>
					<td>{{date("g:ia\, jS M Y", strtotime($event->end_time)) }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('dashboard/schedule/' . $event->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('dashboard/schedule/' . $event->id) }}" style="display:inline" method="POST">
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
			<h2>No event yet!</h2>
		@endif
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
