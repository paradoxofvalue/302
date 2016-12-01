@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/fourthblocklasts') }}">FourthBlockLast</a> :
@endsection
@section("contentheader_description", $fourthblocklast->$view_col)
@section("section", "FourthBlockLasts")
@section("section_url", url(config('laraadmin.adminRoute') . '/fourthblocklasts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "FourthBlockLasts Edit : ".$fourthblocklast->$view_col)

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
				{!! Form::model($fourthblocklast, ['route' => [config('laraadmin.adminRoute') . '.fourthblocklasts.update', $fourthblocklast->id ], 'method'=>'PUT', 'id' => 'fourthblocklast-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'additional')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/fourthblocklasts') }}">Cancel</a></button>
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
	$("#fourthblocklast-edit-form").validate({
		
	});
});
</script>
@endpush
