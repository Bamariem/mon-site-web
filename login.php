<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Animated Login form</title>
  <link rel="stylesheet" href="./style.css">

<style>



  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");
* {
  margin: 0;
  padding: 0;
  font-family: "Poppins";
  box-sizing: border-box;
}

body {
  display: flex;


  justify-content: center;
  align-items: center;
  background: #1f293a;
  min-height: 100vh;
}

.container {
  position: relative;
  width: 256px;
  height: 256px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container span {
  position: absolute;
  left: 0;
  width: 32px;
  height: 6px;
  background: #2c4766;
  border-radius: 8px;
  transform-origin: 128px;
  transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
  animation: animateBlink 3s linear infinite;
  animation-delay: calc(var(--i) * (3s / 50));
}

@keyframes animateBlink {
  0% {
    background: #0ef;
  }

  25% {
    background: #2c4766;
  }
}

.login-box {
  position: absolute;
  width: 400px;
}

.login-box form {
  width: 100%;
  padding: 0 50px;
}

  h2 {
  font-size: 2em;
  color: #0ef;
  text-align: center;
}
.input-box {
  position: relative;
  margin: 25px 0;
}

.input-box input {
  width: 100%;
  height: 50px;
  background: transparent;
  border: 2px solid #2c4766;
  outline: none;
  border-radius: 40px;
  font-size: 1em;
  color: #fff;
  padding: 0 20px;
  transition: 0.5s;
}

.input-box input:focus,
.input-box input:valid {
  border-color: #0ef;
}

.input-box label {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #fff;
  pointer-events: none;
  transition: 0.5s ease;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
  top: 1px;
  font-size: 0.8em;
  background-color: #1f293a;
  padding: 0 6px;
  color: #0ef;
}

  .forgot-password {
  margin: -15px 0 10px;
  text-align: center;
}

.forgot-password a {
  font-size: 0.85em;
  color: #fff;
  text-decoration: none;
}

.forgot-password a:hover {
  text-decoration: underline;
}

.btn {
  width: 100%;
  height: 45px;
  border-radius: 45px;
  background: #0ef;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 1em;
  color: #1f293a;
  font-weight: 600;
}

.signup-link {
  margin: 20px 0 10px;
  text-align: center;
}

.signup-link a {
  font-size: 1em;
  color: #0ef;
  text-decoration: none;
  font-weight: 600;
}

.signup-link a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="login-box">
    <h2>Login</h2>
    <form action="#">
      <div class="input-box">
        <input type="" required>
        <label>login</label>
      </div>
      <div class="input-box">
        <input type="password" required>
        <label>Password</label>
      </div>
      <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      
    </form>
    <?php
session_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inscription";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs soumises par l'utilisateur
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier les informations d'identification
    $sql = "SELECT * FROM administrateur WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Les informations d'identification sont correctes, rediriger vers la page formation.php
        $_SESSION['email'] = $email; // Stocker l'email de l'administrateur dans la session
        header("Location: formation.php");
        exit();
    } else {
        // Les informations d'identification sont incorrectes, afficher un message d'erreur
        echo "<script>alert('Email ou mot de passe incorrect');</script>";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
  </div>

  <span style="--i:0;"></span>
  <span style="--i:1;"></span>
  <span style="--i:2;"></span>
  <span style="--i:3;"></span>
  <span style="--i:4;"></span>
  <span style="--i:5;"></span>
  <span style="--i:6;"></span>
  <span style="--i:7;"></span>
  <span style="--i:8;"></span>
  <span style="--i:9;"></span>
<span style="--i:10;"></span>
  <span style="--i:11;"></span>
  <span style="--i:12;"></span>
  <span style="--i:13;"></span>
  <span style="--i:14;"></span>
  <span style="--i:15;"></span>
  <span style="--i:16;"></span>
  <span style="--i:17;"></span>
  <span style="--i:18;"></span>
  <span style="--i:19;"></span>
  <span style="--i:20;"></span>
  <span style="--i:21;"></span>
  <span style="--i:22;"></span>
  <span style="--i:23;"></span>
  <span style="--i:24;"></span>
  <span style="--i:25;"></span>
  <span style="--i:26;"></span>
  <span style="--i:27;"></span>
  <span style="--i:28;"></span>
  <span style="--i:29;"></span>
  <span style="--i:30;"></span>
  <span style="--i:31;"></span>
  <span style="--i:32;"></span>
  <span style="--i:33;"></span>
  <span style="--i:34;"></span>
  <span style="--i:35;"></span>
  <span style="--i:36;"></span>
  <span style="--i:37;"></span>
  <span style="--i:38;"></span>
  <span style="--i:39;"></span>
  <span style="--i:40;"></span>
  <span style="--i:41;"></span>
  <span style="--i:42;"></span>
  <span style="--i:43;"></span>
  <span style="--i:44;"></span>
  <span style="--i:45;"></span>
  <span style="--i:46;"></span>
  <span style="--i:47;"></span>
  <span style="--i:48;"></span>
  <span style="--i:49;"></span>
</div>
<!-- partial -->


</body>
</html>