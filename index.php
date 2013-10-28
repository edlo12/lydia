<?php
 //echo "<h1>I'm Lydia - index.php</h1>";
 //echo "<p>You are most welcome!</p>";
 //echo "<p>REQUEST_URI - " . htmlentities($_SERVER['REQUEST_URI']) . "</p>";
 //echo "<p>SCRIPT_NAME - " . htmlentities($_SERVER['SCRIPT_NAME']) . "</p>";

    //
    // PHASE: BOOTSTRAP
    //
    define('LYDIA_INSTALL_PATH', dirname(__FILE__));
    define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/aplicacion');

    require(LYDIA_INSTALL_PATH.'/src/CLydia/bootstrap.php');

    $ly = CLydia::Instance();
    
        
    //
    // PHASE: FRONTCONTROLLER ROUTE
    //
    $ly->FrontControllerRoute();
    
    //
    // PHASE: THEME ENGINE RENDER
    //
    $ly->ThemeEngineRender();