<a href="<?= URI ?>admin" class="btn btn-danger">Back</a>
<a href="<?= URI ?>admin/page/create" class="btn btn-success">New</a>
<h1>Pages</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Title</strong></td>
        <td><strong>Actions</strong></td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($items as $item) :
    ?>
    <tr>
        <td><?= $item->id ?></td>
        <td><?= $item->title ?></td>
        <td>
            <a href="<?= URI ?>page/<?= $item->id ?>" target="_blank" class="btn btn-warning">Show</a>
            <a href="<?= URI ?>admin/page/edit/<?= $item->id ?>" class="btn btn-primary">Edit</a>
            <form action="<?= URI ?>admin/page/delete" method="post" style="display: inline;">
                <input type="hidden" name="id" value="<?= $item->id ?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
