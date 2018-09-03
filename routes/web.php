<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin.home');

    $this->get('one-to-one', 'OneToOneController@oneToOne');


    $this->get('produtos', 'ProdutosController@index')->name('admin.produtos');
    $this->get('produto/create', 'ProdutosController@create')->name('admin.produtos.create');
    $this->post('produto/create','ProdutosController@insert')->name('admin.produtos.insert');
    $this->get('produto/edit/{id}','ProdutosController@edit')->name('admin.produtos.edit');
    $this->put('produto/{id}','ProdutosController@update')->name('admin.produto.update');
    $this->get('produto/{id}','ProdutosController@view')->name('admin.produtos.view');

    
    $this->get('cores', 'CoresController@index')->name('admin.cores');
    $this->get('cor/create', 'CoresController@create')->name('admin.cor.create');
    $this->post('cor/create','CoresController@insert')->name('admin.cor.insert');
    $this->put('cor/{id}','CoresController@update')->name('admin.cor.update');
    $this->get('cor/edit/{id}','CoresController@edit')->name('admin.cor.edit');

    $this->get('bandeiras', 'BandeirasController@index')->name('admin.bandeiras');
    $this->get('bandeira/create', 'BandeirasController@create')->name('admin.bandeira.create');
    $this->post('bandeira/create','BandeirasController@insert')->name('admin.bandeira.insert');
});

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();