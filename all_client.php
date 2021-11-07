<?php 
require_once 'inc/header.inc.php';
?>
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Data Tables</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                                             <li class="breadcrumb-item active">All Clients</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="add_client.php" class="btn btn-success">Add Client</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">All Client List</h4>
                                            <?php 
                                            $results=select('client','*');   
                                            if (mysqli_num_rows($results) > 0) {

                                            ?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobail</th>
                                                    <th>Designation</th>
                                                    <th>Company name</th>
                                                    <th>Company Email</th>
                                                    <th>Company Contact</th>
                                                    <th>Company Address</th>
                                                    <th>Created At</th>
                                                    <th>Created By</th>
                                                    <th>Updated At</th>
                                                    <th>Updated By</th>
                                                    <th>Sattus</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                    <?php 
                                                    foreach($results as $rowfordata ){
                                                    ?>
                                                <tr>
                                                    <td><?=$rowfordata['name'];?></td>
                                                    <td><?=$rowfordata['email'];?></td>
                                                    <td><?=$rowfordata['mobail'];?></td>
                                                    <td><?=$rowfordata['designation'];?></td>
                                                    <td><?=$rowfordata['company_name'];?></td>
                                                    <td><?=$rowfordata['company_email'];?></td>
                                                    <td><?=$rowfordata['company_contact'];?></td>
                                                    <td><?=$rowfordata['company_address'];?></td>
                                                    <td><?=$rowfordata['created_at '];?></td>
                                                    <td><?=$rowfordata['created_by'];?></td>
                                                    <td><?=$rowfordata['updated_at'];?></td>
                                                    <td><?=$rowfordata['updated_by'];?></td>
                                                    <td><?=$rowfordata['status'];?></td> 
                                                    <td><a href=""></a></td> 
                                                </tr>
                                                <?php
                                            }
                                                ?>
                                                </tbody>
                                            </table>
                                            <?php 
                                             }else{
                                                 echo '<h3 class="text-center">Recourd Not Found</h3>';
                                             }
                                            ?>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


            
                       
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
              

    <?php 
    require_once 'inc/footer.inc.php';
    ?>