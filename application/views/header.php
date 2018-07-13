<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - <?=$app['NamaApp'] ?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/fonts/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="shortcut icon" href="<?=base_URL()?><?=$app['Icon'] ?>" />


    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?=base_URL()?>themes/ace/assets/js/ace-extra.min.js"></script>


    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?=base_URL()?>themes/ace/assets/js/html5shiv.min.js"></script>
    <script src="<?=base_URL()?>themes/ace/assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
    <body class="no-skin">
    <div id="navbar" class="navbar navbar-default">
      <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar">
            

          </span>
        </button>
        <div class="navbar-buttons navbar-header pull-left" role="navigation">
          <div class="nav ace-nav">
             <span class="navbar-brand">
                <span class="msg-body"> <?=$app['NamaApp'] ?> <img class="nav-user-photo" src="<?=base_URL()?><?=$app['Logo'] ?>" alt="<?=$app['NamaApp'] ?>"/></span>
             </span>
          </div>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">
<!--             <li class="grey">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="ace-icon fa fa-tasks"></i>
                <span class="badge badge-grey">4</span>
              </a>

              <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="ace-icon fa fa-check"></i>
                  4 Tasks to complete
                </li>

                <li class="dropdown-content">
                  <ul class="dropdown-menu dropdown-navbar">
                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Software Update</span>
                          <span class="pull-right">65%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:65%" class="progress-bar"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Hardware Upgrade</span>
                          <span class="pull-right">35%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Unit Testing</span>
                          <span class="pull-right">15%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Bug Fixes</span>
                          <span class="pull-right">90%</span>
                        </div>

                        <div class="progress progress-mini progress-striped active">
                          <div style="width:90%" class="progress-bar progress-bar-success"></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown-footer">
                  <a href="#">
                    See tasks with details
                    <i class="ace-icon fa fa-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>
 -->
             <li class="purple">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                <span class="badge badge-important">
                  <?php
                $jml =$this->m_crud->countAll('t_info','Expired >= now()');
                echo $jml;
                ?>
                  
                </span>
              </a>

              <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="ace-icon fa fa-exclamation-triangle"></i>
                  <?php 
                  if ($jml > 0){
                      echo "ada $jml Pemberitahuan";
                    }else{
                      echo "Tidak ada pemberitahuan";  
                    }
                  ?> 
                </li>
                <?php 
                if ($jml > 0) {
                ?> 
                <li class="dropdown-content">
                  <ul class="dropdown-menu dropdown-navbar navbar-pink">

<!-- --- -->
                  
                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">
                            <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                            Mohon untuk segera Tes......
                          </span>
                          <span class="pull-right badge badge-info">+12</span>
                        </div>
                      </a>
                    </li>

<!-- --- -->
                  </ul>
                </li>
                <?php 
                }
                else {

                }
                ?>
                <li class="dropdown-footer">
                  <a href="#">
                    Lihat semua pemberitahuan
                    <i class="ace-icon fa fa-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="<?=base_URL()?><?=$usr['Foto']?>" alt="<?=$usr['Nama']?>" />
                <span class="user-info">
                  <small><?=$usr['Nama']?></small>
                  
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-cog"></i>
                    Settings
                  </a>
                </li>

                <li>
                  <a href="profil">
                    <i class="ace-icon fa fa-user"></i>
                    Profil
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="<?=base_URL()?>auth/logout">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container" id="main-container">
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar                  responsive">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <span class="label label-info">
<!--                   <i class="ace-icon fa fa-calendar"></i> -->
                  <div class="clock"></div>
            </span>
          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
          </div>
        </div><!-- /.sidebar-shortcuts -->


