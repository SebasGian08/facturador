<?php 
use Controladores\ControladorProductos;
?>
<div class="contenedor-busqueda">
<div class="input-group-search">
                <select class="selectpicker show-tick" data-style="btn-select" data-width="70px" id="selectnum" name="selectnum" onchange="loadProductosV(1)">
                <option value="5">5</option>
                <option value="10"">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
        <div class="input-search">
              <input type="search" class="search" id="searchProductoV" name="searchProductoV" placeholder="Buscar..." onkeyup="loadProductosV(1)" style="width:100%">
              <span class="input-group-addo"><i class="fa fa-search"></i></span> 
        </div>
</div>
 </div>
<div class="table-responsive productosCar">
<table class="table table-bordered tablaVentas tabla-add">
                <thead>
    
                                <tr>
                                <th style="width:10px">#</th>
                                <!-- <th>Imagen</th> -->
                                <th>Código</th>
                                <th>Serie</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Stock</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th class="btn-prod"></th>
                                <th class="btn-prod"></th>
                               
                                </tr>
                                </thead>
                                <?php

                                    $listaProductos = new ControladorProductos();
                                    $listaProductos-> ctrListarProductosVentas();

                                    ?>

                 
    </table>
   </div>