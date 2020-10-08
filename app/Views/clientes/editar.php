<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo;  ?></h4>
            
            <?php if(isset($validation)){ ?>
            <div class="alert alert-danger">
            <?php echo $validation->listErrors();?>
            </div>
            <?php } ?>

            <form method="POST" action="<?php echo base_url();?>/clientes/actualizar" autocomplete="off">
                <input type="hidden" value="<?php echo $datos['id']; ?>" name="id">
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-sm-6 py-3">
                            <label>NIT</label>
                            <input type="form-control" id="nit" name="nit" type="text" value="<?php echo $datos['nit'] ?>" style="width: 100%;" autofocus required>
                        </div>
                        <div class="col-6 col-sm-6 py-3">
                            <label>Nombre</label>
                            <input type="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre'] ?>" style="width: 100%;"  required>
                        </div>
                        <div class="col-6 col-sm-6 py-3">
                            <label>Direccion</label>
                            <input type="form-control" id="direccion" name="direccion" type="text" value="<?php echo $datos['direccion'] ?>" style="width: 100%;"  required>
                        </div>
                        <div class="col-6 col-sm-6 py-3">
                            <label>Telefono</label>
                            <input type="form-control" id="telefono" name="telefono" type="text" value="<?php echo $datos['telefono'] ?>" style="width: 100%;"  required>
                        </div>
                        <div class="col-6 col-sm-6 py-3">
                            <label>Correo</label>
                            <input type="form-control" id="correo" name="correo" type="text" value="<?php echo $datos['correo'] ?>" style="width: 100%;"  required>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>
