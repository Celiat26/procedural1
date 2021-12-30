




<!-- card -->
<div class="container py-5">
<div class="row align-items-center justify-space-around"
>
<?php foreach($members as $member) : ?>

<div class="card mb-3 col-sm-12 col-md-6 col-lg-3 mt-2" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $member['photo'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $member['poste'] ?></h5>
        <p class="card-text"><?= $member['nom'] ?></p>
        <p class="card-text"><?= $member['telephone'] ?></p>
        <a href="pagestaff.php?id=<?= $member['id'] ?>" class="btn btn-danger">Voir le profil</a>

      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
</div>
</div>
<!-- card -->



 

    <!-- But : vous allez afficher 4 membres du staff
Donner pour chaque membre un poste, un nom complet un num de tel et une photo 
afficher ca dans des cars boodstrap -->

<!-- // créer dans le dossier modele un fichier staffModel.php qui contiendra les infos de tous les membres -->
<!-- Pour le responsive utiliser le système de colone de bootstrap et il faut que sur mobile une
card prenne 12colones que sur tablettes une cazd prenne 6 colone
sur ordi 3col -->


