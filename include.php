<?php
/**
 * Created by JetBrains PhpStorm.
 * User: christian.manalansan
 * Date: 9/16/12
 * Time: 6:24 PM
 * To change this template use File | Settings | File Templates.
 */

	function joinQuoted($glue, $arr) {
		if (!is_array($arr) || !count($arr)) {
			return '';
		}
		foreach ($arr as $key => $value) {
			$arr[$key] = "'" . str_replace("'", "\'", $value) . "'";
		}

		return implode($glue, $arr);
	}
