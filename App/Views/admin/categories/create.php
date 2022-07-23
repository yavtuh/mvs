<?php Core\View::render('layout/header', ['admin'=> true]);
?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-uppercase">
                <form action="<?= url('/admin/categories/store') ?>" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card w-50 mt-5 container">
                                    <h5 class="card-header">Create new categories</h5>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" name='name' id="name" placeholder="Name">
                                        <?php if (!empty($data['errors']['name'])):?>
                                            <div class="alert alert-danger"><?= $data['errors']['name'] ?></div>
                                        <?php endif;?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Category Desc</label>
                                        <textarea class="form-control" name='description' id="description" rows="4"></textarea>
                                        <?php if (!empty($data['errors']['description'])):?>
                                            <div class="alert alert-danger"><?= $data['errors']['description'] ?></div>
                                        <?php endif;?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name='image' id="image" >
                                        <?php if (!empty($data['errors']['image'])):?>
                                            <div class="alert alert-danger"><?= $data['errors']['image'] ?></div>
                                        <?php endif;?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php Core\View::render('layout/footer'); ?>