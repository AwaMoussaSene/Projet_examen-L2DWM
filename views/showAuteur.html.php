<?php 
    if(!isset($_GET["pag"])) {
        $pag=1;
      
    }else{
        $pag=$_GET["pag"];   
    }
    $taille=count($auteurs);
    $nombre_ligne=3;
    $nombre_page=ceil($taille/$nombre_ligne);
    $position=($pag-1)*$nombre_ligne;
    $tab=array_slice($auteurs, $position, $nombre_ligne);
?>
            <div class="body">
                <h2>Liste des auteurs</h2>            
            <button class="button"><a href="<?=path("auteur","form-auteur") ?>">Ajouter un auteur</a></button>
            <form action="" class="form">
                <label for="">Profession:</label>
                <select name="etat" id="" class="select">
                        <option value="All">tout</option>
                        <?php foreach ($auteurs as  $auteur):?>
                            <option value="<?=$auteur["profession"]?>"><?=$auteur["profession"]?></option>
                        <?php endforeach?>
                    </select>
                <button type="sebmit" class="sebmit">ok</button>
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Profession</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tab as  $auteur):?>
                                    <tr>
                                     <td><?=$auteur["prenom"]?></td>
                                     <td><?=$auteur["nom"]?></td>
                                     <td><?=$auteur["profession"]?></td>
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
                <div class="pagi flex aic">
                <?php for ($i=1; $i <= $nombre_page ; $i++):?>
                    <a href="<?=path("auteur","show-auteur")?>&pag=<?=$i ?>" class="flex aic"><?=$i ?> </a>
                <?php endfor?>
            </div>
    </section>
           