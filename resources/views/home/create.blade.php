@extends('layouts.app')
@section('content')
<div class="container-fluid" style="margin-top: 10px">
	<div class="row">
		<div class="col-sm-10">
			<form class="form-horizontal" method="POST" action="{{ url('/home')}}">
			{!! csrf_field() !!}	
				<div class="form-group">
					<label class="control-label col-sm-2">Judul</label>
					<div class="col-sm-10">
						<input type="judul" name="judul" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<textarea class="form-control" name="deskripsi"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</div>
				</div>		
			</form>
		</div>
		<div class="col-sm-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Menu
				</div>
				<div class="panel-body">
					<a href="{{url('home')}}" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection