<meta http-equiv=”refresh” content=”5″>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?=$title?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>
            <div class="row">
                <div class="col-lg-12">      
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user-list">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users  as $row): ?>
                            <tr>
                                <td><?php echo $row->name; ?></td> 
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo ucfirst($row->role) ?></td> 
                                
                                <td>
                                    <a class="btn btn-primary" id="user-edit"  onclick="edit_user_popup('<?=$row->email?>','<?=$row->user_id?>','<?=$row->name?>','<?=$row->role?>');" data-toggle="modal" data-target="#editUser"> EDIT </a>
                                    
                                    <a class="btn btn-danger" id="user-delete" onclick="deactivate_confirmation('<?=$row->email?>','<?=$row->user_id?>');" data-toggle="modal" data-target="#deactivateConfirm"> DELETE </a>
                                    
                                </td>

                            </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>

                    <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;">
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



        <!-- Modal -->
        <div class="modal fade" id="deactivateConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-red">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">KONFIRMASI DELETE</h4>
                    </div>
                    <div class="modal-body">
                        <label>Anda Akan Mendelete user <label id="user-email" style="color:blue;"></label>.</label><br/>
                        <label>Click <b>Ya</b> Untuk Melanjutkan.</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                        <a id="deactivateYesButton" class="btn btn-danger" >Ya</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Modal -->
        <div class="modal fade" id="resetConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-red">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">KONFIRMASI RESET</h4>
                    </div>
                    <div class="modal-body">
                        <label>Anda Akan Mereset User <label id="reset-user-email" style="color:blue;"></label>'</label><br/>
                        <label></label><br/>
                        <label>Click <b>Ya</b> Untuk Melanjutkan.</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                        <a id="resetYesButton" class="btn btn-warning" >Ya</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-blue">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">BUAT USER BARU</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label> &nbsp;&nbsp;
                                    <label class="error" id="error_name"> Kolom ini harus di isi.</label>
                                    <label class="error" id="error_name2"> nama.</label>
                                    <input class="form-control" id="name" placeholder="Name" name="name" type="text" autofocus>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label> &nbsp;&nbsp;
                                    <label class="error" id="error_email"> Kolom ini harus di isi.</label>
                                    <label class="error" id="error_email2"> Email sudah ada.</label>
                                    <label class="error" id="error_email3"> invalid email adress.</label>
                                    <input class="form-control" id="email" placeholder="E-mail" name="email" type="email" autofocus>
                                </div> 
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Role</label>&nbsp;&nbsp;
                                    <label class="error" id="error_role"> Kolom ini harus di isi.</label>
                                    <select name="role" id="role" class="form-control" >
                                        <option value="0" selected="selected">-- SELECT ROLE --</option>
                                        <option value="admin">Admin</option>
                                        <option value="operator_tf">Operator TF</option>
                                        <option value="operator_si">Operator SI</option> 
                                    </select> 
                                </div>
                            </div>
                      </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">BATALKAN</button>
                        <button id="newUserSubmit" type="button" class="btn btn-primary">BUAT</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-blue">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">UPDATE USER</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden"  id="edit-user-id" value=""/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label> &nbsp;&nbsp;
                                    <label class="error" id="edit-error_name"> Kolom harus di isi.</label>
                                    <label class="error" id="edit-error_name2"> nama.</label>
                                    <input class="form-control" id="edit-name" placeholder="Name" name="edit-name" type="text" autofocus>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label> &nbsp;&nbsp;
                                    <label class="error" id="edit-error_email"> fKolom harus di isi.</label>
                                    <label class="error" id="edit-error_email2"> email sudah ada.</label>
                                    <label class="error" id="edit-error_email3"> email tidak bisa.</label>
                                    <input class="form-control" id="edit-email" placeholder="E-mail" name="edit-email" type="email" autofocus>
                                </div> 
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Role</label>&nbsp;&nbsp;
                                    <label class="error" id="edit-error_role"> Kolom harus di isi.</label>
                                    <select name="role" id="edit-role" class="form-control" >
                                    </select> 
                                </div>
                            </div>
                      </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">BATALKAN</button>
                        <button id="editUserSubmit" type="button" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       
        <!-- /#page-wrapper -->
        <?php $this->load->view('frame/footer_view')?>
        <script src="<?=base_url()?>assets/js/view/user_list.js"></script>