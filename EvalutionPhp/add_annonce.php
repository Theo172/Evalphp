<?php


require 'includes/database.php';
include_once '_navbar.php';

$alert = false;
if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les champs requis sont vides";
    }
    if ($_GET['error'] == "erreur-inconnue") {
        $type = "warning";
        $message = "Une erreur s'est produite, nous nous excusons de la gêne occasionnée. Veuillez contacter l'administrateur du site, merci.";
    }
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <form action="add_annonce_post.php" method="post" class="container" enctype="multipart/form-data">
        <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" min="1" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="code_postal" class="form-label">Code postal</label>
            <input type="number" class="form-control" id="code_postal" name="code_postal" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Ville</label>
            <input class="form-control" type="text" id="city" name="city" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type de bien</label>
            <select class="form-select" aria-label="type" name="type">
                <option selected>Choissisez le type du bien </option>
                <option value="Louer">Location</option>
                <option value="Vendre">Vente</option>

            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" min="1" step="0.1" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success btn-lg">Ajouter produit</button>
        </div>

    </form>

</main>