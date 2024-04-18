<div class="body">
                <h2>Nouveau pret</h2>
            <form action="" class="form-adherent">
                <label for="">Adherent</label><br>
                <div class="label flex jc-sa ">
                    <input type="text" placeholder="telephone " class="inpute" >
                    <button type="submit" class="sebmit">Ok</button>
                </div>
                <div class="container flex jc-sa aic">
                        <div class="label">
                            <input type="text" placeholder="Prenom " class="inpute" readonly>
                        </div>
                        <div class="label">
                            <input type="text" placeholder="Nom " class="inpute" readonly>
                        </div>
                    </div>
            </form>
            <form action="" class="form-exemplaire">
                <label for="">Exemplaire</label><br>
                <div class="label flex jc-sa ">
                    <input type="text" placeholder="Code exemplaire" class="inpute" >
                    <button type="submit" class="sebmit">Ok</button>
                </div>
                <div class="container flex jc-sa aic">
                        <div class="label">
                            <input type="text" placeholder="Titre " class="inpute" readonly>
                        </div>
                    </div>
            </form>
                <form action="" class="form-date ">
                    <div class="container flex jc-sa aic">
                        <div class="label">
                            <label for=""></label><br>
                            <input type="text" placeholder="Date pret" class="inpute">
                        </div>
                        <div class="label">
                            <label for=""> </label><br>
                            <input type="text" placeholder="Date prevue" class="inpute">
                        </div>
                        <div class="label">
                            <label for=""> </label><br>
                            <select name="" id="" class="select">
                                <?php $etatprets=findAllEtatPret();?>
                                <?php foreach ($etatprets as $etatpret):?>
                                <option value="<?=$etatpret["libelle"]?>"><?=$etatpret["libelle"]?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                        <button type="submit" class="annuler">annuler</button>
                        <button type="submit" class="sebmit">valider</button>
                </form>