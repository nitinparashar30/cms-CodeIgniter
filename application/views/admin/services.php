<?php
include "headerdash.php";
?>

<div class="container">
    <h3>Services Menu</h3>
    <div class="container">
    <?php
if($this->session->flashdata('del') || $this->session->flashdata('upload')){ ?>

<div class="alert alert-danger" role="alert">
  <?php echo $this->session->flashdata('del');
   echo $this->session->flashdata('upload'); ?>
</div>

<?php
}
?>
        <div class="content">

        <?php
        $this->load->view('admin/comp/services');
        ?>

<div class="card card-primary my-3">
            <div class="card-header">
                <h3 class="card-title">Add New Services</h3>
            </div>
             
            <!-- /.card-header -->
            <!-- form start -->
            <?php
           echo form_open_multipart('admin/setcont');
           ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Lable Title</label>
                    <input type="text" name="label" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Content Body</label>
                    <textarea class="form-control" name="des" rows="3"></textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">featured Image</label>
                    <div class="input-group">
                        <div class="custom-file">


                            <?= form_upload(['name'=>'img', 'class'=>'form-control'])?>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer d-grid gap-2">
                <button type="submit" class="btn btn-danger">Upload</button>
            </div>
            <?php
              echo form_close();
              ?>
        </div>


    </div>

        </div>

</div>



<?php
include "footerdash.php";
?>