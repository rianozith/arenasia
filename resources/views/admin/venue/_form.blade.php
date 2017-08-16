
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_venue">Nama Venue <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nama_venue',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'nama_venue', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('nama_venue'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('nama_venue') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_venue">Alamat Venue <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('alamat_venue',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'alamat_venue', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('alamat_venue'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('alamat_venue') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="telp_venue" class="control-label col-md-3 col-sm-3 col-xs-12">Telp Venue</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('telp_venue',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'telp_venue', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('telp_venue'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('telp_venue') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="info_venue" class="control-label col-md-3 col-sm-3 col-xs-12">Info Venue</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('info_venue',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'info_venue', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('info_venue'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('info_venue') }}
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