<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class windows_login_set extends base_set {
	protected $table_name = 'log_windows_login';
	protected $id_name = 'id';

}

?>
