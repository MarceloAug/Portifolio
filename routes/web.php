<?php

// rotas do CRUD de empresas
Route::get('/empresas','EmpresasController@ListaEmpresas');
Route::get('/empresas/remove/{id}', 'EmpresasController@removeEmpresa');
Route::get('/empresas/exibe/{id}', 'EmpresasController@ExibeEmpresa');
Route::post('/empresas/AdicionaEmpresas','EmpresasController@AdicionaEmpresas');
Route::get('/empresas/FormAdicionar','EmpresasController@FormularioAdicionar');
Route::get('/empresas/FormEditar/{id}','EmpresasController@FormularioEditar');
Route::post('/empresas/EditaEmpresa','EmpresasController@UpdateEmpresa');