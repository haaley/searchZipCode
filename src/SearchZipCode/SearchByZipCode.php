<?php
namespace Jsantos\SearchByZipCode;
/***
*	Author: Jacson Santos
*/
class SearchByZipCode
{
	private $zipcode;
	private $data = [];
	public function setZipCode(string $zipcode)
	{
		$char = array(".", "-");
		$zipcode = str_replace($char,"", $zipcode);
		$this->zipcode = (string) $zipcode;
		return $this;
	}
	public function runZipCode()
	{
		$data = file_get_contents("http://viacep.com.br/ws/".$this->zipcode."/json/");
		$this->data = json_decode($data);
		return $this;
	}
	public function getAll()
	{
		return $this->data;
	}
	public function getZipCode()
	{
		return $this->data->cep;
	}
	public function getStreet()
	{
		return $this->data->logradouro;
	}
	public function getComplement()
	{
		return $this->data->complemento;
	}
	public function getNeighborhood()
	{
		return $this->data->bairro;
	}
	public function getCity()
	{
		return $this->data->localidade;
	}
	public function getUf()
	{
		return $this->data->uf;
	}
	public function getUnit()
	{
		return $this->data->unidade;
	}
	public function getIbge()
	{
		return $this->data->ibge;
	}
	public function getGia()
	{
		return $this->data->gia;
	}
}