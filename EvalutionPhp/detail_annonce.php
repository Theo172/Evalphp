<?php


include_once '_navbar.php';
include_once '_id.php';

?>



<div class="card m-4" style="min-width:30%">
    <div class="card-body">
        <h3 class="card-title"><?php echo strtoupper($annonce['title']);?>
            <br></br>
            <p style="font-size:70%;">
                A <?php echo $annonce['type']; ?> à
                <?php echo $annonce['city']?>, <?php echo $annonce['code_postal']?>
        </h3>
        Prix : <?php echo $annonce['price']; ?>€.</p>
        <hr>
        <p class="fw-bold">Description :</p>
        <p><?php echo $annonce['description']; ?></p>

        <?php
                if ($annonce['reserved']) {
                    echo '<p>Le message de réservation : </p>';echo$annonce['reservation_message'];
                    ?><br><br><?php
                    echo '<button class="btn btn-secondary col-5">Déjà réservé</button>';
                } else {
                    ?>
        <form action="reservation_post.php?id=<?php echo $annonce['id']; ?>" method="post"
            enctype="multipart/form-data">
            <label for="msg" class="form-label">Saisissez votre message de résérvation ici :</label>
            <textarea class="form-control" id="msg" name="msg" required></textarea>
            <br>
            <button type="submit" class="btn btn-primary col-3"><a
                    href="reservation_post.php?id=<?php echo $annonce['id']; ?>" style="color:white">Je réservé
                </a></button>
        </form>
        <br>
        <?php }?>
        <a href="annonces.php" class="btn btn-info col-3">Revenir aux annonces</a>
    </div>
</div>
</div>