
            <div class="body">
                <h2>Liste des exemplaires</h2>
                <div class="help" style="width: 100%; height:10vh"></div>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $exemplaireOuvrages=findExemplaireByOuvrage($_REQUEST["idOuvrage"]);
                        foreach ( $exemplaireOuvrages as  $exemplaire):?>
                                    <tr>
                                     <td><?=$exemplaire["titre"]?></td>
                                     <td><?=$exemplaire["prenom"]."  ".$exemplaire["nom"]?></td>
                                     <td><button><?=$exemplaire["libelle"]?></button></td>
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
    </section>
