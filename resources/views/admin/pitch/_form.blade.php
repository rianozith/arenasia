
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lapangan">Nama Lapangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nama_lapangan',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'nama_lapangan', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('nama_lapangan'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('nama_lapangan') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_lapangan">Status Lapangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('status_lapangan',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'status_lapangan', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('status_lapangan'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('status_lapangan') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="harga_lapangan" class="control-label col-md-3 col-sm-3 col-xs-12">Harga Lapangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('harga_lapangan',null,['class'=>'form-control col-md-7 col-xs-12', 'id'=>'harga_lapangan', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('harga_lapangan'))
													<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
													{{ $errors->first('harga_lapangan') }}
													</p>
												@endif
                      </div>

                      <div class="form-group">
                        <label for="venue_id" class="control-label col-md-3 col-sm-3 col-xs-12">Venue ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::select('venue_id', $venue_id , null, ['placeholder' => 'Pilih Venue...', 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'venue_id', 'required'=>'required']) !!}
                        </div>
                        @if ($errors->has('venue_id'))
                          <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
                          {{ $errors->first('venue_id') }}
                          </p>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="foto_lapangan" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Lapangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          {!! Form::file('foto_lapangan') !!}
                        </div>
                        @if ($errors->has('foto_lapangan'))
                          <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
                          {{ $errors->first('foto_lapangan') }}
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