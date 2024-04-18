<?php 
    if(!isset($_GET["pag"])) {
        $pag=1;
      
    }else{
        $pag=$_GET["pag"];   
    }
    $taille=count($dmdprets);
    $nombre_ligne=3;
    $nombre_page=ceil($taille/$nombre_ligne);
    $position=($pag-1)*$nombre_ligne;
    $tab=array_slice($dmdprets, $position, $nombre_ligne);
?>
<div class="body">
                <h2>Validation des demandes</h2>            
            <button></button>
            <form action="" class="form">
               
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Adherent</th>
                            <th>Exemplaires</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tab as  $dmdpret):?>
                                <tr>
                                    <td><?=$dmdpret["prenom"]." ".$dmdpret["nom"]?></td>
                                     <td><?=$dmdpret["titre"]?></td>
                                     <td><button class="val"><a href="">Valider</a></button>
                                        <button class="rej"><a href="">rejeter</a></button>
                                    </td>                                  
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
                <div class="pagi flex aic">
                <?php for ($i=1; $i <= $nombre_page ; $i++):?>
                    <a href="<?=path("dmdpret","val-pret")?>&pag=<?=$i ?>" class="flex aic"><?=$i ?> </a>
                <?php endfor?>
            </div>
    </section>
           