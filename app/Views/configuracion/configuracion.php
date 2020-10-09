<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
          <h4 class="mt-4"><?php echo $titulo;  ?></h4>
                <div class="py-3">
                  <?php if(isset($validation)){ ?>
			        <div class="alert alert-danger">
			        <?php echo $validation->listErrors();?>
			        </div>
			        <?php } ?> 
                </div>

        <form method="POST" action="<?php echo base_url();?>/configuracion/actualizar" autocomplete="off">
        <?php csrf_field();?>
            <div class="form-group">
                <div class="row">
                    <div class="col-6 col-sm-6 py-3">
                        <label>Nombre de la tienda</label>
                        <input type="form-control" id="tienda_nombre" name="tienda_nombre" type="text" style="width: 100%;" value="<?php echo $nombre['valor']; ?>" autofocus required>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>NIT</label>
                        <input type="form-control" id="tienda_nit" name="tienda_nit" type="text" style="width: 100%;" value="<?php echo $nit['valor']; ?>" required >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Telefono</label>
                        <input type="form-control" id="tienda_telefono" name="tienda_telefono" type="text" style="width: 100%;" value="<?php echo $telefono['valor']; ?>" required >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Correo electronico</label>
                        <input type="form-control" id="tienda_email" name="tienda_email" type="text" style="width: 100%;" value="<?php echo $email['valor']; ?>" required >
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Direccion</label>
                        <textarea class="form-control" name="tienda_direccion" id="tienda_direccion" cols="30" required><?php echo $direccion['valor']; ?></textarea>
                    </div>
                    <div class="col-6 col-sm-6 py-3">
                        <label>Pie de Factura</label>
                         <textarea class="form-control" name="factura_leyenda" id="factura_leyenda" cols="30" required><?php echo $leyenda['valor']; ?></textarea>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
                
          </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar unidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Desea eliminar esta unidad?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Confirmar</a>
                </div>
                </div>
            </div>
        </div>
