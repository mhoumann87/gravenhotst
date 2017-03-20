<?php

//find admin
function admin_by_username($username) {
	global $forbind;
	$sikkert_navn = mysqli_real_escape_string($forbind, $username);
	
	$query  = "SELECT * ";
	$query .= "FROM admin ";
	$query .= "WHERE admin_navn='{$sikkert_navn}' ";
	$query .= "LIMIT 1";
	$admin_set = mysqli_query($forbind, $query);
	tjek_query($admin_set);
	if ($admin = mysqli_fetch_assoc($admin_set) ) {
		return $admin;
		} else {
			return null;
			}
	}

//login
function indlogning($brugernavn, $password) {
	$admin = admin_by_username($brugernavn);
	if ($admin) {
		if (check_password($password, $admin['admin_kode'])) {
			return $admin;
			} else {
				return false;
				}
		} else {
			return false;
			}
	
	}	
	
//vis alle felj ved form
function vis_fejl($fejl=array()) {
	$fejlbesked = '';
		if (!empty($fejl)) {
			$fejlbesked  = '<div class="error">';
			$fejlbesked .= 'Følgende fejl skal rettes:<br>';
			$fejlbesked .= '<ul>';
				foreach ($fejl as $key => $fejl) {
					$fejlbesked .= "<li>{$fejl}</li>";
				}
			$fejlbesked .= '<Ul>';
			$fejlbesked .= '</div>';
			} 
	return $fejlbesked;
	}
	
//check indtastninger
function er_udfyldt($feltnavn) {
	return isset($feltnavn) && $feltnavn !== '';
		}
	
//check om der er minimum antal tegn i indtastning
function minimum_tegn($felt, $min) {
	return strlen($felt) >= $min;
	}
	
//check om forespørgelse mislykkede
function tjek_query($result_set) {
	if (!$result_set) {
		die('Forespørgelsen mislykkedes');
		}
	}

//krypter password
function password_kryptering($password) {
	$hash_format = '$2y$10$';
	$salt_lenght = 22;
	
	$salt = generate_salt($salt_lenght);
	$format_og_salt = $hash_format . $salt;
	$hash = crypt($password, $format_og_salt);
	return $hash;
	}

//generer salt
function generate_salt($lenght) {
	$unique_random_string = md5(uniqid(mt_rand(), true));
	$base64_string = base64_encode($unique_random_string);
	$modified_base64_string = str_replace('+', '.', $base64_string);
	$salt = substr($modified_base64_string, 0, $lenght);
	return $salt; 	
	}

//check password
function check_password($password, $existing_hash) {
	$hash = crypt($password, $existing_hash);
		if ($hash === $existing_hash) {
			return true;
			} else {
				return false;
				}
	}
	
//find billeder	
function find_billeder($side, $placering) {
	global $forbind;
	$ren_side = mysqli_real_escape_string($forbind, trim($side));
	$ren_placering = mysqli_real_escape_string($forbind, trim($placering));
	
	$query  = "SELECT * ";
	$query .= "FROM foto ";
	$query .= "WHERE foto_side='{$ren_side}' ";  
	$query .= "AND foto_felt='{$ren_placering}' ";
	$query .= "ORDER BY foto_raekke ASC";
	$foto_set = @mysqli_query($forbind, $query);
	tjek_query($foto_set);
	return $foto_set;
}

function find_billeder_raekke($side, $placering, $raekke) {
	global $forbind;
	$ren_side = mysqli_real_escape_string($forbind, trim($side));
	$ren_placering = mysqli_real_escape_string($forbind, trim($placering));
	$ren_raekke = mysqli_real_escape_string($forbind, trim($raekke));
	
	$query  = "SELECT * ";
	$query .= "FROM foto ";
	$query .= "WHERE foto_side='{$ren_side}' ";  
	$query .= "AND foto_felt='{$ren_placering}' ";
	$query .= "AND foto_raekke='{$raekke}' ";
	$foto_set = @mysqli_query($forbind, $query);
	tjek_query($foto_set);
	return $foto_set;
}



function find_text($side, $placering) {
	global $forbind;
	$ren_side = mysqli_real_escape_string($forbind, trim($side));
	$ren_placering = mysqli_real_escape_string($forbind, trim($placering));
	
	$query  = "SELECT * ";
	$query .= "FROM beskrivelse ";
	$query .= "WHERE beskriv_side='{$ren_side}' ";  
	$query .= "AND beskriv_felt='{$ren_placering}' ";
	$query .= "ORDER BY beskriv_raekke ASC";
	$text_set = @mysqli_query($forbind, $query);
	tjek_query($text_set);
	return $text_set;
	}
	
	//sikker indtastning
	
	function escape_string($feltnavn) {
		global $forbind;
		$sikker = mysqli_real_escape_string($forbind, trim($feltnavn));
		return $sikker;
		}
		
	//slet udløbet annoncer
	function slet_annonce($now) {
			global $forbind;
			
			$find_dato = "SELECT * FROM jobs WHERE job_synlig='1' ";
			$dato_ret = mysqli_query($forbind, $find_dato);
			tjek_query($dato_ret);
		
			while($row = mysqli_fetch_assoc($dato_ret)) {
				$udloeb = $row['jobs_ansoeg'];
					
				if ($now > $udloeb) {
					$id = $row['jobs_id'];
					$synlig ="UPDATE jobs SET job_synlig='0' WHERE jobs_id='{$id}'";
					$slet = mysqli_query($forbind, $synlig);
					tjek_query($slet);
					}
			}
		}
		
		function find_annonce($synlig) {
		global $forbind;
		$find  = "SELECT * FROM jobs WHERE job_synlig='{$synlig}' ORDER BY jobs_ansoeg DESC";
		$annonce_set = @mysqli_query($forbind, $find);
		tjek_query($annonce_set);
		return $annonce_set;
		}
		
	
	
		
	
?>