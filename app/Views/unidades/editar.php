<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo;  ?></h4>
            <form method="POST" action="<?php echo base_url();?>/unidades/actualizar" autocomplete="off">
                <input type="hidden" value="<?php echo $datos['id']; ?>" name="id">
                <div class="form-group">
                      <div class="row">
                          <div class="col-6 col-sm-6 py-3">
                              <label>Nombre</label>
                              <input type="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre'] ?>" autofocus required>
                          </div>
                          <div class="col-6 col-sm-6 py-3">
                              <label>Nombre corto</label>
                              <input type="form-control" id="nombre_corto" name="nombre_corto" type="text" value="<?php echo $datos['nombre_corto'] ?>"  required>
                          </div>
                      </div>
                  </div>
                  <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                  <button type="submit" class="btn btn-success">Guardar</button>

            </form>
          </div>
      </main>
