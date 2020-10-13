<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid">
        <h4 class="mt-4"><?php echo $titulo;  ?></h4>

        <?php if(isset($validation)){ ?>
        <div class="alert alert-danger">
        <?php echo $validation->listErrors();?>
        </div>
        <?php } ?>


        <form method="POST" action="<?php echo base_url();?>/usuarios/insertar" autocomplete="off">
        <?php csrf_field();?>
            <div class="form-group">
                <div class="row">
                    <div class="col-6 col-sm-6 py-3">
                        <label>Usuario</label>
                        <input type="form-control" id="usuario" name="usuario" type="text" style="width: 100%;" value="<?php echo set_value('usuario')?>" autofocus required>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Nombre</label>
                        <input type="form-control" id="nombre" name="nombre" type="text" style="width: 100%;" value="<?php echo set_value('nombre')?>" required >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Contraseña</label>
                        <input type="password" id="password" class="form-control" name="password" type="password" style="width: 100%;" value="<?php echo set_value('password')?>" required >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Confirmar contraseña</label>
                        <input type="password" id="repassword" class="form-control" name="repassword" type="password" style="width: 100%;" value="<?php echo set_value('repassword')?>" required >
                    </div>
                     <div class="col-6 col-sm-6 py-3">
                        <label>Caja</label>
                        <select class="form-control" name="id_caja" id="id_caja" required>
                            <option value="">Seleccionar caja</option>
                            <?php foreach($cajas as $caja) { ?>
                              <option value="<?php echo $caja['id']?>"><?php echo $caja['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Rol</label>
                        <select class="form-control" name="id_rol" id="id_rol" required>
                            <option value="">Seleccionar rol</option>
                            <?php foreach($roles as $rol) { ?>
                              <option value="<?php echo $rol['id']?>"><?php echo $rol['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    </main>
