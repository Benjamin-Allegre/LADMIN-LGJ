<section class="container-fluid text-center">
    <div class="row row-cols-3" >
        <div class="col border border-info">
            <h4>Admin</h4>
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
                            <td></td>
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
                            <td></td>
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
                            <td></td>
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
    </div>
</section>