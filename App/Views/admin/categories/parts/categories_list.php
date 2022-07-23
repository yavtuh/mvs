<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Images</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <th scope="row"><?= $category->id ?></th>
            <td><?= $category->name ?></td>
            <td><img width="100" src="<?= ASSETS_URL. '/images'  . $category->image ?>" ></td>

            <td>
                <a href="<?= url("admin/categories/{$category->id}/edit") ?>" class="btn btn-info">Edit</a>
                <form action="<?= url("admin/categories/{$category->id}/destroy") ?>" method="post">
                    <button class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>