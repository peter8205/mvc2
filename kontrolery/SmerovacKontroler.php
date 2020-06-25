<?php

class SmerovacKontroler extends Kontroler
{

    protected $kontroler;

    public function zpracuj($parametry)
    {									//cela adresa na indexu 0
    	$naparsovanaURL = $this->parsujURL($parametry[0]);
    	//sem sa vrati pole 
    	$tridaKontroleru = $this->pomlckyDoVelbloudiNotace(array_shift($naparsovanaURL)) . 'Kontroler';
    	echo($tridaKontroleru);


    	echo('<br />');
		print_r($naparsovanaURL);
    }

    private function parsujURL($url)
	{

		$naparsovanaURL = parse_url($url);
		$naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], "/");
		$naparsovanaURL["path"] = trim($naparsovanaURL["path"]);
		$rozdelenaCesta = explode("/", $naparsovanaURL["path"]);
		return $rozdelenaCesta;
	}

	private function pomlckyDoVelbloudiNotace($text)
	{
		$veta = str_replace('-', ' ', $text);
		$veta = ucwords($veta);
		$veta = str_replace(' ', '', $veta);
		return $veta;
	}




}