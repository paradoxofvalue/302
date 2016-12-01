@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/thirdblocklinks') }}">ThirdBlockLink</a> :
@endsection
@section("contentheader_description", $thirdblocklink->$view_col)
@section("section", "ThirdBlockLinks")
@section("section_url", url(config('laraadmin.adminRoute') . '/thirdblocklinks'))
@section("sub_section", "Edit")

@section("htmlheader_title", "ThirdBlockLinks Edit : ".$thirdblocklink->$view_col)

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
				{!! Form::model($thirdblocklink, ['route' => [config('laraadmin.adminRoute') . '.thirdblocklinks.update', $thirdblocklink->id ], 'method'=>'PUT', 'id' => 'thirdblocklink-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'heading')
					@la_input($module, 'decription')
					@la_input($module, 'link')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/thirdblocklinks') }}">Cancel</a></button>
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
	$("#thirdblocklink-edit-form").validate({
		
	});
});
</script>
@endpush
