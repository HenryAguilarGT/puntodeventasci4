<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid">
        <h4 class="mt-4"><?php echo $titulo;  ?></h4>

        <?php if(isset($validation)){ ?>
        <div class="alert alert-danger">
        <?php echo $validation->listErrors();?>
        </div>
        <?php } ?>


        <form method="POST" action="<?php echo base_url();?>/roles/insertar" autocomplete="off">
        <?php csrf_field();?>
            <div class="form-group">
                <div class="row">
                    <div class="col-6 col-sm-6 py-3">
                        <label>Nombre</label>
                        <input type="form-control" id="nombre" name="nombre" type="text" style="width: 100%;" value="<?php echo set_value('nombre')?>" autofocus required>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/roles" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    </main>
