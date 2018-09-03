<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;
use App\Models\Bandeiras;

class OneToOneController extends Controller
{
   public function oneToOne()
   {
    $produto = Produtos::find(1001);

    echo $produto->nome;

   $bandeiraInfo = $produto->bandeira;
   echo "ID: {$bandeiraInfo->cod_pro}W <br>";
   echo "Nome {$bandeiraInfo->drive_id} <br>";
   echo "Composião: {$bandeiraInfo->ano} <br>";
    
   }
}
