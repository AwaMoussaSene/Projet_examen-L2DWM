
            <div class="body">
                <h2>Liste des mot cles</h2>
                <div class="help" style="width: 100%; height:10vh"></div>
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Mot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($exemplaireMots as  $exemplaireMot):?>
                                    <tr>
                                     <td><?=$exemplaireMot["mot"]?></td>
                                  </tr>
                                 
                                  <?php endforeach?>
                    </tbody>
                </table>
              
    </section>
           