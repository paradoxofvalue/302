@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contactblockheaders') }}">ContactBlockHeader</a> :
@endsection
@section("contentheader_description", $contactblockheader->$view_col)
@section("section", "ContactBlockHeaders")
@section("section_url", url(config('laraadmin.adminRoute') . '/contactblockheaders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "ContactBlockHeaders Edit : ".$contactblockheader->$view_col)

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
				{!! Form::model($contactblockheader, ['route' => [config('laraadmin.adminRoute') . '.contactblockheaders.update', $contactblockheader->id ], 'method'=>'PUT', 'id' => 'contactblockheader-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'small_heading')
					@la_input($module, 'big_heading')
					@la_input($module, 'text')
					@la_input($module, 'address')
					@la_input($module, 'email')
					@la_input($module, 'phone')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contactblockheaders') }}">Cancel</a></button>
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
	$("#contactblockheader-edit-form").validate({
		
	});
});
</script>
@endpush
