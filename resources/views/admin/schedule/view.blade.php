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
		<h2>{{ $event->title }} <small>booked by {{ $event->name }}</small></h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		<p>Time: <br>
		{{ date("g:ia\, jS M Y", strtotime($event->start_time)) . ' until ' . date("g:ia\, jS M Y", strtotime($event->end_time)) }}
		</p>
		
		<p>Duration: <br>
		{{ $duration }}
		</p>
		
		<p>
			<form action="{{ url('dashboard/schedule/' . $event->id) }}" style="display:inline;" method="POST">
				<input type="hidden" name="_method" value="DELETE" />
				{{ csrf_field() }}
				<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
			</form>
			<a class="btn btn-primary" href="{{ url('dashboard/schedule/' . $event->id . '/edit')}}">
				<span class="glyphicon glyphicon-edit"></span> Edit</a> 
			
		</p>
		
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