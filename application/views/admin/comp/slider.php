<div class="container my-3">



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php
$i = 0;
foreach($selectimg as $selectimg1){
                $act= '';
              if($i == 0){
                $act = 'active';
                $i++;
              }
  
  
  ?>
            <div class="carousel-item <?= $act ?>">
                <img src="<?= $selectimg1->img ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ts">
                    <h4><?= $selectimg1->label ?></h4>
                    <p class="fs-5"><?= $selectimg1->des ?></p>
                </div>
            </div>
            <?php
}
?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>