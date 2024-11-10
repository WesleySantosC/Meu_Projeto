<<<<<<< HEAD
<body>
<link rel="stylesheet" href="/projetos/view/style/style.css">
<script src="https://kit.fontawesome.com/b46ba83dad.js" crossorigin="anonymous"></script>

<div class="container">

    <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignin">Sign In</button>
        <button id="btnSignup">Sign Up</button>
    </div>

    <!-- Formulário de Sign In -->
    <form id="signin">
        <input type="hidden" name="action" value="signin">
        <input type="text" name="nome" placeholder="Email: exemplo@gmail.com" required>
        <i class="fa-solid fa-envelope iEmail"></i>
        <input type="password" name="pass" placeholder="Password: 1234567" required>
        <i class="fa-solid fa-lock iPassword"></i>
        <div class="divCheck">
            <input type="checkbox">
            <span>Remember Password</span>
        </div>
        <button type="submit">Sign Iin</button>
    </form>

    <!-- Formulário de Sign Up -->
    <form id="signup" method="POST">
        <input type="hidden" name="action" value="signup">
        <input type="text" name="nome" placeholder="Email: exemplo@gmail.com" required>
        <i class="fa-solid fa-envelope iEmail"></i>
        <input type="password" name="pass" placeholder="Password: 123456" required>
        <i class="fa-solid fa-lock iPassword"></i>
        <input type="password" name="confirm_pass" placeholder="Confirm Password: 123456" required>
        <i class="fa-solid fa-lock iPassword2"></i>
        <div class="divCheck">
            <input type="checkbox">
            <span>Remember Password</span>
        </div>
        <button type="submit">Sign Up</button>
    </form>

    <script src="/projetos/view/service/service.js"></script>
</div>
</body>



<?php 
include("/xampp/htdocs/projetos/controller/conn.php");
include("/xampp/htdocs/projetos/modal/login_model.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'];
    $user = new SignUp();

    if ($action === 'signin') {
        // Realizar login
        $user->login($_POST["nome"], $_POST["pass"]);
    } elseif ($action === 'signup') {
        // Realizar cadastro
        $user->data();
    }
}
?>
=======
<body>
<link rel="stylesheet" href="/projetos/view/style/style.css">
<script src="https://kit.fontawesome.com/b46ba83dad.js" crossorigin="anonymous"></script>

<div class="container">

    <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignin">Sign In</button>
        <button id="btnSignup">Sign Up</button>
    </div>

    <!-- Formulário de Sign In -->
    <form id="signin">
        <input type="hidden" name="action" value="signin">
        <input type="text" name="nome" placeholder="Email: exemplo@gmail.com" required>
        <i class="fa-solid fa-envelope iEmail"></i>
        <input type="password" name="pass" placeholder="Password: 123456" required>
        <i class="fa-solid fa-lock iPassword"></i>
        <div class="divCheck">
            <input type="checkbox">
            <span>Remember Password</span>
        </div>
        <button type="submit">Sign In</button>
    </form>

    <!-- Formulário de Sign Up -->
    <form id="signup" method="POST">
        <input type="hidden" name="action" value="signup">
        <input type="text" name="nome" placeholder="Email: exemplo@gmail.com" required>
        <i class="fa-solid fa-envelope iEmail"></i>
        <input type="password" name="pass" placeholder="Password: 123456" required>
        <i class="fa-solid fa-lock iPassword"></i>
        <input type="password" name="confirm_pass" placeholder="Confirm Password: 123456" required>
        <i class="fa-solid fa-lock iPassword2"></i>
        <div class="divCheck">
            <input type="checkbox">
            <span>Remember Password</span>
        </div>
        <button type="submit">Sign Up</button>
    </form>

    <script src="/projetos/view/service/service.js"></script>
</div>
</body>



<?php 
include("/xampp/htdocs/projetos/controller/conn.php");
include("/xampp/htdocs/projetos/modal/login_model.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'];
    $user = new SignUp();

    if ($action === 'signin') {
        // Realizar login
        $user->login($_POST["nome"], $_POST["pass"]);
    } elseif ($action === 'signup') {
        // Realizar cadastro
        $user->data();
    }
}
?>
>>>>>>> 4c6541f (testando git)
