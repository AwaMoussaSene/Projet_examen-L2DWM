<?php 

?>
<div class="body">
                <h2>Liste des exemplaires</h2>
            <hr>
            
            <button class="button"><a href="">Ajouter un rayon</a></button>
            <form action="" class="form">
             
            </form>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Nom rayon</th>
                            <th>Exemplaire</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($rayons as  $exemplaire):?>
                                    <tr>
                                     <td><?=$exemplaire["nomrayon"]?></td>
                                     <td><button><a href="">details</a></button></td>   
                                                           
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
                
    </section>
           