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

	@include('message')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">You are here: Home</li>
			<li class=""> schedule</li>
		</ol>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div id='calendar'></div>
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

<script type="text/javascript">
	$(document).ready(function() {
		
		var base_url = '{{ url('/') }}';

		$('#calendar').fullCalendar({
			weekends: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: base_url + '/api',
				error: function() {
					alert("cannot load json");
				}
			}
		});
	});
</script>
@endsection