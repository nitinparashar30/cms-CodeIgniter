<?php
include "headerdash.php";
?>
<div class="container">
    <h3>Slider Menu</h3>
    <div class="container">

    <?php
if($this->session->flashdata('del') || $this->session->flashdata('select')){ ?>

<div class="alert alert-danger" role="alert">
  <?php echo $this->session->flashdata('del');
   echo $this->session->flashdata('select'); ?>
</div>

<?php
}
?>

        <div class="slider">

            <?php
include "comp/slider.php";
?>

        </div>

        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button collapsed btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Choose from gallery
      </button>
    </h2>

    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">

      <?php
      if($sdata){
        foreach($sdata as $sdata1){ ?>
                <!-- card start -->
                    <div class="col-3">
                    <div class="card" style="width: 16rem;">
                        <img src="<?= $sdata1->img?>"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sdata1->label?></h5>
                            <p class="card-text"><?= $sdata1->des?></p>
                            <?php
                            if($sdata1->status == 0){
                                echo anchor('admin/imgok/'.$sdata1->id.'','Select', ['class'=> 'btn btn-primary btn-sm']);
                            }else{
                                echo anchor('admin/imgre/'.$sdata1->id.'','Remove', ['class'=> 'btn btn-danger btn-sm']);
                          
                            }
                            ?>
                           
                        </div>
                    </div>
                    </div>
                    <!-- card end -->                     
<?php
        }
      }  
      ?>       

                </div>     
      
      </div>
    </div>
  </div>
</div>
        



        <div class="card card-primary my-3">
            <div class="card-header">
                <h3 class="card-title">Add new image to slider</h3>
            </div>
            <?php
            if($this->session->flashdata('upload')){
              echo $this->session->flashdata('upload');
            }
            ?>
            <!-- /.card-header -->
            <!-- form start -->
            <?php
           echo form_open_multipart('admin/setimg');
           ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Label for Slide</label>
                    <input type="text" name="label" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Content for slide</label>
                    <input type="text" name="des" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
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
<?php
include "footerdash.php";
?>