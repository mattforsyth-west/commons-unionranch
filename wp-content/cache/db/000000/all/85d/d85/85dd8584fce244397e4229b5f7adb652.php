=�cT<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:429:"SELECT p.ID FROM wp_posts AS p  INNER JOIN wp_term_relationships AS tr ON p.ID = tr.object_id INNER JOIN wp_term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id WHERE p.post_date < '2014-09-10 19:48:23' AND p.post_type = 'post' AND p.post_status = 'publish' AND tt.taxonomy = 'category' AND p.ID NOT IN ( SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id IN (2,16,15) ) ORDER BY p.post_date DESC LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":1:{s:2:"ID";s:3:"208";}}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}