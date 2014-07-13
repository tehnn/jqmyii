<div data-role="header" data-position="fixed" data-theme="a"> 
    <a href="#" data-rel="back">Home</a>		
    <h1><?php echo Yii::app()->name; ?></h1>
</div><!-- /header --> 

<div data-role="content"> 
    <p>ยินดีต้อนรับ <?php echo Yii::app()->name; ?> โดยใช้ iOS-Inspired jQuery Mobile Theme.</p>

    <ul data-role="listview" data-inset="true"> 

        <li><?php echo CHtml::link('Header Bars', array('Site/Page1')); ?></li>
        <li><?php echo CHtml::link('Header Buttons', array('Site/Page2')); ?></li>
        <li><?php echo CHtml::link('Footer Tabs', array('Site/Page3')); ?></li>
        <li><?php echo CHtml::link('Form Elements', array('Site/Page4')); ?></li>
        <li><?php echo CHtml::link('List Views', array('Site/Page5')); ?></li>
        <li><?php echo CHtml::link('Dialogs', array('Site/Page6')); ?></li>
        <li><?php echo CHtml::link('Popups <sup>New!</sup>', array('Site/Page7')); ?></li>

    </ul> 

    <br />

    <br />

</div><!-- /ui-body wrapper -->	
