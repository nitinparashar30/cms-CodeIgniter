<?php
include "headerdash.php";
?>

<div class="container">
    <h3>Slider Menu</h3>
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

        
<div class="card card-primary my-3">
            <div class="card-header">
                <h3 class="card-title">Edit Content</h3>
            </div>
             
            <!-- /.card-header -->
            <!-- form start -->
            <?php
           echo form_open_multipart('admin/upcont');
           ?>
            <div class="card-body">
                <div class="form-group">
                <input type="hidden"  name="id" value="<?= $result->id ?>">
                    <label for="">Lable Title</label>
                    <input type="text" name="label" value="<?= $result->label ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Content Body</label>
                    <textarea class="form-control" name="des" rows="3"><?= $result->des ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">featured Image</label>
                   <div class="container">
                   <img src="<?= $result->img ?>">
                   
                   </div><br/>
                   <hr>
                   <h4 class="text-center"> or upload another featured image... </h4>
                    <div class="input-group">
                        <div class="custom-file">


                            <?= form_upload(['name'=>'img', 'class'=>'form-control'])?>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer d-grid gap-2">
                <button type="submit" class="btn btn-danger">Update Content</button>
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