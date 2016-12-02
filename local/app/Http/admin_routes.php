<?php

/* ================== Homepage ================== */
Route::get('/oldhome', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== custom ==================== */
Route::get('/', 'CustomController@index');

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');

	/* ================== NewModules ================== */
	Route::resource(config('laraadmin.adminRoute') . '/newmodules', 'LA\NewModulesController');
	Route::get(config('laraadmin.adminRoute') . '/newmodule_dt_ajax', 'LA\NewModulesController@dtajax');

	/* ================== Landing_headers ================== */
	Route::resource(config('laraadmin.adminRoute') . '/landing_headers', 'LA\Landing_headersController');
	Route::get(config('laraadmin.adminRoute') . '/landing_header_dt_ajax', 'LA\Landing_headersController@dtajax');

	/* ================== FirstBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/firstblockheaders', 'LA\FirstBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/firstblockheader_dt_ajax', 'LA\FirstBlockHeadersController@dtajax');

	/* ================== FirstBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/firstblocklists', 'LA\FirstBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/firstblocklist_dt_ajax', 'LA\FirstBlockListsController@dtajax');

	/* ================== SecondBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/secondblockheaders', 'LA\SecondBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/secondblockheader_dt_ajax', 'LA\SecondBlockHeadersController@dtajax');

	/* ================== SecondBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/secondblocklists', 'LA\SecondBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/secondblocklist_dt_ajax', 'LA\SecondBlockListsController@dtajax');

	/* ================== ThirdBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/thirdblockheaders', 'LA\ThirdBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/thirdblockheader_dt_ajax', 'LA\ThirdBlockHeadersController@dtajax');

	/* ================== ThirdBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/thirdblocklists', 'LA\ThirdBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/thirdblocklist_dt_ajax', 'LA\ThirdBlockListsController@dtajax');

	/* ================== ThirdBlockLinks ================== */
	Route::resource(config('laraadmin.adminRoute') . '/thirdblocklinks', 'LA\ThirdBlockLinksController');
	Route::get(config('laraadmin.adminRoute') . '/thirdblocklink_dt_ajax', 'LA\ThirdBlockLinksController@dtajax');


	/* ================== FourthBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fourthblockheaders', 'LA\FourthBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/fourthblockheader_dt_ajax', 'LA\FourthBlockHeadersController@dtajax');

	/* ================== FourthBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fourthblocklists', 'LA\FourthBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/fourthblocklist_dt_ajax', 'LA\FourthBlockListsController@dtajax');

	/* ================== FourthBlockLasts ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fourthblocklasts', 'LA\FourthBlockLastsController');
	Route::get(config('laraadmin.adminRoute') . '/fourthblocklast_dt_ajax', 'LA\FourthBlockLastsController@dtajax');

	/* ================== FifthBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fifthblockheaders', 'LA\FifthBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/fifthblockheader_dt_ajax', 'LA\FifthBlockHeadersController@dtajax');

	/* ================== FifthBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fifthblocklists', 'LA\FifthBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/fifthblocklist_dt_ajax', 'LA\FifthBlockListsController@dtajax');

	/* ================== SixthBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/sixthblockheaders', 'LA\SixthBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/sixthblockheader_dt_ajax', 'LA\SixthBlockHeadersController@dtajax');

	/* ================== SixthBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/sixthblocklists', 'LA\SixthBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/sixthblocklist_dt_ajax', 'LA\SixthBlockListsController@dtajax');

	/* ================== SeventhBlockLists ================== */
	Route::resource(config('laraadmin.adminRoute') . '/seventhblocklists', 'LA\SeventhBlockListsController');
	Route::get(config('laraadmin.adminRoute') . '/seventhblocklist_dt_ajax', 'LA\SeventhBlockListsController@dtajax');

	/* ================== ContactBlockHeaders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contactblockheaders', 'LA\ContactBlockHeadersController');
	Route::get(config('laraadmin.adminRoute') . '/contactblockheader_dt_ajax', 'LA\ContactBlockHeadersController@dtajax');

	/* ================== Social_networks ================== */
	Route::resource(config('laraadmin.adminRoute') . '/social_networks', 'LA\Social_networksController');
	Route::get(config('laraadmin.adminRoute') . '/social_network_dt_ajax', 'LA\Social_networksController@dtajax');
});
