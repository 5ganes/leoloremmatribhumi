<!-- ******HEADER****** --> 
  <header class="header container">  
      
      <!--//to-bar-->
      <div class="header-main">
          <h1 class="logo">
              <div class="col-md-2 "><a href="<?php echo SITE_URL;?>"><img src="images/lions_logo.png" width=""></a></div>
              <div class="col-md-8 center-text" style="line-height: 20px;">
                  <?php if($lan=='en'){?>
                      <p style="font-size: 20px;">The International Association of Lions Club</p>
                      <h3>LEO Club of Kathmandu Matribhumi</h3>
                      <p>LEO District Council 325 B2 Nepal / MD325</p>
                  <?php }
                  else{?>
                      <p style="font-size: 20px;">The International Association of Lions Club</p>
                      <h3>LEO Club of Kathmandu Matribhumi</h3>
                      <p>LEO District Council 325 B2 Nepal / MD325</p>
                  <?php }?>
                  <!--<p>सिंहदरबार, काठमाडौँ, नेपाल</p>-->
              </div>
              <div class="col-md-2 flag" align="right">
                <div class="nepal-flag"><img src="images/leo_logo.png" width="90"></div>
              </div>
          </h1>           
      </div>
  </header><!--//header-->

  <!-- ******NAV****** -->
  <nav class="main-nav container" role="navigation">
      <div class="">
          <div class="navbar-header">
              <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button><!--//nav-toggle-->
          </div>         
          <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <?php createMenu(0, 'Header', $lan); ?>
            </ul>
            <!--//nav-->
          </div><!--//navabr-collapse-->
      </div><!--//container-->
  </nav><!--//main-nav-->
  
  <!-- ******CONTENT****** -->
  <div class="content container">
      
      <section>

          <!-- scroll menu -->
          <section class="news panel  marquee-body">
              <div class="" style="background-color:#c76353;"> 
                  <div class="marquee_div">
                      <div class="marquee-title"><?php if($lan=='en') echo 'ताजा समाचार'; else echo 'Hot News'; echo ' : ';?></div>
                      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" truespeed="">
                          <?php $hot=$groups->getById(HOT_NEWS); $hot=$conn->fetchArray($hot);?>
                          <a href="<?php if($lan=='en') echo 'en/'; echo $hot['urlname'];?>"><?php if($lan=='en') echo $hot['shortcontentsen']; else echo $hot['shortcontents'];?></a>
                      </marquee>
                      
                      <!-- <div class="marquee-title login" style="width: 22%">
                        <?php global $userLoggedIn; 
                        if(!$userLoggedIn){?>
                          <a href="<?php if($lan=='en') echo 'en/';?>userlogin"><?php if($lan=='en') echo 'Login'; else echo 'लगइन गर्नुहोस';?></a>
                        <?php }
                        else{ 
                          echo 'Hello '.$_SESSION['userName'].' | '; 
                          if($lan=='en') echo '<a style="width:40%" href="userlogout.php?lan=en">Logout</a>'; else echo '<a href="userlogout.php" style="width:40%">Logout</a>';
                        }?>
                      </div> -->

                      <div class="marquee-title login" style="width: 15%;background: none;">
                          <?php if($lan=='en'){?>
                            <a href="<?php echo SITE_URL;?>" class="btn btn-sm btn-primary pull-right"><span style="font-size:12px;"><b>नेपाली</b></span></a>
                          <?php }
                          else{?>
                            <a href="<?php echo SITE_URL;?>en" class="btn btn-sm btn-primary pull-right"><span style="font-size:12px;"><b>English</b></span></a>
                          <?php }?>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </div>    
          </section>
          <!-- scroll menu end -->