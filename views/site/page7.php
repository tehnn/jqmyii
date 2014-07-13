<div data-role="header" data-position="fixed">
<h1>Popups</h1>
<a href="#" data-rel="back">Back</a>
</div><!-- /header --> 

<div data-role="content"> 

    <a href="#popupBasic" data-rel="popup" data-role="button" class="ui-btn-plain">Open Popup</a>

    <a href="#popupOverlay" data-rel="popup" data-role="button" class="ui-btn-plain">Open Popup with Overlay</a>

    <a href="#popupiOS" data-rel="popup" data-role="button" class="ui-btn-plain">iOS Style Popup</a>

    <div data-role="popup" data-transition="fade" id="popupBasic">
        <p>This is a completely basic popup, no options set.<p>
    </div>

    <div data-role="popup" data-transition="fade" data-overlay-theme="a" id="popupOverlay">
        <p>This is a completely basic popup, but with an overlay<p>
    </div>

    <div data-role="popup" data-transition="fade" data-theme="a" data-position-to="window" id="popupiOS">
        <img src="<?php echo Yii::app()->theme->baseUrl;?>/ios_inspired/images/tick.png">
        <p>Saved<p>
    </div>

</div>