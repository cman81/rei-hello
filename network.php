<?php
/**
 * Created by JetBrains PhpStorm.
 * User: christian.manalansan
 * Date: 9/16/12
 * Time: 5:52 PM
 * To change this template use File | Settings | File Templates.
 */
	include_once('include.php');

	$position_map = array(
		'prog_mgr_id' => 'Program Manager',
		'resource_mgr_id' => 'Resource Manager',
		'mentor_id' => 'Mentor',
		'prog_coord_id' => 'Program Coordinator',
	);

	$link = mysql_connect('localhost','hello','Hello_Team') or die('Could not connect to db');
	mysql_select_db("hellodb", $link) or die('Could not select db');

	// get the uids of the logged-in
		$query = "
			SELECT prog_mgr_id, resource_mgr_id, mentor_id, prog_coord_id
			FROM employees e
			WHERE e.user_id = " . $_POST['uid'] . "
			LIMIT 1;
		";
		$result=mysql_query($query, $link) or die('Could not execute query');
		if(mysql_num_rows($result) == 1){
			$row = mysql_fetch_assoc($result);

			$network = array();
			$network_ids = array();
			foreach ($row as $key => $value) {
				$network_ids[] = $value;
				$network[(int) $value] = array('position' => $position_map[$key]); // array data to be populated on subsequent db calls
			}
		}

	// get the information for each user in the network
		$query = "
			SELECT user_id, first_name, last_name, title, avatar_path
			FROM employees e
			WHERE user_id IN (" . joinQuoted(', ', $network_ids) . ")
		";
		$result=mysql_query($query, $link) or die('Could not execute query');

		while ($row = mysql_fetch_assoc($result)) {
			$idx = (int) $row['user_id'];
			$network[$idx]['first_name'] = $row['first_name'];
			$network[$idx]['last_name'] = $row['last_name'];
			$network[$idx]['title'] = $row['title'];
			$network[$idx]['avatar_path'] = $row['avatar_path'];
		}

	echo json_encode($network);