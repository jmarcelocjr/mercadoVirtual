<?php 

class Functions {
	
	public function converterData($strData) {
	
		// Converte a data de dd/mm/aaaa para o formato: aaaa-mm-dd
		$strDataFinal = implode('-', array_reverse(explode('/',$strData)));
		return $strDataFinal;
	}
	
	public function converterDataPadrao($strData) {
	
		// Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
		$strDataFinal = implode('/', array_reverse(explode('-',$strData)));
		return $strDataFinal;
	}
}
?>