<?php 
    if(!isset($_GET["pag"])) {
        $pag=1;
      
    }else{
        $pag=$_GET["pag"];   
    }
    $taille=count($prets);
    $nombre_ligne=3;
    $nombre_page=ceil($taille/$nombre_ligne);
    $position=($pag-1)*$nombre_ligne;
    $tab=array_slice($prets, $position, $nombre_ligne);
?>
<div class="body">
                <h2>Liste des prets</h2>
            <button class="button"><a href="<?=path("pret","form-pret") ?>">Ajouter un pret</a></button>
            <form action="" class="form">
                <label for="">Etat:</label>
                <select name="etat" id="" class="select">
                        <option value="All">tout</option>
                        <?php foreach ($etatprets as  $etatpret):?>
                            <option value="<?=$etatpret["libelle"]?>"><?=$etatpret["libelle"]?></option>
                        <?php endforeach?>
                    </select>
                <button type="sebmit" class="sebmit">ok</button>
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Adherent</th>
                            <th>Exemplaires</th>
                            <th>Date pret</th>
                            <th>Date prevue</th>
                            <th>Date reel</th>
                            <th>etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tab as  $pret):?>
                                    <tr>
                                    <td><?=$pret["prenom"]." ".$pret["nom"]?></td>
                                     <td><?=$pret["titre"]?></td>
                                     <td><?=$pret["datepret"]?></td>
                                     <td><?=$pret["dateprevue"]?></td>
                                     <td><?=$pret["datereel"]?></td>
                                     <td><?=$pret["libelle"]?></td>   
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
                <div class="pagi flex aic">
                <?php for ($i=1; $i <= $nombre_page ; $i++):?>
                    <a href="<?=path("pret","show-pret")?>&pag=<?=$i ?>" class="flex aic"><?=$i ?> </a>
                <?php endfor?>
            </div>
    </section>
           