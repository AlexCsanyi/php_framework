<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5 mb-5">
            <h2>Welcome Back!</h2>
            <p>Please fill in your credentials to login</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">

                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? "is-invalid" : ''; ?>"
                        vlaue="<?php echo $data['email'] ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['email_error']?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? "is-invalid" : ''; ?>"
                        vlaue="<?php echo $data['password'] ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['password_error']?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-block"> 
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">
                            No account? Register
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>