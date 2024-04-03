     <div class="body">
                <h2>Nouveau demandes</h2>
            <hr>
           <form action="" class="form-dmd">
                <label for="">Exemplaire:</label>
                <select name="" id="" class="select-dmd">
                        <?php $ouvrages=findAllOuvrage();?>
                        <?php foreach ($ouvrages as  $ouvrage):?>
                            <option value="<?=$ouvrage["titre"]?>"><?=$ouvrage["titre"]?></option>
                        <?php endforeach?>
                    </select>
                <button type="submit" class="annuler">annuler</button>
                <button type="submit" class="sebmit">valider</button>
                

            </form>