<section class="container-fluid text-center">
    <div class="row row-cols-4" >
        <div class="col border border-info">
            <h4>Admin</h4>
            <div>
               <button type="button" class="btn btn-primary btn-sm">Ajouter</button>            
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($admins)): ?>
                        <?php foreach ($admins as $admin): ?>
                            
                        <tr>
                            <td><?= $admin['firstname']; ?></td>
                            <td><?= $admin['lastname']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Gérer</button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Aucun admin</p>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col border border-info">
            <h4>Commerciaux</h4>
            <div>
               <button type="button" class="btn btn-primary btn-sm">Ajouter</button>            
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($commercials)): ?>
                        <?php foreach ($commercials as $commercial): ?>
                            
                        <tr>
                            <td><?= $commercial['firstname']; ?></td>
                            <td><?= $commercial['lastname']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Gérer</button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3">Aucun commercials</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col border border-info">
            <h4>Clients</h4>
            <div>
               <button type="button" class="btn btn-primary btn-sm">Ajouter</button>            
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($clients)): ?>
                        <?php foreach ($clients as $client): ?>
                            
                        <tr>
                            <td><?= $client['firstname']; ?></td>
                            <td><?= $client['lastname']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Gérer</button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3">Aucun clients</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col border border-info">
            <h4>Prospect</h4>
            <div>
               <button type="button" class="btn btn-primary btn-sm">Ajouter</button>            
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Tel</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($prospects)): ?>
                        <?php foreach ($prospects as $prospect): ?>
                            
                        <tr>
                            <td><?= $prospect['tel']; ?></td>
                            <td><?= $prospect['fistname']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Gérer</button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3">Aucun prospect</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>