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


<div class="row">
	<div class="col-lg-12">
		<h2>Details of {{$profile->name}}, id : {{$profile->id}}</h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>profilename</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$profile->id }}</td>
					<td>{{$profile->name }}</td>
					<td>{{$profile->profilename }}</td>
					<td>{{$profile->email }}</td>
					<td>{{$profile->password }}</td>
					<td>{{$profile->role }}</td>
					
				</tr>
			</tbody>
		</table>
		
		<div class="">
			
			{!! Form::open(['class'=>'inline', 'method'=> 'delete', 'route' => ['profile.destroy', $profile->id] ]) !!}
				{{ csrf_field() }}
				<a class="btn btn-info" href="{{ URL::previous() }}">
				<span class="glyphicon glyphicon-chevron-left"></span> Back</a> 
				
				<a class="btn btn-primary" href="{{ url('dashboard/profile/' . $profile->id . '/edit')}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> 

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
<!-- Custom Theme Scripts -->
<script src="{{asset('js/custom.min.js')}}"></script>
@endsection