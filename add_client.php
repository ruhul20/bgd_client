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
            
                                            <h4 class="header-title">Add New Client</h4>
                                            <form>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-firstname-input">First name</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-firstname-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-lastname-input">Last name</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-lastname-input">
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Phone</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-phoneno-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-email-input">Email</label>
                                                                        <input type="email" class="form-control" id="progress-basicpill-email-input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-address-input">Address</label>
                                                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
            
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