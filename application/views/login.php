<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - SIP</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/fonts/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace-rtl.min.css" />
    <link rel="shortcut icon" href="<?=base_URL()?><?=$app['Icon'] ?>" />
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?=base_URL()?>themes/ace/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="<?=base_URL()?>themes/ace/assets/js/html5shiv.min.js"></script>
    <script src="<?=base_URL()?>themes/ace/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
</head>
  <body class="login-layout">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h2>
                    <span class="msg-body">
                        <img class="nav-user-photo" height="80" width="80" src="<?=$app['Icon'] ?>" alt="<?=$app['NamaApp'] ?>"/>
                    </span>
                    <br>
                    <span class="red"><?=$app['Singkatan'] ?></span>
                    <span class="white" id="id-text1"><?=$app['NamaApp'] ?></span>
                </h2>
<!--                 <h4 class="blue" id="id-company-text">&copy; Pranata Indonesia</h4> -->
              </div>

              <div class="space-6"></div>

              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                      
                      </h4>
    <!-- notifikasi Masuk -->
    <?php
        if($this->session->flashdata('berhasil')) {
            echo '<div class="alert alert-success alert-dismissable"><i class="fa fa-check"></i> &nbsp; '.$this->session->flashdata('berhasil').'</div>';

        
        } elseif($this->session->flashdata('Gagal')) {
            echo '<div class="alert alert-block alert-danger"><i class="fa fa-remove"></i> &nbsp; '.$this->session->flashdata('Gagal').'</div>';
        }
    ?>
    
    <?=form_open('auth/CekLogin')?>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" name="username" class="form-control" placeholder="Masukkan NPM/NIK/Akun" required autofocus />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required autofocus />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>

                          <div class="space"></div>

                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"> Ingatkan</span>
                            </label>

                            <button type="submit"  name="submit" class="width-35 pull-right btn btn-sm btn-primary" id="id-btn-dialog1">
                              <i class="ace-icon fa fa-key"></i>
                              <span class="bigger-110">Login</span>
                            </button>
                            <!-- <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Masuk &nbsp;<i class="fa fa-sign-in"></i></button> -->
                          </div>

                          <div class="space-4"></div>
                        </fieldset>
<?=form_close()?>
<!-- <a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>
 -->

<!--                     <div class="social-or-login center">
                        <span class="bigger-110">Atau login dengan</span>
                      </div>

                      <div class="space-6"></div>

                      <div class="social-login center">
                        <a class="btn btn-primary">
                          <i class="ace-icon fa fa-facebook"></i>
                        </a>

                        <a class="btn btn-info">
                          <i class="ace-icon fa fa-twitter"></i>
                        </a>

                        <a class="btn btn-danger">
                          <i class="ace-icon fa fa-google-plus"></i>
                        </a>
                      </div> -->
                    </div><!-- /.widget-main -->

                    <div class="toolbar clearfix">
                      <div>
                        <a href="#" data-target="#forgot-box" class="forgot-password-link">
                          <i class="ace-icon fa fa-arrow-left"></i>
                          Saya Lupa Password
                        </a>
                      </div>

                      <div>
                        <a href="#" data-target="#signup-box" class="user-signup-link">
                          Info
                          <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.login-box -->

                <div id="forgot-box" class="forgot-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header red lighter bigger">
                        <i class="ace-icon fa fa-key"></i>
                        Lupa Password
                      </h4>

                      <div class="space-6"></div>
                      <p>
                        Masukkan alamat email dan tunggu informasi selanjunya 
                       <span class="label label-danger arrowed">Dalam Pengembangan</span>
                </span>
                      </p>

                      <form>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" class="form-control" placeholder="Email" />
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>

                          <div class="clearfix">
                            <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                              <i class="ace-icon fa fa-lightbulb-o"></i>
                              <span class="bigger-110">Send Me!</span>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div><!-- /.widget-main -->

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        Back to login
                        <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.forgot-box -->

                <div id="signup-box" class="signup-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header green lighter bigger">
                        <i class="ace-icon fa fa-users blue"></i>
                        Informasi
                      </h4>

                      <div class="space-6"></div>
                      <p> Pastikan anda memperhatikan hal-hal sebagai berikut: </p>
                      <ul>
                        <li> Pastikan logout saat meninggalkan Sistem, dan ubahlah password anda secara berkala</li>
                        <li> Anda tidak diperbolehkan menggunakan Sistem dalam kondisi atau cara apapun yang dapat merusak, <br>melumpuhkan, membebani atau mengganggu server atau jaringan. 
                        <li> Anda juga tidak diperbolehkan untuk mengakses layanan, user accounts, sistem komputer atau jaringan <br> secara tidak sah, dengan cara hacking, password mining atau cara lainnya</li>
                      </ul>
                      
                    </div>

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Back to login
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.signup-box -->
              </div><!-- /.position-relative -->

            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div><!-- /.main-container -->
  <!-- footer -->
  <!-- /.footer -->
    </div>
    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?=base_URL()?>themes/ace/assets/js/jquery.2.1.1.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

    <!--[if !IE]> -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='<?=base_URL()?>themes/ace/assets/js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?=base_URL()?>themes/ace/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_URL()?>themes/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });
      
      
      
      //you don't need this, just used for changing background
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');
        
        e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');
        
        e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');
        
        e.preventDefault();
       });
       
      });
    </script>
</body>
</html>
