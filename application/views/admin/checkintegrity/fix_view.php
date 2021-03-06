<div class="pagetitle h3"><?php eT("Check data integrity");?></div>
        
<div class="row" style="margin-bottom: 100px">
    <div class="col-lg-12">
        <div class="jumbotron message-box">
                <h2><?php eT("Data consistency check"); ?></h2>
                <p class="lead"><?php eT("If errors are showing up you might have to execute this script repeatedly."); ?></p>
                <?php if(!empty($messages)) { ?>
                    <ul>
                    <?php foreach ($messages as $sMessage) {?>
                        <li><?php echo $sMessage;?></li>
                    <?php } ?>
                    </ul>
                <?php } ?>
                <p>
                    <a class="btn btn-lg btn-success" href='<?php echo $this->createUrl('admin/checkintegrity');?>'><?php eT("Check again"); ?></a>
                </p>
        </div>        
        
    </div>
</div>  
  
