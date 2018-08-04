@extends('admin.layout.layout')

@section('head')
<title>Admin Profile</title>
@stop

@section('content')

	 <style type="text/css">
    label{
      color: black;
    }
  </style>

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
          
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Setting Lists</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              	<div class="container" style="padding-bottom: 40px;">
              		<div class="row">
	                	<div class="col-md-12">
		                	{!! Form::open(['method' => 'POST', 'route' => 'admin.setting.post']) !!}
			                	
			                	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                	    {!! Form::label('name', 'Name') !!}
			                	    {!! Form::text('name', Auth::user()->name, ['class' => 'form-control', 'required' => 'required']) !!}
			                	    <small class="text-danger">{{ $errors->first('name') }}</small>
			                	</div>

			                	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                	    {!! Form::label('email', 'Email address') !!}
			                	    {!! Form::email('email', Auth::user()->email, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
			                	    <small class="text-danger">{{ $errors->first('email') }}</small>
			                	</div>

			                	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                	    {!! Form::label('password', 'Password') !!}
			                	    {!! Form::password('password', ['class' => 'form-control']) !!}
			                	    <small class="text-danger">{{ $errors->first('password') }}</small>
			                	</div>
								

								<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								               	        {!! Form::label('password_confirmation', 'Confirm Password') !!}
								               	        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
								               	        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
								               	    </div>               	    
			                	 {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
			                	    
			                	
			                	{!! Form::close() !!}
			                </div>

			                
	                </div>
              	</div>
                
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection