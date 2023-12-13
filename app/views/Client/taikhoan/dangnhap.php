<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDH Stores</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="public/img/logo.png"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form method="post">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-normal mb-0 me-3">Đăng nhập</p>
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>
          
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>
          
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-linkedin-in"></i>
                      </button>
                    </div>
          
                    <div class="divider d-flex align-items-center my-4">
                      <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                    </div>
          
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="user" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Tên tài khoản" />
                      <label class="form-label" for="form3Example3">Tên tài khoản</label>
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <input type="password" name="pass" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Nhập mật khẩu" />
                      <label class="form-label" for="form3Example4">Mật khẩu</label>
                    </div>
          
                    <div class="d-flex justify-content-between align-items-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                          Nhớ mật khẩu
                        </label>
                      </div>
                      <a href="index.php?redirect=quenmk" class="text-body">Quên mật khẩu?</a>
                    </div>
          
                    <div class="text-center text-lg-start mt-4 pt-2">
                      <button type="submit" name="dangnhap" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                      <p class="small fw-bold mt-2 pt-1 mb-0">Bạn không có tài khoản? <a href="index.php?redirect=dangky"
                          class="link-danger">Đăng ký</a></p>
                    </div>
          
                  </form>
                </div>
              </div>
            </div>
          </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
        
</body>

</html>