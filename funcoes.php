<?php 
	class Functions {

		function AlertAndRedirect($text, $locale){
			echo ("<SCRIPT>
    				window.alert('$text')
    				window.location.href='$locale';
    			  </SCRIPT>"
    		);
		}

		

	}


?>