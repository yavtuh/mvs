<?php Core\View::render('layout/header');  ?>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card w-50 mt-5">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                    <form action="<?= SITE_URL .  '/users/create'  ?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= !empty($name) ? $name : '' ?>">

                        <?php if(!empty($name_error)): ?>
                            <div class="alert alert-danger"><?= $name_error ?></div>
                        <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" name="surname" class="form-control" id="surname" >
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="date" name="age" class="form-control" id="age" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="<?= SITE_URL .  '/login'  ?>">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php Core\View::render('layout/footer');  ?>