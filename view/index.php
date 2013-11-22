<?php 
      /* We are only supporting two languages ​​(Spanish and English). 
       * The selected language is received by parameter GET using the variable 
       * lang. For example: http://localhost/cleverreach_extjs/view/index.php?lang=es  */
        $_LANG = ($_GET['lang'] == 'es') ? 'es' : 'en';
?>
<html>
<head>
    <!-- MULTILANGUAGE -->
    <script type="text/javascript" src="locale/<?php echo $_LANG; ?>.js"></script>
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="../shared/ext-4.2.1/resources/css/ext-all-gray.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/receiverlist.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/receiverdetail.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/commons.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/messageBox.css"/>
    
    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="../shared/ext-4.2.1/ext-all-debug.js"></script>
    <script type="text/javascript" src="index.js"></script>
    
     <!-- DIRECT -->
     <script type="text/javascript" src="../controller/direct/api.php"></script>
     
  </head>
    <body>   
    </body>
</html>

 
