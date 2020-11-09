<?php
require 'includes/header.php';


    $userId = $_SESSION['id'];
    $requser = $conn->prepare('SELECT * from users WHERE id = ?');
    $requser->execute(array($userId));
    $userInfo = $requser->fetch();

    if (!empty($userId)) {

    
?>


<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Page de profil
      </h1>
      <h2 class="subtitle">
      Information de votre compte
      </h2>
    </div>
  </div>
</section>

<div class="content" align="center">
    <h2>Profil de <?php echo $userInfo['username']; ?></h2>
    <br>
    <h2>Pseudo = <?php echo $userInfo['username']; ?></h2>
    <br>
    <h2>Mail = <?php echo $userInfo['email']; ?></h2>
    <h4> <a href="edtionprofil.php">Editer mon profil</a> </h4>
</div>

<?php
} 

