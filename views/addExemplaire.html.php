<div class="body">
                <h2>Nouveau exemplaire</h2>
            <form action="" class="form-ov">
                <label for="">Reference ouvrage</label><br>
                <div class="label flex jc-sa ">
                    <input type="text" placeholder="" class="inpute">
                    <button type="submit" class="sebmit">Ok</button>
                </div>
            </form>
                <form action="" class="form-ex ">
                    <div class="container flex jc-sa aic">
                        <div class="label">
                            <label for="">Titre exemplaire</label><br>
                            <input type="text" placeholder="" class="inpute">
                        </div>
                        <div class="label">
                            <label for="">Prenom auteur </label><br>
                            <input type="text" placeholder="" class="inpute">
                        </div>
                    </div>
                    <div class="container flex jc-sa aic">
                        <div class="label">
                            <label for="">Nom auteur</label><br>
                            <input type="text" placeholder="" class="inpute">
                        </div>
                        <div class="label">
                            <label for="">Etat</label><br>
                            <select name="" id="" class="select">
                                <?php $EtatExemplaires=findAllEtatExemplaire();?>
                                <?php foreach ($EtatExemplaires as $EtatExemplaire):?>
                                    <option value="<?=$EtatExemplaire["libelle"]?>"><?=$EtatExemplaire["libelle"]?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                        <button type="submit" class="annuler">annuler</button>
                        <button type="submit" class="sebmit">valider</button>
                </form>