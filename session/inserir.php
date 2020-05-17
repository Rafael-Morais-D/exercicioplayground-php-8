<?php

    session_start();

    $_SESSION['pessoa'] = ['nome'=>'Rafael', 'altura'=>'1,73'];

    echo 'Session incluída com sucesso!';

?>