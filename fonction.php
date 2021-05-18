<?php

function deleteRuche($idR)
{
	$sql = "DELETE FROM ruche where Id = $idR";
	return executeSQL($sql);
}


?>