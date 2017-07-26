<!-- sidebar left -->
<div class="col-md-3">
	<div class="panel-heading"></div>                          
    <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
        <?php $msg_from_dg = $groups->getById(MSG_FROM_DG); $msg_from_dg = $conn->fetchArray($msg_from_dg);?>
        <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_dg['nameen']; else echo $msg_from_dg['name'];?></h4>      
        <p style="text-align: center;">
            <span style="font-size:16px;">
                <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_dg['image'] ?>" style="width: 140px;height:150px;border-width: 1px; border-style: solid;">
            </span>
        </p>
        <p style="text-align: center;">
            <?php if($lan=='en') echo $msg_from_dg['shortcontentsen']; else echo $msg_from_dg['shortcontents'];?>...
        </p>                                                
        <div class="panel-footer">
            <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_dg['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="">
        <link href="styles/superfish.css" rel="stylesheet">
        <link href="styles/superfish-vertical.css" rel="stylesheet">
        <script src="scripts/superfish.js"></script>
        <script src="scripts/hoverIntent.js"></script>
        <script type="text/javascript">
    		// initialise plugins
    		$(document).ready(function(){ 
                $("ul.sf-menu").superfish({ 
                    animation: {height:'show'},   // slide-down effect without fade-in 
                    delay:     1200               // 1.2 second delay on mouseout 
                }); 
            }); 
        </script>
        <ul class="sf-menu sf-vertical sf-js-enabled sf-shadow">
            <?php createNavigation(0, 'Navigation', $lan);?>
        </ul>
    </div>
    <div class="clearfix"></div>
    
    <div class="panel panel-primary">                             
        <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
            <?php $msg_from_io = $groups->getById(INFO_OFFICER); $msg_from_io = $conn->fetchArray($msg_from_io);?>
            <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_io['nameen']; else echo $msg_from_io['name'];?></h4>      
            <p style="text-align: center;">
                <span style="font-size:16px;">
                    <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_io['image'] ?>" style="width: 140px;height:150px;border-width: 1px; border-style: solid;">
                </span>
            </p>
            <p style="text-align: center;">
                <?php if($lan=='en') echo $msg_from_io['shortcontentsen']; else echo $msg_from_io['shortcontents'];?>...
            </p>                                                
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_io['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
            <?php $msg_from_sp = $groups->getById(MSG_FROM_SPOKEPERSON); $msg_from_sp = $conn->fetchArray($msg_from_sp);?>
            <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_sp['nameen']; else echo $msg_from_sp['name'];?></h4>      
            <p style="text-align: center;">
                <span style="font-size:16px;">
                    <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_sp['image'] ?>" style="width: 140px;height:150px;border-width: 1px; border-style: solid;">
                </span>
            </p>
            <p style="text-align: center;">
                <?php if($lan=='en') echo $msg_from_sp['shortcontentsen']; else echo $msg_from_sp['shortcontents'];?>...
            </p>                                                
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_sp['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--facebook block starts here-->
    <div>
      <!-- <a class="twitter-timeline" data-width="520" data-height="350" data-theme="light" data-link-color="#981CEB" href="https://twitter.com/DoEnv_Nepal">Tweets by DoEnv_Nepal</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FkathmanduMatribhumi&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br><br>

    </div>
    <!--facebook block ends here-->

    <div class="panel panel-primary">
      <?php $contact = $groups->getByURLName(CONTACT); ?>
      <div class="panel-heading"><h3 align="center"><?php if($lan=='en') echo $contact['nameen']; else echo $contact['name'];?></h3></div>
      <div class="panel-body">   
          <?php if($lan=='en') echo $contact['shortcontentsen']; else echo $contact['shortcontents'];?>
      </div>
      <div class="panel-footer">
          <a href="<?php if($lan=='en') echo 'en/'; echo $contact['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
          <div class="clearfix"></div>
      </div>
    </div>
         
</div>
<!-- sidebar left end -->