@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
<h1>Produtos</h1>
@stop

@section('content')


<div class="row">
    <div class="col-xl-6 col-sm-10">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Produto <strong>{{ $produto->cod }} - {{ $produto->nome }} </strong> (#{{ $produto->id }})
                    @if($produto->lista == "0") <span class="label label-success pull-right">Produto Coleção</span>
                    @elseif($produto->lista == "1") <span class="label label-danger pull-right">Produto Exclusivo</span>
                    @endif
                </h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="col-sm-2">Código:</div>
                        <div class="col-md-9"><strong>{{ $produto->cod }}</strong></div>
                        <div class="col-md-2">Produto:</div>
                        <div class="col-md-9"><strong>{{ $produto->nome }}</strong></div>
                        <div class="col-md-2">Composição:</div>
                        <div class="col-md-9"><strong>{{ $produto->comp }}</strong></div>
                        <div class="col-md-2">Largura:</div>
                        <div class="col-md-9"><strong>{{ $produto->larg }}</strong> cm</div>
                        <div class="col-md-2">Gramatura:</div>
                        <div class="col-md-9"><strong>{{ $produto->gram }}</strong> g/m²</div>
                        <div class="col-md-2">Rendimento:</div>
                        <div class="col-md-9"><strong>{{ $produto->rend }}</strong> m/kg</div>
                        <div class="col-md-2">Enc Comp.:</div>
                        <div class="col-md-9"><strong>{{ $produto->enccomp }}</strong></div>
                        <div class="col-md-2">Enc. Larg.:</div>
                        <div class="col-md-9"><strong>{{ $produto->enclarg }}</strong></div>
                        <div class="col-md-2">Torção:</div>
                        <div class="col-md-9"><strong>{{ $produto->torcao }}</strong></div>
                        <div class="col-md-2">CF:</div>
                        <div class="col-md-9"><a href="#cf" data-toggle="modal">{{ $produto->cf }}</a></div>
                        <div class="col-md-2">NCM:</div>
                        <div class="col-md-9"><strong>{{ $produto->ncm }}</strong></div>
                    </div>
                    <!-- /.col (left) -->
                    
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
                <div class="row">
                    
                    <div class="col-xs-6">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-xs-9">
                        <legend>Banderias do Produto</legend>
                        <div class="dataTables_wrapper form-inline" role="grid">
                            
                            <table id="custom" class="table table-condensed table-striped table-bordered dataTable" aria-describedby="custom_info">
                                <thead>
                                    <tr role="row">
                                        <th>Código</th>
                                        <th>ID Drive</th>
                                        <th>Ano</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @isset($produto->bandeira)
                                    <tr>
                                        <td>{{ $produto->bandeira->cod_pro }}</td>
                                        <td>{{ $produto->bandeira->drive_id }}</td>
                                        <td>{{ $produto->bandeira->ano }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default"><a href="{{ route('admin.bandeira.create', $produto->bandeira->id) }}"><i class="far fa-edit"></i></a></button>
                                                <button type="button" class="btn btn-default"><a href="{{ route('admin.bandeira.create') }}"><i class="fas fa-download"></i></a></button>
                                                <button type="button" class="btn btn-default"><a href="{{ route('admin.bandeira.create', $produto->bandeira->id) }}"><i class="fas fa-external-link-alt"></i></a></button>
                                              </div>
                                        </td>
                                    </tr>
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-3">&nbsp;</div>
                </div>
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.produtos.edit',  $produto->id)}}" data-recordID="" class="btn btn-primary btn-flat"><i class="fal fa-lg fa-edit"></i></a>
                        <a href="{{ route('admin.produtos.edit',  $produto->id)}}" data-recordID="" class="btn btn-success btn-flat"><i class="fal fa-lg fa-download"></i></a>
                        <button id="" type="button" class="btn btn-danger btn-flat disabled" disabled="disabled"><i class="fal fa-lg fa-trash"></i></button>
                    </div>
                    <!-- /.col-md-6 (left) -->
                    <div class="_content col-md-6">
                        <p class="pull-right"><small class="_small">Produto Cadastrado em {{ $produto->created_at->format('d/m/Y à\s G:i:s') }} <br> Última Atualização em {{ $produto->updated_at->format('d/m/Y à\s G:i:s') }} </small></p>
                    </div>
                    <!-- /.col-md-6 (right) -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->



<div id="cf" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel">CF {{ $produto->cf }} do produto <em>{{ $produto->cod }}</em></h4>
            </div>
            <div class="modal-body">
                <img src="https://marazul.app/site/cf/c{{ $produto->cf }}.png" width="">
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
            </div>
        </div>
    </div>
</div>


@stop