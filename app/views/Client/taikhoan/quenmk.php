
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="public/img/logo.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <?php echo '<h2 style="color:red"> '.$err.' </h2>' ?>
          <form method="post">

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nhập email tài khoản đã quên mật khẩu" />
              <label class="form-label" for="form3Example3">Nhập email tài khoản</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="text" id="form3Example4" name="user" class="form-control form-control-lg"
                placeholder="tên đăng nhập" />
              <label class="form-label"  for="form3Example4">Nhập user tài khoản</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" name="laymatkhau" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Lấy mật khẩu</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản <a href="index.php?redirect=dangnhap"
                  class="link-danger">Đăng nhập</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>