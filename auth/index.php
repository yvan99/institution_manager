<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once '../inc/css1.php'; ?>
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';" >
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
     <!-- Sign In Area -->
     <div class="sign-in-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8">
            <div class="sign-in-2-box  justify-content-lg-end">
              <div class="heading text-center">
                <h2>Sign In</h2>
              </div>
              <form action="#">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address or username">
                </div>
                <div class="form-group">
                  <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="keep-sign-area">
                  <div class="check-form d-inline-block">
                    <label for="terms-check" class="check-input-control d-flex align-items-center mb-0">
                      <input class="d-none" type="checkbox" id="terms-check">
                      <span class="checkbox checkbox-2 rounded-check-box "></span>
                      <span class="remember-text">Keep me signed in</span>
                    </label>
                  </div>
                </div>
                <div class="sign-in-log-btn">
                  <button class="btn focus-reset">Submit</button>
                </div>
                <div class="create-new-acc-text text-center">
                  <p>Don't have an account? <a href="sign-in-1.html">Create for free</a></p>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>