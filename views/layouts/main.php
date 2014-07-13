<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>iOS Theme-jQuery Mobile Theme</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> 	 
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/ios_inspired/styles.css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script>
            // all dialog buttons should close their parent dialog
            $(".ui-dialog button").live("click", function() {
                $("[data-role='dialog']").dialog("close");
            });
            $(document).on("mobileinit", function() {
                $.mobile.defaultPageTransition = "slide";
            });
        </script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <style>
            #footerTabs {
                background: #FFF -webkit-radial-gradient(circle, #FFF, #dee2e4);
            }
            .ui-listview sup {
                font-size: 0.6em;
                color: #cc0000;
            }
        </style>

    </head> 
    <body> 

        <div data-role="page"> 
            <?php echo $content; ?>            
        </div><!-- /page --> 

        <!--ใช้สำหรับ page7-->
        <div data-role="page" id="allDialogExample">

            <div data-role="content"> 
                <button data-theme="e">Button Style E</button>
                <button data-theme="d">Button Style D</button>
                <button data-theme="c">Button Style C</button>
                <button data-theme="b">Button Style B</button>
                <button data-theme="a">Button Style A</button>
            </div>

        </div>

        <div data-role="page" id="deleteDialogExample"> 

            <div data-role="content"> 
                <button data-theme="e">Delete Draft</button>
                <button data-theme="a">Save Draft</button>
                <button data-theme="b">Cancel</button>
            </div>

        </div>

        <div data-role="page" id="postDialogExample"> 

            <div data-role="content"> 
                <button data-theme="a">Post to Twitter</button>
                <button data-theme="a">Post to Facebook</button>
                <button data-theme="a">Post to YouTube</button>
                <button data-theme="b">Cancel</button>
            </div>

        </div>


        <!--../ ใช้ page7-->

    </body>
</html>
