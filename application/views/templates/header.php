<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			   <span class="visible-xs navbar-brand">Language Menu</span>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            
           
            <li>
            
            <div class="dropdown" style="margin-top:5%;">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Language: <?php echo getCurrentDisplay();?>
    <span class="caret" id="headingCaret"></span>
  </button>
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" id='langChange' name ='langChange'>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="English">English</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Spanish">Español</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Italian">Italiano</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Portuguese">Portugués</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="German">Alemán</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Dutch">Nederlands</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Bulgarian">български</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Croatian">Hrvatski</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="French">Français</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Russian">Русский</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Tagalog">Tagalog</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Czech">Český</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data="Ukranian">Українська</a></li>
  			</ul>
		</div>
            </li>
			  <li style="margin-top:2%;"><font color=#FFFFFF face=Arial, Helvetica, sans-serif size=2><a href="<?php echo $this->config->item('homelink');?>" class="button2" ><?php echo getTxt('BackTo').' '.$this->config->item('homename');?></a></font></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>




