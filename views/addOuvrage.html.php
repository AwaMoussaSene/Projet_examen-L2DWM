    <div class="body">
    <h2>Nouveau ouvrage</h2>
                <form method="post" action="<?=WEBROOT;?>" class="form-ouvrage flex jc-sa aic">
                    <div class="container">
                        <div class="label">
                            <label for="">Titre ouvrage</label><br>
                            <input type="text" placeholder="" class="inpute" name="Titre">
                        </div>
                        <div class="label">
                            <label for="">Date d'edition</label><br>
                            <input type="text" placeholder="" class="inpute" name="date_edition">
                        </div>
                        <div class="label">
                            <label for="">reference</label><br>
                            <input type="text" placeholder="" class="inpute" name="reference">
                        </div>
                        <input type="hidden" name="controller" value="ouvrage">
                        <button type="submit" class="annuler">annuler</button>
                        <button type="submit" class="sebmit" name="action" value="form-ouvrage">valider</button>
                    </div>
                </form>
    </div>

