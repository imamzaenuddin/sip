        <ul class="nav nav-list">
        <li class="">
            <a href="<?=base_URL()?>pegawai/dashboard">
              <i class="menu-icon fa fa-tachometer"></i>
              <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
        <?php
          $main_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent IS NULL and NA='N' ORDER BY Position");
          foreach ($main_menu->result() as $main) {
            $cl = ($this->uri->segment(1) == strtolower($main->Nama))? 'class="active"':'' ;

            echo '<li '.$cl.'>
                      <a href="'.base_url().''.$main->URL.'" class="dropdown-toggle">
                        <i class="menu-icon fa '.$main->FaIcon.'"></i>
                        <span class="menu-text">'.$main->Nama.'</span>
                        <b class="arrow fa fa-angle-down"></b>
                      </a>
                      <b class="arrow"></b>
                <ul class="submenu">';
               //$sub_menu = $this->db->get_where('m_men', array('IsParent' => $main->ParentID));
                $sub_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent = $main->ParentID and NA='N' ORDER BY Position");

                foreach ($sub_menu->result() as $sub) {
                echo  '
                            <li class="">
                                <a href="'.base_url().''.$sub->URL.'">
                                  <i class="menu-icon fa '.$sub->FaIcon.'"></i>
                                  '.$sub->Nama.'
                                </a>
                                <b class="arrow"></b>
                            </li>';
                }
                echo '</ul></li>';
          }
          echo '</li>';
        ?>
        </ul><!-- /.nav-list -->