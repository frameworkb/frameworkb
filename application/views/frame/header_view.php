<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>-</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?=base_url()?>assets/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/bootstrap-editable.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom tab icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/codeigniter_logo.png" type="image/x-icon">
    <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui-custom-datepicker.css" rel="stylesheet" type="text/css" />
    
    <input type="hidden"  id="base-url" value="<?=base_url()?>"/>
</head>

<body>
    <div class="overlay"></div>
    <img id="loading"  width="250px" src="<?=base_url()?>assets/images/loading.gif" alt="Loading...">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">#</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>">
                    <div class="inline"> &nbsp;</div>
                </a>

            </div>
            <!-- /.navbar-header -->
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a  id="header-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i id="header-icon" class="fa fa-user fa-fw"></i>  <i id="header-icon" class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" data-toggle="modal" data-target="#changePasswordModal"><i class="fa fa-refresh fa-fw"></i> Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url();?>authentication/logout"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <div class=" navbar-brand navbar-right navbar-access-level"> 
                Level User: <?=ucfirst($this->session->userdata('role'));?>
                &nbsp;
            </div>
            <!-- /.navbar-top-links -->


            <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-blue">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Ganti Password (<?=$this->session->userdata('email')?>)</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="error" id="error_changePassword">Password</label>
                                <label class="error" id="error_changePassword2">Password minimal harus 8 character</label>
                            </div>
                        </div>
                        &nbsp;
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Password Sebelumnya</label> &nbsp;&nbsp;
                                    <label class="error" id="error_currentPassword"> Kolom ini Harus di isi.</label>
                                    <input class="form-control" id="currentPassword" placeholder="Password Sebelumnya" name="currentPassword" type="password" autofocus>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Password baru</label> &nbsp;&nbsp;
                                    <label class="error" id="error_newPassword"> Kolom ini harus di isi.</label>
                                    <label class="error" id="error_newPassword2"> Password tidak sama</label>
                                    <input class="form-control" id="newPassword" placeholder="Password baru" name="newPassword" type="password" autofocus>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Konfirmasi password baru</label> &nbsp;&nbsp;
                                    <input class="form-control" id="confirmNewPassword" placeholder="Konfirmasi password baru" name="confirmNewPassword" type="password" autofocus>
                                </div> 
                            </div>
                      </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">BATALKAN</button>
                        <button id="changePasswordSubmit" type="button" class="btn btn-primary">PERBARUI</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->