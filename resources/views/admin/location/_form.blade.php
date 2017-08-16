
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'name', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('name'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('name') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('username',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'username', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('username'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('username') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::email('email',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'email', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('email'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('email') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::password('password',['class'=>'form-control col-md-7 col-xs-12', 'id'=>'password', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('password'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('password') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">role <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::select('role', $list, null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'role', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('role'))
                          <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
                          {{ $errors->first('role') }}
                          </p>
                        @endif
                      </div>

                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="{{URL::previous()}}" class="btn btn-primary" title=""> <span class="glyphicon glyphicon-chevron-left"></span> Back</a>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>