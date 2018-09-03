@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
<h1>Cadastro de Produto</h1>
@stop

@section('content')
<div class="row">
  
  <div class="col-sm-6">
    <!-- Horizontal Form -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Insira as informações técnicas do produto</h3>
      </div>
      
      <form method="post" action="create">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
        <div class="box-body">
            @if(Session::has('message')) <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Feito!</h4>
                {{ Session::get('message') }}.
              </div> @endif
          <div class="form-row">
            <div class="form-group col-md-3">
              <label class="control-label">Código</label>
              <input name="cod" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-9">
              <label class="control-label">Produto</label>
              <input name="nome" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="control-label">Composição</label>
              <input name="comp" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-3">
              <label class="control-label">Largura (cm)</label>
              <input name="larg" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-3">
              <label class="control-label">Gramatura (g/m²)</label>
              <input name="gram" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-3">
              <label class="control-label">Rendimento (m/kg)</label>
              <input name="rend" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-2">
              <label class="control-label">Codificação</label>
              <input name="cf" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-2">
              <label class="control-label">Enc. Larg. (%)</label>
              <input name="enclarg" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-2">
              <label class="control-label">Enc. Comp. (%)</label>
              <input name="enccomp" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-2">
              <label class="control-label">Torção (%)</label>
              <input name="torcao" type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-2">
              <label class="control-label">NCM</label>
              <input name="ncm" type="text" class="form-control">
            </div>
            
            <div class="form-group col-lg-3 mg-lg-t-0">
                <label class="rdiobox">
                    <input name="lista" value="1" type="radio">
                    <span class="text-red">Produto Exclusivo</span>
                  </label>
                  <label class="rdiobox">
                    <input name="lista" value="0" type="radio" checked>
                    <span class="text-green">Produto Coleção</span>
                  </label>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label">Informações Ficha</label>
              <textarea name="infoficha" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label">Informações Interna</label>
              <textarea name="infointer" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            
          </div>
          
        </div>
        
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary mg-b-10"><i class="far fa-plus"></i> Cadastrar Ficha</button>
        </div>
        <!-- /.box-footer -->
      </div>
    </form>
    
  </div>
</div>
</div>


@stop