<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo;  ?></h4>
            
            <?php if(isset($validation)){ ?>
            <div class="alert alert-danger">
            <?php echo $validation->listErrors();?>
            </div>
            <?php } ?>
            <?php \Config\Services::validation()->listErrors();?>
            <form method="POST" action="<?php echo base_url();?>/usuarios/actualizar" autocomplete="off">
                  <input type="hidden" id="id" name="id" value="<?php echo $usuarios['id'] ?>" />
                <div class="form-group">
                    <div class="row">
                    	<div class="col-6 col-sm-6 py-3">
                    		<label>Usuario</label>
                    		<input type="form-control" id="usuario" name="usuario" type="text" style="width: 100%;" value="<?php echo $datos['usuario'] ?>" autocomplete="off" autofocus>
                    	</div>
                    	<div class="col-6 col-sm-6 py-3">
                        	<label>Nombre</label>
                        	<input type="form-control" id="nombre" name="nombre" type="text" style="width: 100%;" value="<?php echo $datos['nombre'] ?>" required >
                    	</div>
                    	 <div class="col-6 col-sm-6 py-3">
                        	<label>Contraseña</label>
                        	<input type="password" id="password" class="form-control" name="password" type="password" style="width: 100%;" value="<?php echo $datos['passwrod'] ?>" required >
                    	</div>
                    	<div class="col-6 col-sm-6 py-3">
                        	<label>Confirmar contraseña</label>
                        	<input type="password" id="repassword" class="form-control" name="repassword" type="password" style="width: 100%;" value="<?php echo $datos['passwrod'] ?>" required >
                    	</div>
                    	<div class="col-6 col-sm-6 py-3">
                        	<label>Caja</label>
                        	<select class="form-control" name="id_caja" id="id_caja" required>
                            <option value="">Seleccionar caja</option>
                        </select>
                    	</div>
                    	<div class="col-6 col-sm-6 py-3">
                        	<label>Rol</label>
                        	<select class="form-control" name="id_rol" id="id_rol" required>
                            <option value="">Seleccionar rol</option>
                        </select>
                    </div>

                    </div>
                </div>
                <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </main>
