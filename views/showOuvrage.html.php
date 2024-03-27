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
            <hr>
            
            <button class="button"><a href="../pages/ajout_ouvrage.html">Ajouter un ouvrage</a></button>
            <form action="" class="form">
                <label for="">Titre:</label>
                <select name="etat" id="" class="select">
                        <option value="All">tout</option>
                        <?php foreach ($ouvrages as $ouvrage):?>
                            <option value="<?=$ouvrage["titre"]?>"><?=$ouvrage["titre"]?></option>
                        <?php endforeach?>
                    </select>
                <button type="sebmit" class="sebmit">ok</button>
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date d'edition</th>
                            <th>Exemplaires</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tab as  $ouvrage):?>
                                    <tr>
                                     <td><?=$ouvrage["titre"]?></td>
                                     <td><?=$ouvrage["date_edition"]?></td>
                                     <td><button><a href="">details</a></button></td>   
                                                           
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
           