@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
<h1>Cadastro de Coleção/Bandeira</h1>
@stop

@section('content')
<div class="row">
  
  <div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Insira as informações abaixo</h3>
      </div>
      
      <form method="post" action="create">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="box-body">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label>Produto</label>
              <input name="id" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-7">
              <label>ID Drive</label>
              <input name="drive_id" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-3">
              <label>Ano</label>
              <select class="form-control select2" name="ano" data-placeholder="Choose one">
                  <option value="i19">Inverno 2019</option>
                  <option value="v1819">Verão 18/19</option>
                  <option value="i18">Inverno 2018</option>
                  <option value="v1719">Verão 17/18</option>
                </select>
            </div>
          </div>
          
          
        </div>
        
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary mg-b-10"><i class="far fa-plus"></i> Cadastrar Bandeira</button>
        </div>
        <!-- /.box-footer -->
      </div>
    </form>
    
  </div>
</div>
</div>


@stop