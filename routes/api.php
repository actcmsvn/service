<?php

Route::group(['prefix' => 'api', 'namespace' => 'ACTCMS\Service\Controllers\Api',], function(){
	Route::get('service/check', 'CheckController@index');
});