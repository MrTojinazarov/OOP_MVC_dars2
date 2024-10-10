<h1>model List</h1>

<table class="table table-selected table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <tr>
                    <td><?= $model->id?></td>
                    <td><?= $model->name ?></td>
                    <td><?= $model->price ?></td>
                    <td><?= $model->count ?></td>
                    <td>
                        <form action="updateProduct" method="POST">
                            <input type="hidden" name="id" value="<?= $model->id?>">
                            <button name="ok" type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <form action="deleteProduct" method="POST">
                            <input type="hidden" name="id" value="<?= $model->id?>">
                            <button name="ok" type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No models available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="add_model">Add model</a>
