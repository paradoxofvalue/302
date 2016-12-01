@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/mymoduls') }}">Mymodul</a> :
@endsection
@section("contentheader_description", $mymodul->$view_col)
@section("section", "Mymoduls")
@section("section_url", url(config('laraadmin.adminRoute') . '/mymoduls'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Mymoduls Edit : ".$mymodul->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($mymodul, ['route' => [config('laraadmin.adminRoute') . '.mymoduls.update', $mymodul->id ], 'method'=>'PUT', 'id' => 'mymodul-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'apolo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/mymoduls') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#mymodul-edit-form").validate({
		
	});
});
</script>
@endpush
