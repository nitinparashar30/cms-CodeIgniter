<?php
include "header.php";

$this->load->view('admin/comp/slider');

?>

<div class="b-example-divider"></div>
<?php
$this->load->view('admin/comp/content');
?>


<div class="b-example-divider"></div>
<?php
$this->load->view('admin/comp/services');
?>

<div class="b-example-divider"></div>


<div class="b-example-divider"></div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each
                required form group has a validation state that can be triggered by attempting to submit the form
                without completing it.</p>
        </div>
        <div class="col-10 mx-auto col-lg-5">
            <form class="p-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            </form>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>


<?php
include "footer.php";
?>