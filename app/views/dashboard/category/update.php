<?php include VIEWS."dashboard/layout/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1><?= $title; ?></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active"><?= $title; ?></li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="card">
       <div class="card-header">
         <h3 class="card-title">Title</h3>

         <div class="card-tools">
           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
             <i class="fas fa-minus"></i>
           </button>
           <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
             <i class="fas fa-times"></i>
           </button>
         </div>
       </div>
       <div class="card-body">

       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= $action; ?>" method="post"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Category Name</label>
                    <input type="text" value="<?= $category[0]['name']; ?>" name="name" class="form-control" id="category" placeholder="Enter category">
                  </div>
                </div>
                <input type="hidden" value="<?= $category[0]['id']; ?>" name="id" class="form-control" id="category" placeholder="Enter category">

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"> Udate Category</button>
                </div>
              </form>
            </div>


        </div>
       <!-- /.card-body -->
       <div class="card-footer">
         Footer
       </div>
       <!-- /.card-footer-->
     </div>
     <!-- /.card -->

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <?php include VIEWS."dashboard/layout/footer.php"; ?>


