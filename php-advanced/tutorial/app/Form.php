<?php

namespace Tutoriel;

class Form
{
	private $_data;
	private $_surrenderTag = 'p';

	public function __construct($_data = array())
	{
		$this->_data = $_data;
	}

	protected function surround($html)
	{
		return "<{$this->_surrenderTag}>{$html}</{$this->_surrenderTag}>";
	}

	/*
	// garde les values à l'affichage
	protected function getValue($index)
	{
		return isset( $this->_data[$index] ) ? $this->_data[$index] : null;
	}
	*/

	protected function label($desc)
	{
		return $this->surround("<label>{$desc}</label>");
	}

	protected function input($typetext)
	{
		return $this->surround('<input type="' . $typetext . '" name="'. $typetext .'" >');
			//value="' . $this->getValue($typetext) . '" >');
	}

	protected function submit()
	{
		return $this->surround('<button type="submit">Submit</button>');
	}
}

?>