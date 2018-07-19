<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<link rel="stylesheet" href="css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="content">
    <div class="loader"></div>
<!-- start of stick bar-->
<div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="images/gmail1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Like Us on<br>Facebook</a></p>
        </li>
        <li>
            <img src="images/youtube1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Follow Us on<br>Twitter</a></p>
        </li>
        <li>
            <img src="images/twitter1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Follow Us on<br>Google+</a></p>
        </li>
        <li>
            <img src="images/skype1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Follow Us on<br>LinkedIn</a></p>
        </li>
        <li>
            <img src="images/google1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Subscribe on<br>YouYube</a></p>
        </li>
        <li>
            <img src="images/gmail1.jpeg" width="32" height="32">
            <p><a href="" target="_blank">Follow Us on<br>Pinterest</a></p>
        </li>
    </ul>
</div>
<!-- start of tooltip-->
<div class="tooltip top">Hover over me
    <span class="tiptext">Web development</span>
</div>
<!--end of tooltip-->
    <!-- notification bar to be added here -->
<div id="hellobar-bar" class="regular closable">
    <div class="hb-content-wrapper">
        <div class="hb-text-wrapper">
            <div class="hb-headline-text">
                <p><span>Register for Selianordev Learning Week and get FREE access to 10+ tutorials and scripts across programs</span></p>
            </div>
        </div>
        <a href="#" target="_blank" class="hb-cta hb-cta-button">
            <div class="hb-text-holder">
                <p>Register Now</p>
            </div>
        </a>
    </div>
    <div class="hb-close-wrapper">
        <a href="javascript:void(0);" class="icon-close">&#10006;</a>
        <a href="javascript:void(0);" class="icon-close" onclick="$('#hellobar-bar').fadeOut()">&#10006;</a>
    </div>
</div>
    <!-- end of nitification bar -->
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
    </div>
    <?php }else{ ?>
    <h2>Login to Your Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
    <?php } ?>
</div>
</div>