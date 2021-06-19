<?php
class View
{
	private $_file;
	private $_t;
	
	public function __construct($action)
	{
		$this->file = 'views/view'.$action.'.php';
	}
	//GENERE ET AFICHE LA VUE
	public function generate($data)
	{
		//PARTIE SPECIFIQUE DE LA VUE 
		$content = $this->generateFile($this->_file,$data);
		//TEMPLATE
		$view = $this->generateFile('views/templete.php',array('t' =>$this->_t,
		echo $view;
	}
	//GENERE UN FICHIER VUE ET RENVOIE LE RESULTA PRODUIT
	private function generateFile($file,$da-ta)
	{
		if(file_exists($file))
		{
			extract($data);
			ob_start();
			require $file;
			return ob_get_clean();
		}
	    else
		    throw new Exception('Fichier'.$file.'introuvable');
	}

}