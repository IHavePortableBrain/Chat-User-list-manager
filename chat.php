<?php
require_once 'include/header.php';
require_once 'include/constants.php';
require_once 'include/connection.php';
require_once 'include/getPrivilegeLvl.php';

session_start();
if(!isset($_SESSION["session_username"]) || GetPrivilegeLvl($link) < DB_USER_PRIVILEGE_LVL):
    //var_dump($_SESSION); 
    header("location:login.php");
endif;
?>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<link rel="stylesheet" href="style/chat2.css">

<div class="col-sm-4 col-sm-offset-4 frame" id="chat">
    <ul id="messages" class="overflow-auto"></ul>
    <div>
        <div class="msj macro" id="msg-container">                        
            <div class="text text-r">
                <input class="mytext" id="msg_to_send" placeholder="Type a message" />
            </div> 
            <i class="fas fa-paper-plane fa-2x" id="send_msg"></i>
        </div>
        
    </div>
</div> 
<div id="debug"></div>

<?php
include("include/footer.php");
?>
<script src="js/chat2.js"></script>

