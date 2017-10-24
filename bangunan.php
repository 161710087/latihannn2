<?php
class Bangunan
{
	public $besi;
	public $semen;
	public $pasir;
	public $uang;
	function __construct ($besi, $semen, $pasir, $uang)
	{
		$this->besi = $besi;
		$this->semen = $semen;
		$this->pasir = $pasir;
		$this->uang = $uang;
		
	}
	public function get_besi()
	{
	return $this->besi;
	}
	public function get_semen()
	{
	return $this->semen;
	}
	public function get_pasir()
	{
	return $this->pasir;
	}
	public function get_uang()
	{
	return $this->uang;
	}

}
?>
