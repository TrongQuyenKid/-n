<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-6VTsNhIHFxNglfMLfhvvJFxXZbdvT1UXhm7+wVMAda9c+2NIFu4zmlKKz/bJthi/" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>

<div id="content">
    <div class="roww form-login">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-3">Đăng nhập</h5>
                    <form action="index.php?page=login" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="" required>
                            <label for="floatingInput">Tên đăng nhập</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Mật khẩu</label>
                        </div>
                 
                        
                        <p style="color: red; text-align: center; font-weight: bold;"><?php if (isset($msg)) {
                                                                                            echo $msg;
                                                                                        } ?></p>
                        <div class="d-grid">
                            <input type="submit" name="login" value="Đăng nhập " class="btn btn-primary btn-login text-uppercase fw-bold">
                        </div>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
