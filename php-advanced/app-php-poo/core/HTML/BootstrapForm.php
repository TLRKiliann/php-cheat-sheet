<?php

namespace Core\HTML;

class BootstrapForm extends Form
{

	protected function surround($html)
	{
		return "<div class=\"form-group\">{$html}</div>";
	}

	public function label($desc)
	{
		return $this->surround("<label>{$desc}</label>");
	}

	public function input($typetext)
	{
		return $this->surround('<input type="' . $typetext . '" 
			name="'. $typetext .'" class="form-control">');
	}

	public function submit()
	{
		return $this->surround('<button type="submit" class="btn btn-primary">
			Submit</button>');
	}
}

/*
	public function input($typetext)
	{
		return $this->surround('<input type="' . $typetext . '" 
			name="'. $typetext .'" class="form-control">');
			//value="' . $this->getValue($typetext) . '" >');
	}
*/

?>
