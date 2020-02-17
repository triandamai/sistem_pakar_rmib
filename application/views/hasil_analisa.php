<div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Hasil Perhitungan </h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url()?>index.php/<?= $back;?>" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detail Perhitungan</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?= $this->session->flashdata('pesan'); ?>
                            <div class="card">
                                <div class="card-header p-4">
                                     <a class="pt-2 d-inline-block" href="#">Hasil Analisa</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">Id Analisa :<?= $hasil_analisa->id;?> </h3>
                                    Date: </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">Biodata Analisa:</h5>                                            
                                            <h3 class="text-dark mb-1"><?= $hasil_analisa->nama;?></h3>
                                         
                                            <!-- <div><?= $hasil_analisa->TTL;?></div> -->
                                            <div>Jenis Kelamin : <?php if($hasil_analisa->jenis_kelamin == "L"){
                                                echo "LAKI-LAKI";
                                            }else{
                                                echo "PEREMPUAN";
                                            }?></div>
                                            <div>Dibuat Pada: <?= $hasil_analisa->created_at;?></div>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <h5 class="mb-3">To:</h5>
                                            <h3 class="text-dark mb-1">Anthony K. Friel</h3>                                            
                                            <div>478 Collins Avenue</div>
                                            <div>Canal Winchester, OH 43110</div>
                                            <div>Email: info@anthonyk.com</div>
                                            <div>Phone: +614-837-8483</div>
                                        </div> -->
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">#</th>
                                                    <th>Indikator</th>
                                                    <th>A</th>
                                                    <th class="right">B</th>
                                                    <th class="center">C</th>
                                                    <th class="right">D</th>
                                                    <th class="right">E</th>
                                                    <th class="right">F</th>
                                                    <th class="right">G</th>
                                                    <th class="right">H</th>
                                                    <th class="right">I</th>
                                                    <th class="right">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no =1; $index = 0; $data = array();
                                                    foreach($indikator as $i){
                                                      
                                                    $data[$i->nama][] = $jml[$index];
                                                ?>
                                                <tr>
                                                    <td class="center"><?= $no;?></td>
                                                    <td class="left strong"><?= $i->nama;?></td>
                                                    <td class="left"><?= $tabel_A[$index];?></td>
                                                    <td class="left"><?= $tabel_B[$index];?></td>
                                                    <td class="left"><?= $tabel_C[$index];?></td>
                                                    <td class="left"><?= $tabel_D[$index];?></td>
                                                    <td class="left"><?= $tabel_E[$index];?></td>
                                                    <td class="left"><?= $tabel_F[$index];?></td>
                                                    <td class="left"><?= $tabel_G[$index];?></td>
                                                    <td class="right"><?= $tabel_H[$index];?></td>
                                                    <td class="center"><?= $tabel_I[$index];?></td>
                                                    <td class="right"><?= $jml[$index];?></td>
                                                </tr>
                                                <?php
                                                $no++;
                                                $index++;
                                                    }
                                                  // die(json_encode(array_keys($data,min($data))))
                                                //   die(json_encode($data));

                                                ?>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                        </div>
                                        <div class="col-lg-4 col-sm-5 ml-auto">
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Yang Paling diminati</strong>
                                                        </td>
                                                        <td class="right"><?php 
                                                        $valid ="";
                                                        if($jmlALL == 702){
                                                            $valid = "Valid";
                                                        }else{
                                                            $valid = "Invalid";
                                                        }
                                                        
                                                        $jml2 = $jml;
                                                        $sort = sort($jml2);
                                                        $index = array_search($jml2[0],$jml);
                                                        $index1 = array_search($jml2[1],$jml);
                                                        $index2 = array_search($jml2[2],$jml);
                                                        
                                                        
                                                        echo $indikator[$index]->nama."<br>";
                                                        echo $indikator[$index1]->nama."<br>";
                                                        echo $indikator[$index2]->nama."<br>";
                                                        
                                                        ?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Status Perhitungan</strong>
                                                        </td>
                                                        <td class="right"><?= $valid;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Total</strong>
                                                        </td>
                                                        <td class="right">
                                                            <strong class="text-dark"><?= $jmlALL;?></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <p class="mb-0">Keterangan</p>
                                </div>
                                <div class="card-footer bg-white">
                                    <p class="text-dark"><?= $indikator[$index]->nama;?></p>
                                    <p class="mb-0"><?= $indikator[$index]->keterangan;?></p>
                                    <br>
                                    <p class="text-dark"><?= $indikator[$index1]->nama;?></p>
                                    <p class="mb-0"><?= $indikator[$index1]->keterangan;?></p>
                                    <br>
                                    <p class="text-dark"><?= $indikator[$index2]->nama;?></p>
                                    <p class="mb-0"><?= $indikator[$index2]->keterangan;?></p>
                                </div>
                               
                                <div class="card-footer bg-white">
                                    
                                    <p class="mb-0">SISTEM PAKAR RMIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>