@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
<h1>Edição de Cores</h1>
@stop

@section('content')
<div class="row">
    
    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Insira as informações abaixo</h3>
            </div>
            <form method="post" action="{{ route('admin.cor.update',  $cor->id) }}">
                <input name="_method" type="hidden" value="PUT">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                
                <div class="box-body">
                    @if(Session::has('message')) <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Feito!</h4>
                        {{ Session::get('message') }}.
                    </div> @endif
                    
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label class="control-label">ID</label>
                            <input name="id" type="text" value="{{ $cor->id }}" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label">Código</label>
                            <input name="codigo" type="text" value="{{ $cor->codigo }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Cor</label>
                            <input name="nome" type="text" value="{{ $cor->nome }}" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label">HTML</label>
                            <input style="background: #{{ $cor->html }}" name="html" type="text" value="{{ $cor->html }}" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label class="control-label">Algodão</label>
                            <input name="alg" type="text" value="{{ $cor->alg }}" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label class="control-label">Viscose</label>
                            <input name="visc" type="text" value="{{ $cor->visc }}" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label class="control-label">P.V</label>
                            <input name="pv" type="text" value="{{ $cor->pv }}" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label class="control-label">P.A</label>
                            <input name="pa" type="text" value="{{ $cor->pa }}" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label class="control-label">Poliéster</label>
                            <input name="pes" type="text" value="{{ $cor->pes }}" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label class="control-label">Poliamida</label>
                            <input name="pol" type="text" value="{{ $cor->pol }}" class="form-control">
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary mg-b-10"><i class="far fa-plus"></i> Cadastrar Cor</button>
                </div>
                <!-- /.box-footer -->
            </div>
        </form>
        
    </div>
</div>
</div>


@stop