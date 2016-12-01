@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/fourthblockheaders') }}">FourthBlockHeader</a> :
@endsection
@section("contentheader_description", $fourthblockheader->$view_col)
@section("section", "FourthBlockHeaders")
@section("section_url", url(config('laraadmin.adminRoute') . '/fourthblockheaders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "FourthBlockHeaders Edit : ".$fourthblockheader->$view_col)

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
				{!! Form::model($fourthblockheader, ['route' => [config('laraadmin.adminRoute') . '.fourthblockheaders.update', $fourthblockheader->id ], 'method'=>'PUT', 'id' => 'fourthblockheader-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'big_heading')
					@la_input($module, 'small_heading')
					@la_input($module, 'text')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/fourthblockheaders') }}">Cancel</a></button>
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
	$("#fourthblockheader-edit-form").validate({
		
	});
});
</script>
@endpush
