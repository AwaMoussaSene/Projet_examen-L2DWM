    <section class="flex jc-sa">
        <div class="nav">
                <div class="entete">
                    <div class="box-profil flex jc-sa aic">
                        <div class="cercle"><img src="image/profil.png" alt=""></div>
                        <h4>User: <?=$_SESSION["connect"]["prenom"]."  ".$_SESSION["connect"]["nom"]?></h4>
                    </div>
                    <div class="box-role flex jc-sa aic">
                        <img src="image/role.png" alt="">
                        <h5>ROLE: <?=$_SESSION["connect"]["libelle"]?></h5>
                    </div>
                </div>
                <div class="link">
                    <button class="button_on flex aic">
                        <img src="image/ajouts.png" alt="" class="image">
                        <a href="<?=path("ouvrage","show-ouvrage") ?>">Liste des ouvrages</a>
                    </button>
                    <button class="button_on flex aic">
                        <img src="image/ajouts.png" alt="" class="image">
                        <a href="<?=path("exemplaire","show-exemplaire") ?>">Liste des exemplaires</a>
                    </button>
                    <button class="button_on flex aic">
                        <img src="image/ajouts.png" alt="" class="image">
                        <a href="">Liste des auteurs</a>
                    </button>
                    <button class="button_on flex aic">
                        <img src="image/ajouts.png" alt="" class="image">
                        <a href="">Liste des rayons</a>
                    </button>
                   
                </div>
                <button class="button_one flex aic">
                        <img src="image/deconnexion.png" alt="" class="image">
                        <a href="">Deconnexion</a>
                    </button>
                
         </div>
 </div>