                <!-- PAGE CONTENT BEGINS -->
                <div class="alert alert-block alert-success">
                  <h3 class="header smaller lighter green">
                      <i class="ace-icon fa fa-bullhorn"></i>
                      Pengumuman
                  </h3>
                  <?php
                        $p = $this->m_crud->data('t_pengumuman', 'Untuk in('.$usr['LevelID'].')');
                  ?>
                  <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
                  <i class="ace-icon fa fa-check green"></i>
                  <strong class="green"><?=$pengumuman['Judul']?></strong><br>
                  <?=$pengumuman['Berita']?>
                </div>


