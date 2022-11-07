<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Travelx - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-body">
                    <div class="text-center m-t-20 m-b-30">
                        <a href="index.html" class="logo logo-admin"><img src="<?= base_url('assets/images/logo-dark.png') ?>" alt="" height="34"></a>
                    </div>
					<?php if($this->session->flashdata('msg')){
						echo $this->session->flashdata('msg');
					  } ?>
                    <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>
					<?php $attributes = array('class' => 'form-horizontal m-t-20'); ?>
					<?= form_open('',$attributes) ?>
                        <div class="form-group">
                            <div class="col-12">
                                <input type="text" value="<?= set_value('euc') ?>" class="form-control" id="email" placeholder="Enter Email/Username/Contact No" name="euc">
								<b class="text-danger"><?= form_error('euc'); ?></b>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
								<b class="text-danger"><?= form_error('pswd'); ?></b>
                            </div>
                        </div>
						
						
                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="pages-register.html" class="text-muted">Create an account</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- jQuery  -->
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/modernizr.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/detect.js') ?>"></script>
        <script src="<?= base_url('assets/js/fastclick.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.slimscroll.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.blockUI.js') ?>"></script>
        <script src="<?= base_url('assets/js/waves.js') ?>"></script>
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.nicescroll.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.scrollTo.min.js') ?>"></script>

        <script src="<?= base_url('assets/js/app.js') ?>"></script>

    </body>
</html>