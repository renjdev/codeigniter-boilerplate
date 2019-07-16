<?php
    if (isset($_SESSION['system_message'])) {
        foreach($_SESSION['system_message'] as $message) {
?>
            <div class="alert alert-<?=$message['type']?>" role="alert">
              <strong><?=$message['title']?></strong> <?=$message['content']?>
            </div>
<?php     
        }
        unset($_SESSION['system_message']);
    }
?>

