			<div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
				<label for="name">Your Name</label>
				{!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'name', 'required'=>'required', 'placeholder'=>'E.g. Pisyek']) !!}
				@if ($errors->has('name'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('name') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('title')) has-error has-feedback @endif">
				<label for="title">Title</label>
				{!! Form::text('title',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'title', 'required'=>'required', 'placeholder'=>'E.g. Meeting with CEO Kicap Tawar Hebey']) !!}
				@if ($errors->has('title'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('title') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('time')) has-error @endif">
				<label for="time">Time</label>
				<div class="input-group">
				{!! Form::text('time',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'time', 'required'=>'required']) !!}
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
				@if ($errors->has('time'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('time') }}
					</p>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="{{URL::previous()}}" class="btn btn-info">Cancel</a>