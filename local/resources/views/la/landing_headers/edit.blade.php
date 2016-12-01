@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/landing_headers') }}">Landing header</a> :
@endsection
@section("contentheader_description", $landing_header->$view_col)
@section("section", "Landing headers")
@section("section_url", url(config('laraadmin.adminRoute') . '/landing_headers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Landing headers Edit : ".$landing_header->$view_col)

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
				{!! Form::model($landing_header, ['route' => [config('laraadmin.adminRoute') . '.landing_headers.update', $landing_header->id ], 'method'=>'PUT', 'id' => 'landing_header-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'big_text')
					@la_input($module, 'small_text')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/landing_headers') }}">Cancel</a></button>
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
	$("#landing_header-edit-form").validate({
		
	});
});
</script>
@endpush
