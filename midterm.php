

<?php
	$divContent = "<div class='content'>";
	
	
	$divEnd = '</div>';
	$h1 = '<h1>';
	$h1End = '</h1>';
	
	$p = '<p>';
	$pEnd = '</p>';
	
	$b = '<b>';
	$bEnd = '</b>';
	
	$ol = '<ol>';
	$olEnd = '</ol>';
	
	$ul = '<ul>';
	$ulEnd = '</ul>';
	
	$li = '<li>';
	$liEnd = '</li>';
	
	$lineBreak = '<br>';
	$tab = '&emsp;';function displayMidtermProgress(){
		global $divContent, $divEnd, $p, $pEnd, $ol, $olEnd, $li, $liEnd, $lineBreak;
		print $divContent;
			print "$p So far for our Project: $pEnd";
			print $ol;
				print "$li Create about 70% of the Front end design - Jackson / Sarah $liEnd";
				print "$li Implement Caldendy api into the website - Jared $liEnd";
				print "$li Begin to work with form submission - Jared / Khon $liEnd";
			
			print $olEnd;
		print $divEnd;
        print $lineBreak;
		print $divContent;
			print "$p Next steps: $pEnd";
			print $ol;
				print "$li Finish the rest of the Front end ~ 30%  $liEnd";
				print "$li Create the Database for the Fitness instructors $liEnd";
				print "$li Connect the Forms to the database $liEnd";
				print "$li Get the nessacery Videos and Pictures needed for the site $liEnd";
				print "$li Keep testing $liEnd";
			
			print $olEnd;
		print $divEnd;
        
	}

?>