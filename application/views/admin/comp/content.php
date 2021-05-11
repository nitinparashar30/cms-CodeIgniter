<div class="text-center mt-4">
    <h2> Features</h2>
</div>
<?php

if($sdata){
    foreach($sdata as $sdata1){ 


?>

<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h2 class="display-4 fw-bold lh-1"><?= $sdata1->label?></h2>
            <p class="lead"><?php echo substr($sdata1->des, 0, 150).' ....'; ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                <?php
             echo anchor('home/page/'.$sdata1->id.'', 'Read more', ['class'=>'btn btn-warning btn-sm px-4 me-md-2 fw-bold']);
            
            if($this->session->userdata('email')){ ?>


                <?php
                echo anchor('admin/delcont/'.$sdata1->id.'', 'Delete', ['class'=>'btn btn-danger btn-sm px-4 me-md-2 fw-bold']);
                echo anchor('admin/editcont/'.$sdata1->id.'', 'Edit', ['class'=>'btn btn-primary btn-sm px-4 me-md-2 fw-bold']);
                ?>

                <?php
            }              

            ?>
            </div>

        </div>
        <div class="col-lg-4 offset-lg-1 p-0 position-relative overflow-hidden shadow-lg mx-3 my-3">
            <div class="position-lg-absolute top-0 left-0 overflow-hidden ">
                <img style="height:100%; width:100%" class="d-block rounded-lg-3" src="<?php echo $sdata1->img;          
            ?>" alt="">
            </div>
        </div>
    </div>
</div>
<?php
    }
}
?>
</div>
<div class="b-example-divider"></div>