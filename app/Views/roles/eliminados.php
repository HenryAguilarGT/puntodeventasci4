<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
          <h4 class="mt-4"><?php echo $titulo;  ?></h4>
              <div class="py-3">
                    <p>
                        <a href="<?php echo base_url(); ?>/roles" class="btn btn-warning">Regresar</a>
                    </p>
              </div>
                <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                                  <th>Nombre</th>
                                  <th>Reingresar</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($datos as $dato) { ?>
                                  <tr>
                                      <td><?php echo $dato['nombre']; ?></td>
                                      <td>
                                          <a href="#" data-href="<?php echo base_url(). '/roles/reingresar/'. $dato ['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Rehabilitar unidad" class="btn btn-warning"><i class="fas fa-undo"></i></a>
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
                        <h5 class="modal-title" id="exampleModalLabel"> Rehabilitar role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Desea rehabilitar esta role?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger btn-ok">Confirmar</a>
                    </div>
                    </div>
                </div>
            </div>
