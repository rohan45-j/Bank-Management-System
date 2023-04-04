 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Welcome <?php echo $_settings->info('name') ?></h1>
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5" style="background: #E9ECF0;">
    <div class="container d-flex justify-content-center">
        
        <div class="card card-outline card-primary">
            <a class="navbar-brand text-light" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="120" height="120" class="mx-auto d-block align-top border border-dark" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
            </a>
            <div class="card-header text-center" style="background-color: #ffffff!important;">
                <a href="./" class="h1" style="text-decoration: none"><b>Login</b></a> 
            </div>
           <div class="card-body">
               <form id="login-client" action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control fw-bolder" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control fw-bolder" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block font-bolder">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>






           </div>
       </div>
    </div>
</section>
<script>
</script>