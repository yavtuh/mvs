<?php Core\View::render('layout/header', ['admin'=> true]);
?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-uppercase">
                <form action="<?= url('/admin/posts/store') ?>" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card w-50 mt-5 container">
                                    <h5 class="card-header">Create new post</h5>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name='title' id="title" placeholder="Title" value="<?= !empty($data['title']) ? $data['title'] : '' ?>">
                                        <?php if (!empty($data['errors']['title'])):?>
                                            <div class="alert alert-danger"><?= $data['errors']['title'] ?></div>
                                        <?php endif;?>

                                    </div>
                                    <div class="mb-3">
                                        <label for="body" class="form-label">Post Desc</label>
                                        <textarea class="form-control" name='body' id="body" rows="4"><?= !empty($data['body']) ? $data['body'] : '' ?></textarea>
                                        <?php if (!empty($data['errors']['body'])): ?>
                                            <div class="alert alert-danger"><?= $data['errors']['body'] ?></div>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <span class="input-group-text">Category</span>
                                        <input type="category"
                                               class="form-control"
                                               name="category"
                                               id="category"
                                               aria-label="Recipient's username"
                                               aria-describedby="button-addon2"
                                               value=""
                                        >
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name='image' id="image" >
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php Core\View::render('layout/footer'); ?>