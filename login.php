<!DOCTYPE html>
<html>
<head >
    <title >Личный кабинет студента</title>
    <style>
        <?php echo file_get_contents("login.css"); ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="photki\logo1.jpg" alt="Логотип">
        </div>
        <form action="login.php" method="post">
        <div class="form-group">
                
                <form method="post" action="process.php">
  `                 <label for="role">Выберите роль:</label>
                    <select name="role" id="role">
                    <option value="admin">Администратор</option>
                    <option value="user">Студент</option>
                        </select>
                </form>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Имя пользователя">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Пароль">
                
                
            </div>
            <div class="exit">
                <input class="button"  type="button" onclick="location='header.php'" value="Войти" >
                
            </div>
            <div class="none">
                <!-- другие элементы контейнера -->
                <p class="text"  >Нажимая "Войти" или "Продолжить"  вы даёте согласие на обработку ваших персональных данных и принимаете 
                    пользовательское соглашение. </p>
            </div>
        </form>
    </div>
</body>

<style>
echo 'Password: ';
$oldStyle = shell_exec('stty -g');
shell_exec('stty -echo');
$password = rtrim(fgets(STDIN), "\n");
shell_exec('stty ' . $oldStyle);
echo "\r\n";
echo $password;
echo "\r\n";
</style>