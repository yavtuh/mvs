<?php Core\View::render('layout/header', ['admin'=> true]);
?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-uppercase">
                <form action="<?= url("/admin/posts/{$post->id}/update") ?>" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card w-50 mt-5 container">
                                    <h5 class="card-header">Create new post</h5>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name='title' id="title" placeholder="Title" value="<?= !empty($data['title']) ? $data['title'] : '' ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label for="body" class="form-label">Post Desc</label>
                                        <textarea class="form-control" name='body' id="body" rows="4"><?= !empty($data['body']) ? $data['body'] : '' ?></textarea>

                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name='image' id="image" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Created  at</label>
                                        <input type="date" name="created_at" value="" class="form-control" id="title" placeholder="Post title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Updated at</label>
                                        <input type="date" name="updated_at" value="" class="form-control" id="title" placeholder="Post title">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php Core\View::render('layout/footer'); ?>