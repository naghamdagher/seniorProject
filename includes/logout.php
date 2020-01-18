<?php
 session_unset();
 session_destroy();
 session_commit();
 header("Location: --/Ulight.php?Logout=success");
 ?>