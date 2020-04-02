<?php
/**
 * 
 */
class vigenere{
	public $data;
	function __construct($data)
	{
		$this->data = $data;
	}

	public function encrypt($key)
	{
		$data = $this->data;
		$keylen = strlen($key);
		$stringlen = strlen($data);

		$newkey = $this->generate_newkey($keylen, $stringlen, $key);
		$uppercase = get_table_array('A');
		$lowercase = get_table_array('a');
        
        $encrypted_message = '';
		for ($i=0; $i < $stringlen; $i++) { 
			$l = $data[$i];
			$k = $newkey[$i];

			if (in_array($l, $lowercase['letter']) == true){
				
               $k = strtolower($k);
               $lindex = $this->get_letter_index($l,$lowercase['letter']);
               $encrypted_message .= $lowercase[$k][$lindex];
			}else if (in_array($l, $uppercase['letter']) == true){
               $k = strtoupper($k); 
               $lindex = $this->get_letter_index($l,$uppercase['letter']);
               $encrypted_message .= $uppercase[$k][$lindex];
			}else{
				$encrypted_message .= $l;
			}
		}

		return $encrypted_message;
	}

	public function decrypt($key)
	{
		$data = $this->data;
		$keylen = strlen($key);
		$stringlen = strlen($data);

		$newkey = $this->generate_newkey($keylen, $stringlen, $key);
		$uppercase = get_table_array('A');
		$lowercase = get_table_array('a');
        
        $encrypted_message = '';
		for ($i=0; $i < $stringlen; $i++) { 
			$l = $data[$i];
			$k = $newkey[$i];

			if (in_array($l, $lowercase['letter']) == true){
               $k = strtolower($k);
               $lindex = $this->get_letter_index($l,$lowercase[$k]);
               $encrypted_message .= $lowercase['letter'][$lindex];
			}else if (in_array($l, $uppercase['letter']) == true){
               $k = strtoupper($k);
               $lindex = $this->get_letter_index($l,$uppercase[$k]);
               $encrypted_message .= $uppercase['letter'][$lindex];
			}else{
				$encrypted_message .= $l;
			}
		}

		return $encrypted_message;
	}

	public function generate_newkey($keylen, $stringlen, $key)
	{
		if ($keylen == $stringlen) {
			$newkey = $key;
		} else {
			if ($keylen > $stringlen) {
				$newkey = substr($key,0,$stringlen);
			} else {
				$pendkey = $key;
				do {
					$pendkey .= $key;
					if ($stringlen <= strlen($pendkey)) {
						$newkey = substr($pendkey,0,$stringlen);
						break;
					}
				} while ($stringlen > strlen($pendkey));
			}
			
		}
		
		return $newkey;
	}

	public function get_letter_index($letter, $set)
	{
		$index = 0;
		for ($i=0; $i < count($set); $i++) { 
			if ($letter == $set[$i]) {
				$index = $i;
				break;
			}
		}

		return $index;
	}

}