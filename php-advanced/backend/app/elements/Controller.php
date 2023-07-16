<?php

class Controller
{
	private $_action;
	private $_page;
	private $_datas;
	private $_view;

	public function __construc($page, $action)
	{
		$this->_action = $action;
		$this->_page = $page;
		$this->_datas = [];
		$this->_view = 'contact';

		if ($this->action === 'send')
		{
			$this->_checkMessageSent();
		}
	}

	private function _checkMessageSent()
	{
		if (isset($_POST['email']))
		{
			$datas = $_POST;

			if (empty($_POST['email']))
			{
				$datas['error']['emailempty'] = true;
			}

			else if( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) )
			{
				$datas[ 'error' ][ 'emailformat' ] = true;
			}

			if( empty( $_POST[ 'message' ] ) )
			{
				$datas[ 'error' ][ 'messageempty' ] = true;
			}

			$this->_datas = $datas;

			if( !isset( $datas[ 'error' ] ) )
			{
				mail('mail@dom.net', 'Subject', $datas['message'], 'From:'.
					$datas['email']);
				
				$this->_view = 'contact_sent';
			}
		}
		$this->_view = 'contact';
	}

	public function datas()
	{
		return $this->datas;
	}

	public function view()
	{
		return 'moduleName/'.$this->_view;
	}
}

?>