  @extends('adminlte::page')
  
  @section('title', 'Administração - MarazulApp')
  
  @section('content_header')
  <h1>Cadastro de Cores</h1>
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
              <div class="form-group col-md-3">
                <label">Código</label>
                <input name="codigo" type="text" class="form-control">
              </div>
              <div class="form-group col-md-7">
                <label>Cor</label>
                <input name="nome" type="text" class="form-control">
              </div>
              <div class="form-group col-md-2">
                <label>HTML</label>
                <input name="html" type="text" class="form-control">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-2">
                <labelclass="control-label">Algodão</label>
                <input name="alg" type="text" class="form-control">
              </div>
              
              <div class="form-group col-md-2">
                <label class="control-label">Viscose</label>
                <input name="visc" type="text" class="form-control">
              </div>
              
              <div class="form-group col-md-2">
                <label class="control-label">P.V</label>
                <input name="pv" type="text" class="form-control">
              </div>
              
              <div class="form-group col-md-2">
                <label class="control-label">P.A</label>
                <input name="pa" type="text" class="form-control">
              </div>
              
              <div class="form-group col-md-2">
                <label class="control-label">Poliéster</label>
                <input name="pes" type="text" class="form-control">
              </div>
              
              <div class="form-group col-md-2">
                <label class="control-label">Poliamida</label>
                <input name="pol" type="text" class="form-control">
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