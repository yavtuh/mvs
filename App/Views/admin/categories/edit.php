<?php Core\View::render('layout/header', ['admin'=> true]);
?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-uppercase">
                <form action="<?= url("/admin/categories/{$category->id}/update") ?>" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card w-50 mt-5 container">
                                    <h5 class="card-header">UpdateS categories</h5>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="<?= $category->name ?>" name='name' id="name" placeholder="Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Category Desc</label>
                                        <textarea class="form-control" name='description'  id="description" rows="4"><?= $category->description ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name='image' id="image" >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php Core\View::render('layout/footer'); ?>