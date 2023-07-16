<?php
//Error manager

function checkMessageSent( $action )
{
	$datas = array();

	if( $action === 'send' )
	{
		if( empty( $_POST[ 'email' ] ) )
		{
			$datas[ 'error' ][ 'emailempty' ] = true;
		}
		else if( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) )
		{
			$datas[ 'error' ][ 'emailformat' ] = true;
		}

		if ( empty( $_POST[ 'message' ] ) )
		{
			$datas[ 'error' ][ 'messageempty' ] = true;
		}
		$datas = $_POST;
	}
}