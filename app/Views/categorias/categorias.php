<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class>
                <h4 class="mt-4"><?php echo $titulo?></h4>
            </div>

            <div class="py-3">
                <p>
                    <a href="<?php echo base_url(); ?>/categorias/nuevo" class="btn btn-info">Agregar</a>
                    <a href="<?php echo base_url(); ?>/categorias/eliminados" class="btn btn-warning">Eliminados</a>
                </p>
            </div>

            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Modificar</th>
                                <th>Dar de baja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato['id']; ?></td>
                                    <td><?php echo $dato['nombre']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(). '/categorias/editar/'. $dato ['id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(). '/categorias/eliminar/'. $dato ['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
