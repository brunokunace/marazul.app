@extends('adminlte::page')

@section('title', 'Administração - MarazulApp')

@section('content_header')
    <h1>Cores</h1>
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
                <th>Tonalidade</th>
                <th>Código</th>
                <th>Descrição</th>
                <th>HTML</th>
                <th>Algodão</th>
                <th>Viscose</th>
                <th>P.V</th>
                <th>P.A</th>
                <th>Poliéster</th>
                <th>Poliamida</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($cores->sortBy('codigo') as $cor) 
            
            <tr>
                <td style="background:#{{ $cor->html }}"> </td>
                <td>{{ $cor->codigo }}</td>
                <td>{{ $cor->nome }}</td>
                <td>#{{ $cor->html }}</td>
                <td>{{ $cor->alg }}</td>
                <td>{{ $cor->visc }}</td>
                <td>{{ $cor->pv }}</td>
                <td>{{ $cor->pa }}</td>
                <td>{{ $cor->pes }}</td>
                <td>{{ $cor->pol }}</td>
                <td>
                <button type="button" class="btn btn-default btn-sm"><a href="cor/edit/{{ $cor->id }}"><i class="far fa-edit"></i></button>
                </td>
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