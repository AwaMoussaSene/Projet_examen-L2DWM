
        <div class="login flex jc-sa aic">
            <div class="log">
                <h1>Login</h1>
                <form action="<?=WEBROOT?>" method="post" class="form-login">
                    <div class="inpute">
                        <label for="">Identifiant ou Email</label><br>
                        <input type="text" placeholder="" name="login" class="input-login">
                    </div>
                    <div class="inpute">
                        <label for="">Mot de passe</label><br>
                        <input type="password" placeholder="" name="mdp" class="input-login">
                    </div>
                    <div>
                    <?php 
                    if(isset($message)){
                        echo"$message";
                    }  
                    ?>
                    </div>
                    <button type="submit" name="connect" class="button-login">Se conecter</button>
              
                </form>
            </div>
            

        </div>
