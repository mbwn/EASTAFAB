 <?php $this->load->view('back/includes/header_inc'); ?>   

<div id="wrapper">

        <!-- Navigation -->
   <?php include("includes/navigation_inc.php") ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gallery
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url();?>admin/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Gallery
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!--Footer-->
<?php $this->load->view('back/includes/footer_inc'); ?>