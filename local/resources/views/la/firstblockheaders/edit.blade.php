@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/firstblockheaders') }}">FirstBlockHeader</a> :
@endsection
@section("contentheader_description", $firstblockheader->$view_col)
@section("section", "FirstBlockHeaders")
@section("section_url", url(config('laraadmin.adminRoute') . '/firstblockheaders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "FirstBlockHeaders Edit : ".$firstblockheader->$view_col)

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
				{!! Form::model($firstblockheader, ['route' => [config('laraadmin.adminRoute') . '.firstblockheaders.update', $firstblockheader->id ], 'method'=>'PUT', 'id' => 'firstblockheader-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'small_heading')
					@la_input($module, 'big_heading')
					@la_input($module, 'text')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/firstblockheaders') }}">Cancel</a></button>
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
	$("#firstblockheader-edit-form").validate({
		
	});
});
</script>
@endpush
