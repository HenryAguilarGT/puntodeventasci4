<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
          <h4 class="mt-4"><?php echo $titulo;  ?></h4>
                <div class="py-3">
                    <p>
                        <a href="<?php echo base_url(); ?>/roles/nuevo" class="btn btn-info">Agregar</a>
                        <a href="<?php echo base_url(); ?>/roles/eliminados" class="btn btn-warning">Eliminados</a>
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Modificar</th>
                                <th>Dar de baja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato['nombre']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(). '/roles/editar/'. $dato ['id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a href="#" data-href="<?php echo base_url(). '/roles/eliminar/'. $dato ['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
              </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Desea eliminar este role?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Confirmar</a>
                </div>
                </div>
            </div>
        </div>
