<?php
?>
<html>
<head>
<title>name</title>
<style>
                .bla{width:100% ; 
                      height:400px;
                     }
                #row{
                display:flex;
                gap:300px;
                }
                .empty{
                    width:100%;
                    height:2px;
                }
</style>
</head>
<body>
     <?php include 'header.php';
     ?>
    <div class="empty"></div>
   <?php include'slidertrans.php';?>
     <div id="row">
        <div width="30%">
            <a><img src="news.png"/></a>
            <h2> Latest News </h2> 
        </div>
        <div width="30%">
            <a><img src="admin.jpg"/></a>
            <h2> Administration </h2> 
        </div>
         <div width="30%">
            <a><img src="admin.jpg"/></a>
            <h2> Contact Us </h2> 
        </div>
    
    </div>
    <div id="row">
        <div width="30%">
            <a href=""><img src="news.png"/></a> 
            <h2> Partners</h2> 
        </div>
        <div width="30%">
            <a href=""><img src="admin.jpg"/></a>
            <h2> Languages</h2> 
        </div>
         <div width="30%">
            <a><img src="admin.jpg"/></a>
            <h2> Magazine </h2> 
        </div>
    
    </div>
</body>
<?php include 'footertrns.php';
?>
</html>


