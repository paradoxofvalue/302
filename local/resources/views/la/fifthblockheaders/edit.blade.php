@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/fifthblockheaders') }}">FifthBlockHeader</a> :
@endsection
@section("contentheader_description", $fifthblockheader->$view_col)
@section("section", "FifthBlockHeaders")
@section("section_url", url(config('laraadmin.adminRoute') . '/fifthblockheaders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "FifthBlockHeaders Edit : ".$fifthblockheader->$view_col)

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
				{!! Form::model($fifthblockheader, ['route' => [config('laraadmin.adminRoute') . '.fifthblockheaders.update', $fifthblockheader->id ], 'method'=>'PUT', 'id' => 'fifthblockheader-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'small_heading')
					@la_input($module, 'big_heading')
					@la_input($module, 'text')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/fifthblockheaders') }}">Cancel</a></button>
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
	$("#fifthblockheader-edit-form").validate({
		
	});
});
</script>
@endpush
