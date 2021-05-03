<?php
require 'bootstrap.php';
?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <form id="registration">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите email">
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Введите имя">
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="repeat-password">Повторение пароля</label>
                            <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Повторите пароль">
                            <div class="form-control-feedback"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Зарегистрирован</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $users = getUsersList();
                            ?>
                            <?php if(!empty($users)): ?>
                                <?php foreach($users as $user): ?>
                                    <tr>
                                        <th scope="row"><?= $user['id'] ?></th>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['created_at'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/form.js"></script>
    </body>
</html>