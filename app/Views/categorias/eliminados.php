<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
          <h4 class="mt-4"><?php echo $titulo;  ?></h4>
              <div class="py-3">
                    <p>
                        <a href="<?php echo base_url(); ?>/categorias" class="btn btn-warning">Regresar</a>
                    </p>
              </div>
                <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Reingresar</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($datos as $dato) { ?>
                                  <tr>
                                      <td><?php echo $dato['id']; ?></td>
                                      <td><?php echo $dato['nombre']; ?></td>
                                      <td>
                                          <a href="<?php echo base_url(). '/categorias/reingresar/'. $dato ['id']; ?>" class="btn btn-warning"><i class="fas fa-undo"></i></a>
                                      </td>
                                  </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </main>
