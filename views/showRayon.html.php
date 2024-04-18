<div class="body">     
<h2>Nouveau rayon</h2>
            <form action="" class="form-rayon">
                <label for="">Ajouter rayon</label><br>
                <div class="label flex jc-sa ">
                    <input type="text" placeholder="" class="inpute">
                    <button type="submit" class="sebmit">Ajouter</button>
                </div>
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
           
</div>
