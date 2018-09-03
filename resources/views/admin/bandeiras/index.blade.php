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
                <th>#</th>
                <th>Codigo</th>
                <th>Produto</th>
                <th>Largura</th>
                <th>Gramatura</th>
                <th>Rendimento</th>
                <th>Torção</th>
                <th>EncLarg.</th>
                <th>EncComp.</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($produtos as $produto) 
            
            <tr>
                <td><a href="produto/view/{{ $produto->Codigo }}"><i class="fal fa-barcode-alt"></i> </a></td>
                <td>{{ $produto->Codigo }}</td>
                <td>{{ $produto->Nome }}</td>
                <td>{{ $produto->Largura }} cm</td>
                <td>{{ $produto->Gramatura }} g/m²</td>
                <td>{{ $produto->Rendimento }} m/kg</td>
                <td>{{ $produto->Torcao }}</td>
                <td>{{ $produto->EncLarg }}</td>
                <td>{{ $produto->EncComp }}</td>
                <td><div class="btn-group">
                        <button type="button" class="btn btn-default"><a href="produto/edit/{{ $produto->Codigo }}"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-default"><a href="produto/save/{{ $produto->Codigo }}"><i class="fas fa-download"></i></a></button>
                        <button type="button" class="btn btn-default"><a href="produto/view/{{ $produto->Codigo }}"><i class="fas fa-external-link-alt"></i></a></button>
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