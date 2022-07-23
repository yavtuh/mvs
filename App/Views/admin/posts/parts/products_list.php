<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><?= $post->id ?></th>
            <td><?= $post->title ?></td>
            <td><img width="100" src="<?= ASSETS_URL. '/images'  . $post->image ?>" ></td>
            <td>
                <a href="<?= url("admin/posts/{$post->id}/edit") ?>" class="btn btn-info">Edit</a>
                <form action="<?= url("admin/posts/{$post->id}/destroy") ?>" method="post">
                    <button class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>