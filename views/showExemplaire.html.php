<?php 
    $etat=isset($_REQUEST["etat"])?$_REQUEST["etat"]:"All";
    $exemplaires=findAllExemplaire($etat);
    if(!isset($_GET["pag"])) {
        $pag=1;
      
    }else{
        $pag=$_GET["pag"];   
    }
    $taille=count($exemplaires);
    $nombre_ligne=3;
    $nombre_page=ceil($taille/$nombre_ligne);
    $position=($pag-1)*$nombre_ligne;
    $tab=array_slice($exemplaires, $position, $nombre_ligne);
?>
            <div class="body">
                <h2>Liste des exemplaires</h2>
            <button class="button"><a href="<?=path("exemplaire","form-exemplaire") ?>">Ajouter un exemplaire</a></button>
            <form action="<?=WEBROOT?>" class="form" method="get">
                <label for="">Etat:</label>
                <select name="etat" id="" class="select">
                        <option value="All">tout</option>
                        <?php foreach ($EtatExemplaires as $EtatExemplaire):?>
                            <option value="<?=$EtatExemplaire["libelle"]?>"><?=$EtatExemplaire["libelle"]?></option>
                        <?php endforeach?>
                    </select>
                    <input type="hidden" name="controller" value="exemplaire">
                    <button type="submit" name="action" value="show-exemplaire" class="sebmit">ok</button>
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Mot cle</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tab as  $exemplaire):?>
                                    <tr>
                                     <td><?=$exemplaire["titre"]?></td>
                                     <td><?=$exemplaire["prenom"]."  ".$exemplaire["nom"]?></td>
                                     <td><button><a href="<?=WEBROOT?>/?controller=mot&action=show-exemplaire-mot&idmotcle=<?=$exemplaire["id_mot"]?>">details</a></button></td>   
                                     <td><button><?=$exemplaire["libelle"]?></button></td>
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
                <div class="pagi flex aic">
                <?php for ($i=1; $i <= $nombre_page ; $i++):?>
                    <a href="<?=path("exemplaire","show-exemplaire")?>&pag=<?=$i ?>" class="flex aic"><?=$i ?> </a>
                <?php endfor?>
            </div>
    </section>
           