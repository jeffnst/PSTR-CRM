 <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-primary" style="background:#723988; padding:20px;">
                                    <div class="widget-user-image">
                                        <img class="img-responsive" src="<?php echo $base_assets_url ?>svg/picture-outline.svg" alt="Dashboard" style="width:50px;">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username" style="color:#FFF;">Galeri Upload</h3>
                                    <h5 class="widget-user-desc" style="color:#FFF;">picture manager</h5>
                                    </div>
                                    <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="<?php echo site_url('admin/assets/filemanager')?>">Upload Data <span class="pull-right badge bg-primary"><?php echo $dashboard_count->uploaded; ?></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <!-- /.widget-user -->