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

	// get the information for each user in the network
		$query = "
			SELECT e1.user_id, e1.first_name, e1.last_name, e1.title, e1.avatar_path
			FROM employees e1
			INNER JOIN employees e2 ON e2.proj_id = e1.proj_id
			WHERE e2.user_id = " . $_POST['uid'] . "
			ORDER BY e1.last_name, e1.first_name
		";
		$result=mysql_query($query, $link) or die('Could not execute query');

		$network = array();
		while ($row = mysql_fetch_assoc($result)) {
			if ($row['user_id'] == $_POST['uid']) {
				$row['title'] = "That's <span class=\"blue-text\">you!</span>";
			}
			$network[] = $row;

		}

	echo json_encode($network);
