<?php
    include("class/function.php");
    // session_start();
    // $id = $_SESSION['adminID'];
    // if($id==null){
    //     header("location:index.php");
    // }
?>




<?php include_once("include/head.php") ?>
    <body class="sb-nav-fixed">

        <?php include_once("include/topnav.php"); ?>
        <div class="container-fluid">
            <main>
                <div class="container-fluid">
                    <?php 
                        if(isset($view)){
                            if($view=="dashboard"){
                                include("view/dash_view.php");
                            }
                            elseif($view=="shop"){
                                include("view/shop_view.php");
                            }
                            elseif($view=="add-post"){
                                include("view/add_post_view.php");
                            }
                            elseif($view=="manage-cat"){
                                include("view/manage_cat_view.php");
                            }
                            elseif($view=="manage-post"){
                                include("view/manage_post_view.php");
                            }
                        }
                    ?>
                </div>
            </main>
        </div>
        <?php include_once("include/script.php") ?>
    </body>
</html>
