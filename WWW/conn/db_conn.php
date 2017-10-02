<?php
	$DB_HOST	= "localhost";	  //���ݿ�����λ��
	$DB_LOGIN	= "root";	  //���ݿ���ʹ���˺�
	$DB_PASSWORD	= "root";	  //���ݿ���ʹ������
	$DB_NAME	= "DATA";           //���ݿ�����

	$conn = mysql_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD);
	// if (!$conn) {
	// 	echo 'ERROR';
	// 	echo mysql_error();
	// 	die('Could not connect: ' . mysql_error());
	// }
	// die('Connected successfully');
	mysql_select_db($DB_NAME);
        mysql_query("SET NAMES UTF8");
?>
