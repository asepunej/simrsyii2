<?php

/** @var yii\web\View $this */

$this->title = 'SIM RS';
?>
<div class="site-index content">
        <!-- Small boxes (Stat box) -->
        <div class="card">
              			  
                      <table class="table" width="100%"  >
                         
                       
                        
                        <tr>
                          <td colspan="3" valign="top"><div class="card-body p-0">
                    
                            <div class="row">
                              <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">Total Pasien Hari ini </span>
                                    <span class="info-box-number"><?php echo $dataProvider[0]['jmlpaket'].' Paket';?></span>
                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?php echo $persenBarangKontrak.'%';?>"></div>
                                    </div>
                                    <span class="progress-description">      
                                    Rp. <?php echo number_format( $dataProvider[0]["jmlpagu"] , 0 , "," , '.' )?>                </span>              </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                              <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-success">
                                  <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">PASIEN IGD</span>                
                                    <span class="info-box-number"><?php echo $dataProvider[1]['jmlpaket'].' Paket';?></span>
                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?php echo $persenKonstruksiKontrak.'%';?>"></div>
                                    </div>
                                    <span class="progress-description">
                                    Rp. <?php echo number_format( $dataProvider[1]["jmlpagu"] , 0 , "," , '.' )?>                </span>              </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                              <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-warning">
                                  <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">PASIEN POLYi</span>
                                    <span class="info-box-number"><?php echo $dataProvider[2]['jmlpaket'].' Paket';?></span>
                    
                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?php echo $persenKonsultansiKontrak.'%';?>"></div>
                                    </div>
                                    <span class="progress-description">
                                  Rp. <?php echo number_format( $dataProvider[2]["jmlpagu"] , 0 , "," , '.' )?>                </span>              </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                              <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-danger">
                                  <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">Jasa Lainnya</span>
                                    <span class="info-box-number"><?php echo $dataProvider[3]['jmlpaket'].'  Paket';?></span>
                                    
                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?php echo $persenJasaKontrak.'%';?>"></div>
                                    </div>
                                    <span class="progress-description">
                                    Rp. <?php echo number_format( $dataProvider[3]["jmlpagu"] , 0 , "," , '.' )?>                </span>              </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                    
                    
                     </div>  
        <!-- /.row -->

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
