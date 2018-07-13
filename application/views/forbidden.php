<html lang="en">
<?php $this->load->view('backend/partials/head');?>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <?php $this->load->view('backend/partials/header');?>
    <div class="app-body">
        <div class="sidebar">
           <?php $this->load->view('backend/partials/sidebar');?>
        </div>
        <!-- Main content -->
        <main class="main">
            <!-- Breadcrumb -->
            <?php $this->load->view('backend/partials/breadcrumb');?>

            <div class="container-fluid">
            Not allowed
            </div>
            <!-- /.conainer-fluid -->
        </main>
    </div>
    <?php $this->load->view('backend/partials/footer');?>
</body>

</html>