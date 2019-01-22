<?php
class selectbox_validator{
      public function checkinput($selecboxhtml,$input){
        if(preg_match_all('/<option\s*value="?([^">]*)"?[^>]*>/', $selecboxhtml, $output_array)){
            if(in_array($input,$output_array[1]))
              return true;
            return false;
        }else{
          return false;
        }
      }
	  public function toarray($selecboxhtml){
        if(preg_match_all('/<option\s*value="?([^">]*)"?[^>]*>/', $selecboxhtml, $output_array)){
            echo "<pre>";
				var_export($output_array[1]);
			echo "</pre>";
        }
      }
}

?>