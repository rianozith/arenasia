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
			<li><a href="{{ url('dashboard/schedule') }}">Schedule</a></li>
			<li class="active">Add new Schedule</li>
		</ol>
	</div>
</div>

@include('message')


          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Schedule <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
									{!! Form::open(['route' => 'schedule.store', 'class' => 'form-horizontal form-label-left', 'data-parsley-validate']) !!}
										{{ csrf_field() }}
										@include('admin.schedule._form')

									{!! Form::close() !!}
									</div>
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

<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"minDate": moment('<?php echo date('Y-m-d G')?>'),
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