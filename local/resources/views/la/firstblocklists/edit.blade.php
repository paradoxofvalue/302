@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/firstblocklists') }}">FirstBlockList</a> :
@endsection
@section("contentheader_description", $firstblocklist->$view_col)
@section("section", "FirstBlockLists")
@section("section_url", url(config('laraadmin.adminRoute') . '/firstblocklists'))
@section("sub_section", "Edit")

@section("htmlheader_title", "FirstBlockLists Edit : ".$firstblocklist->$view_col)

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
				{!! Form::model($firstblocklist, ['route' => [config('laraadmin.adminRoute') . '.firstblocklists.update', $firstblocklist->id ], 'method'=>'PUT', 'id' => 'firstblocklist-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'icon')
					@la_input($module, 'fblName')
					@la_input($module, 'fblDescription')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/firstblocklists') }}">Cancel</a></button>
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
	$("#firstblocklist-edit-form").validate({
		
	});
});
</script>
@endpush
