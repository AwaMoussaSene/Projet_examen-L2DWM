
<div class="form">
            <form action="" method="post">
            <div class="inpute">
                <label for="">Identifiant ou Email</label>
                <input type="text" placeholder="Identifiant ou Email" name="login">
            </div>
            <div class="inpute">
                <label for="">Mot de passe</label>
                <input type="password" placeholder="mot de passe" name="mdp">
            </div>
            <div>
               <?php 
               if(isset($message)){
                   echo"$message";
               }

                 
               ?>
             </div>
            <button type="sebmit" name="connect" class="but">Se conecter</button>
              
            </form>

        </div>
