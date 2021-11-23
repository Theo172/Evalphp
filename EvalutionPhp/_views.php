<?php 
$annonces = $connexion->query("SELECT advert.* FROM `advert`ORDER BY id DESC ");
?>

<div class="d-flex flex-wrap">
    <?php
foreach($annonces as $annonce){
?>
    <div class="card m-4 " style="min-width:300px">
        <div class="card-body">
            <h3 class="card-title"><?php echo strtoupper($annonce['title']);?>
                <br></br>


                <p style="font-size:70%;">
                    A <?php echo $annonce['type']; ?> à
                    <?php echo $annonce['city']?>
            </h3>
            Prix : <?php echo $annonce['price']; ?>€.</p>
            <hr>
            <div class="d-flex justify-content-around">
                <button class="btn btn-primary"><a href="detail_annonce.php?id=<?php echo $annonce['id']; ?>"
                        style="color:white">Consulter
                        l'annonce</a></button>

                </form>





            </div>
        </div>
    </div>

    <?php
}
?>
</div>