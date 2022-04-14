<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
               
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">SIP2K3</h1>
                    <img src="<?= base_url('assets/img/disnaker.png'); ?>" style="width: 100px; height: 100px;">
                  </div><br>
                  <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                    </div>
                    <div class="form-group">
                      <input color="dark" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required>
                    </div>
                   
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
                    <hr>
                   
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>