<?php
header('Content-Type: text/javascript');
//This is required to get the international text strings dictionary
require_once ('internationalize.php');
//include '_text.php';

?>

document.write("<div class='nav'><br /><div class='menuhead2'><?php echo $StudentNavigation; ?></div><br /><a href=home.php class='button'><img src='images/icons/Home.png'>&nbsp;&nbsp;<?php echo $Home; ?></a><br /><a href=help.php class='button'><img src='images/icons/Help.png'>&nbsp;&nbsp;<?php echo $Help; ?></a><br /><a href=index.php class='button'><img src='images/icons/Logout.png'>&nbsp;&nbsp;<?php echo $Logout; ?></a><div id='d_heading'><a href=# class='menuhead'><?php echo $AddData; ?></a></div><div id='d_links'><a href=add_data_value.php class='button'><img src='images/icons/Add_Data_Value.png'>&nbsp;&nbsp;<?php echo $AddSingleValue; ?></a><br /><a href=add_multiple_values.php class='button'><img src='images/icons/Add_Multiple_Values.png'>&nbsp;&nbsp;<?php echo $AddMultipleValues; ?></a><br /><a href=import_data_file.php class='button'><img src='images/icons/Import_Data_File.png'>&nbsp;&nbsp;<?php echo $Import; ?></a></div><div id='vm_heading'><a href=# class='menuhead'><?php echo $ViewModifyData; ?></a></div><div id='vm_links'><a href=view_main.php class='button'><img src='images/icons/SearchData.png'>&nbsp;&nbsp;<?php echo $SearchData; ?></a></div><p>&nbsp;</p></div><script>$('#dbm_links').css('display','none');$('#u_links').css('display','none');$('#d_links').css('display','none');$('#vm_links').css('display','none');$('#dbm_heading').click(function(){$('#dbm_links').slideToggle('slow');});$('#u_heading').click(function(){$('#u_links').slideToggle('slow');});$('#d_heading').click(function(){$('#d_links').slideToggle('slow');});$('#vm_heading').click(function(){$('#vm_links').slideToggle('slow');});</script>");