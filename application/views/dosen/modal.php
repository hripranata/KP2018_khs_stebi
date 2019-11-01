              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- konten modal-->
                  <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Filter Nilai Mahasiswa</h4>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                    <div class="col-md-12">
                      <form action="<?php echo site_url('dosen/perkelas') ?>" method="get">
                          <div class="form-group">
                              <label>Matkul</label>
                              <select class="form-control" name="matkul" id="matkul">
                                  <option value="">Please Select</option>
                                  <?php
                                  foreach ($matkul as $mk) {
                                      ?>
                                      <option <?php echo $matkul_selected == $mk->kd_mk ? 'selected="selected"' : '' ?> 
                                          value="<?php echo $mk->kd_mk ?>"><?php echo $mk->matkul ?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Thn Ajaran</label>
                              <select class="form-control" name="thn_ajaran" id="thn_ajaran">
                                  <option value="">Please Select</option>
                                  <?php
                                  foreach ($thn_ajaran as $thn) {
                                      ?>
                                      <option <?php echo $thn_ajaran_selected == $thn->id_ampu ? 'selected="selected"' : '' ?> 
                                          class="<?php echo $thn->kd_mk ?>" value="<?php echo $thn->id_ampu ?>"><?php echo $thn->thn_ajaran ?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Kelas</label>
                              <select class="form-control" name="kelas" id="kelas">
                                  <option value="">Please Select</option>
                                  <?php
                                  foreach ($kelas as $kls) {
                                      ?>
                                      <option <?php echo $kelas_selected == $kls->id_kelas ? 'selected="selected"' : '' ?> 
                                          class="<?php echo $kls->id_ampu ?>" value="<?php echo $kls->id_kelas ?>"><?php echo $kls->kelas ?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                          </div>

                          <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                      </form>
                  </div>
                  <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
                  <script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
                  <script>
                      $("#thn_ajaran").chained("#matkul");
                      $("#kelas").chained("#thn_ajaran");
                  </script>
                    </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                  
                    </div>
                  </div>
                </div>
              </div>