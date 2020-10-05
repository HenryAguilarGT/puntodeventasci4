<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid">
        <h4 class="mt-4"><?php echo $titulo;  ?></h4>
        <?php \Config\Services::validation()->listErrors();?>
        <form method="POST" action="<?php echo base_url();?>/productos/actualizar" autocomplete="off">
        <?php csrf_field();?>
        
          <input type="hidden" id="id" name="id" value="<?php echo $producto['id'] ?>" />

            <div class="form-group">
                <div class="row">
                    <div class="col-6 col-sm-6 py-3">
                        <label>Codigo</label>
                        <input type="form-control" id="codigo" name="codigo" type="text" style="width: 100%;" value="<?php echo $producto['codigo'] ?>" autofocus required>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Nombre</label>
                        <input type="form-control" id="nombre" name="nombre" type="text" style="width: 100%;" value="<?php echo $producto['nombre'] ?>"  required>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Unidad</label>
                        <select class="form-control" name="id_unidad" id="id_unidad" required>
                            <option value="">Seleccionar unidad</option>
                            <?php foreach($unidades as $unidad) { ?>
                              <option value="<?php echo $unidad['id']?>" <?php if($unidad['id'] == $producto['id_unidad']) { echo 'selected'; } ?>><?php echo $unidad['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Categoria</label>
                        <select class="form-control" name="id_categoria" id="id_categoria" required>
                            <option value="">Seleccionar categoria</option>
                            <?php foreach($categorias as $categoria) { ?>
                              <option value="<?php echo $categoria['id']?>" <?php if($categoria['id'] == $producto['id_categoria']) { echo 'selected'; } ?>><?php echo $categoria['nombre']; ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Precio venta</label>
                        <input type="form-control" id="precio_venta" name="precio_venta" type="text" style="width: 100%;" value="<?php echo $producto['precio_venta'] ?>" autofocus >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Precio de compra</label>
                        <input type="form-control" id="precio_compra" name="precio_compra" type="text" style="width: 100%;" value="<?php echo $producto['precio_compra'] ?>" required  >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Stock minimo</label>
                        <input type="form-control" id="stock_minimo" name="stock_minimo" type="text" style="width: 100%;" value="<?php echo $producto['stock_minimo'] ?>" autofocus >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Es inventariable?</label>
                        <select class="form-group" name="inventariable" id="inventariable" style="width: 100%;">
                              <option value="1">Si</option>
                              <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
    </main>
