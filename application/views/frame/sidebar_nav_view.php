            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <?php echo '<p class="Selamat Datang"><b> <text style="font-size:150%;">&#9786</text> <i>Selamat Datang </i>' . $this->session->userdata('name') . "!</b></p>"; ?>
                        </li>
                        <li>
                            <a href="<?=base_url()?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if($this->session->userdata('role') == 'admin'): ?>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Akses Admin<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?=base_url('admin/user_list')?>">&raquo; Daftar Pengguna</a> </li>
                                    <li> <a href="<?=base_url('admin/activity_log')?>">&raquo; Activity Log</a> </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Menu Lain<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">&raquo; Menu 1</a> </li>
                                <li> <a href="#">&raquo; Menu 2</a> </li>
                            </ul>
                        </li>
                  
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>