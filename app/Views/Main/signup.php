<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign-Up</title>
</head>

<body style="background-color: #eee;">
    <!-- REGIST -->
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-2 col-lg-1">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                        <a href="/"><i class="fas fa-arrow-left fa-5x"></i></a>
                    </div>
                </div>
                <div class="col-md-10 col-lg-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-sm-1">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="h1 fw-bold mx-1 mx-md-4 mt-4">Sign Up</p>
                                    <p class="mb-4 mx-1 mx-md-4"><b>Let's Get Started!</b> Please Fill This Form Down Belllow To Create Your Account</p>
                                    <?php if (isset($validation)) : ?>
                                        <div class="alert alert-danger">
                                            <?php echo \Config\Services::validation()->listErrors(); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php echo form_open('/sign-up'); ?>
                                    <div class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0 align-items-center">
                                                <div class="form-floating mb-2">
                                                    <input type="text" class="form-control" name="username" id="email" value="<?= set_value('username', session()->getFlashdata('oldInput.username')) ?>">
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0 align-items-center">
                                                <div class="form-floating mb-2">
                                                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email', session()->getFlashdata('oldInput.email')) ?>">
                                                    <label>Email address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0 align-items-center">
                                                <div class="form-floating mb-2">
                                                    <input type="password" class="form-control" name="password" id="email">
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0 align-items-center">
                                                <div class="form-floating mb-2">
                                                    <input type="password" class="form-control" name="confirm_password" id="email">
                                                    <label>Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <label class="form-check-label" for="form2Example3">
                                                Already Have An Account? <a href="/sign-in">Login</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </div>
                                    <?php echo form_close(); ?>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>