��cT<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:605:"SELECT ID,  if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-senior-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-care-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-services-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-amenities-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-westfitness-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-senior-'),1,0)+ if(INSTR(CONCAT('-',LCASE(post_name),'-'),'-fitness-'),1,0)+0 as CNT FROM wp_posts WHERE post_status = 'publish'
		and POST_TYPE <> 'attachment' and POST_TYPE <> 'nav_menu_item' 
	ORDER BY CNT DESC, post_modified DESC LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":2:{s:2:"ID";s:3:"256";s:3:"CNT";s:1:"5";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:3:"CNT";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}