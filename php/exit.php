<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 20.09.2015
 * Time: 10:58
 */
session_start();
session_destroy();
header('Location:../index.html');
exit();
