@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="box">
<div class="box-header">
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example" class="table table-striped data-table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Produto</th>
                <th>Largura</th>
                <th>Gramatura</th>
                <th>Rendimento</th>
                 <th>EncLarg.</th>
                <th>EncComp.</th>
                <th>Torção</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($produtos->sortBy('cod') as $produto) 
            
            <tr>
                <td>{{ $produto->cod }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->larg }} cm</td>
                <td>{{ $produto->gram }} g/m²</td>
                <td>{{ $produto->rend }} m/kg</td>
                <td>{{ $produto->enclarg }}</td>
                <td>{{ $produto->enccomp }}</td>
                <td>{{ $produto->torcao }}</td>
                <td><div class="btn-group">
                        <button type="button" class="btn btn-default"><a href="produto/edit/{{ $produto->id }}"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-default"><a href="produto/save/{{ $produto->id }}"><i class="fas fa-download"></i></a></button>
                        <button type="button" class="btn btn-default"><a href="produto/{{ $produto->id }}"><i class="fas fa-external-link-alt"></i></a></button>
                      </div></td>
            </tr>
            @endforeach
           
    </table>
</div>
<!-- /.box-body -->
</div>
@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
    </script>
@stop

@stop