				<div class="form-group">
						{!! Form::label('title', 'Title',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('image', 'Image',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('image', Input::old('image'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('synopsis', 'Synopsis',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('synopsis', Input::old('synopsis'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('slug', 'Slug',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('slug', Input::old('slug'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('release_date', 'Release Date',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::input('date','release_date', Input::old('release_date'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('director', 'Director',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('director', Input::old('director'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('writer_1', 'Writer',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('writer_1', Input::old('writer_1'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('actor_1', 'Actor',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::text('actor_1', Input::old('actor_1'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('date_created', 'Date Added', array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::input('date','date_created', Carbon\Carbon::now()->format('Y-m-d'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('rating', 'Rating',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::select('rating',array('G', 'PG', 'PG-13', 'R','NC-17'), Input::old('rating'), array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="form-group">
						{!! Form::label('categories', 'Categories',array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::select('categories', array('d' =>'Drama', 'a' => 'Action', 'c' => 'Comedy','s' => 'Suspense','h' => 'Horror', 'w' =>'Western','r' => 'Romance'), Input::old('categories'), array('class' => 'form-control')) !!}
					</div>
				</div>



				<div class="form-group">
					<div class="col-md-7 col-md-offset-3">
						<div class="col-md-8">
							{!! Form::submit($submitButtonText, array('class' => 'btn btn-primary btn-md')) !!}
						</div>
					</div>
				</div>