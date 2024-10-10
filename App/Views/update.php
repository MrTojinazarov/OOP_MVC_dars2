<form action="saveUpdateProduct" method="POST">
    <input type="hidden" name="id" value="<?= $models->id?>">
    <input type="text" name="name" placeholder="Name" value="<?= $models->name?>">
    <input type="number" name="price" placeholder="Price" value="<?= $models->price?>">
    <input type="number" name="count" placeholder="count" value="<?= $models->count?>">
    <button type="submit" name="ok">Save</button>
</form>