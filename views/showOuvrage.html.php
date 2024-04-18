<?php 
    if(!isset($_GET["pag"])) {
        $pag=1;
      
    }else{
        $pag=$_GET["pag"];   
    }
    $taille=count($ouvrages);
    $nombre_ligne=3;
    $nombre_page=ceil($taille/$nombre_ligne);
    $position=($pag-1)*$nombre_ligne;
    $tab=array_slice($ouvrages, $position, $nombre_ligne);
?>
           <div class="body">
           <h2>Liste des ouvrages</h2>
                    <button class="button"><a href="<?=path("ouvrage","form-ouvrage") ?>">Ajouter un ouvrage</a></button>
                    <form action="<?=WEBROOT?>" class="form" method="post">
                        <label for="">Auteur:</label>
                        <select name="auteur" id="" class="select">
                                <option value="All">tout</option>
                                <?php foreach ($auteurs as  $auteur):?>
                                    <option value="<?=$auteur["id_auteur"]?>"><?=$auteur["prenom"]." ".$auteur["nom"]?></option>
                                <?php endforeach?>
                            </select>
                            <input type="hidden" name="controller" value="ouvrage">
                        <button type="submit" name="action" value="show-ouvrage" class="sebmit">ok</button>
                    </form>
                        <table class="tab">
                            <thead>
                                <tr>
                                    <th>Auteur</th>
                                    <th>Titre</th>
                                    <th>Date d'edition</th>
                                    <th>Exemplaires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($tab as  $ouvrage):?>
                                            <tr>
                                            <td><?=$ouvrage["prenom"]." ".$ouvrage["nom"]?></td>
                                            <td><?=$ouvrage["titre"]?></td>
                                            <td><?=$ouvrage["date_edition"]?></td>
                                            <td><button><a href="<?=WEBROOT?>/?controller=exemplaire&action=show-exemplaire-ouvrage&idOuvrage=<?=$ouvrage["id_ouvrage"]?>">details</a></button></td>   
                                                                
                                        </tr>
                                        
                                        <?php endforeach?>
                            </tbody>
                        </table>
                        <div class="pagi flex aic">
                        <?php for ($i=1; $i <= $nombre_page ; $i++):?>
                            <a href="<?=path("ouvrage","show-ouvrage")?>&pag=<?=$i ?>" class="flex aic"><?=$i ?> </a>
                        <?php endfor?>
            </div>
    </section>
           
