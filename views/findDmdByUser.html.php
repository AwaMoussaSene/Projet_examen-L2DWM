
            <div class="body">
                <h2>Liste des demandes</h2>
            
            <button class="button"><a href="<?=path("dmdpret","form-dmd") ?>">Nouveau</a></button>
            <form action="" class="form">
                <label for="">Auteur:</label>
                <select name="etat" id="" class="select">
                        <option value="All">tout</option>
                        <?php $auteurs=findAllAuteur();?>
                        <?php foreach ($auteurs as  $auteur):?>
                            <option value="<?=$auteur["prenom"]."  ".$auteur["nom"]?>"><?=$auteur["prenom"]."  ".$auteur["nom"]?></option>
                        <?php endforeach?>
                    </select>
                <button type="sebmit" class="sebmit">ok</button>
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Exemplaire</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($users as  $user):?>
                                    <tr>
                                     <td><?=$user["date_edition"]?></td>
                                     <td><?=$user["titre"]?></td>
                                     <td><?=$user["libelle"]?></td>
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
            
    </section>
           