<?php

function get_new_scramble($type = false) {
	if($type == false) {
		global $party;
		$type = $party['scramble'];
		$type = strtolower($type);
	}
	$part = explode(" ", $type);
	$part = $part[0];
	switch ($part) {
	case '3':
	case '3x3':
	case '3er':
	case '3x3x3':
	case '3x3x3oh':
	case '3x3x3onehanded':
	case '3x3oh':
	case '3x3x3bld':
	case '3x3bld':
		return scramble_3x3x3(25);
	case '2':
	case '2x2':
	case '2er':
	case '2x2x2':
		return scramble_2x2x2(10);
  case 'test':
    return scramble_2x2x2(42, true);
	case '1':
	case '1x1':
	case '1er':
	case '1x1x1':
		return scramble_2x2x2(6);
	case 'pyra':
	case 'pyram':
	case 'pyraminx':
		return scramble_pyraminx(15);
	case 'skewb':
	case 'skweb':
		return scramble_pyraminx(12, false);
	case 'mega':
	case 'megam':
	case 'megaminx':
		return scramble_megaminx_pochmann(70);
	case '4':
	case '4x4':
	case '4er':
	case '4x4x4':
		return scramble_4x4x4(40);
	case '5':
	case '5x5':
	case '5er':
	case '5x5x5':
		return scramble_5x5x5(60);
	case '6':
	case '6x6':
	case '6er':
	case '6x6x6':
		return scramble_6x6x6(80);
	case '7':
	case '7x7':
	case '7er':
	case '7x7x7':
		return scramble_7x7x7(100);
  case 'floppy':
  case 'floppycube':
  case '1x3x3':
  case '3x1x3':
  case '3x3x1':
		return scramble_floppy(10);
  case 'insert':
    /*ini_set("memory_limit","2582912");
    $scrambles = file('ll-scramble.txt');
    foreach ($scrambles as $sc) {

        query("INSERT INTO ".PREFIX."llscrambles (scramble) VALUES (\"$sc\")");

    }
    break;*/
  case 'lastlayer':
  case 'll':
  case 'last_layer':
  case 'll-scramble':
  case 'lastlayer-scramble':

    $scramble = query('SELECT scramble FROM '.PREFIX.'llscrambles ORDER BY RAND() LIMIT 1') or die('error');
    $scramble = $scramble->fetch_row();
    //return $scramble[0];
    return $scramble[0];
    
	default:
		return '';
	}
}


///// 3x3x3 START /////
$moves_3x3x3 = array("U","D","R","L","F","B");
$directions_3x3x3 = array("","'","2");

function get_move_opposite_3x3x3($scr) {
	switch($scr) {
		case 0:
			return 1;
		case 1:
			return 0;
		case 2:
			return 3;
		case 3:
			return 2;
		case 4:
			return 5;
		case 5:
			return 4;
		default:
			return false;
	}
}

function scramble_3x3x3($rand_num = 25) {
	$scramble = "";
	$rands = array();
	global $moves_3x3x3;
	global $directions_3x3x3;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,5);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] || ($rand1==$rands[$i-2] && get_move_opposite_3x3x3($rand1)==$rands[$i-1]) || get_move_opposite_3x3x3($rand1)==$rands[$i-2]) {
					$rand1 = rand(0,5);
				}
			} else {
				while($rand1==$rands[$i-1]) {
					$rand1 = rand(0,5);
				}
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_3x3x3[$rand1].$directions_3x3x3[$rand2].' ';
	}
	return $scramble;
}
///// 3x3x3 END /////


///// 2x2x2 START /////
$moves_2x2x2 = array("U","R","F");
$directions_2x2x2 = array("","'","2");

function scramble_2x2x2($rand_num = 20, $april = false) {
	$scramble = "";
	$rands = array();
	global $moves_2x2x2;
	global $directions_2x2x2;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,2);
		if ($i>0) {
			while($rand1==$rands[$i-1]) {
				$rand1 = rand(0,2);
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_2x2x2[$rand1].$directions_2x2x2[$rand2].' ';
	}
  if ($april) return april_2x2x2($scramble);
	else return $scramble;
  // FINDME
}

function april_2x2x2($scr) {

  $scr2 = explode(" ", $scr);
  $scr_rev = array_reverse($scr2);
  for ($i=0; $i<count($scr_rev); $i++) {
    if ($scr_rev[$i] == '') {
      array_splice($scr_rev, $i, 1);
      $i--;
      continue;
    }
    //die($scr_rev[$i].' '.inverse_2x2x2($scr_rev[$i]));
    $scr_rev[$i] = inverse_2x2x2($scr_rev[$i]);
  }
  for ($i=0; $i<count($scr2); $i++) {
    if ($scr2[$i] == '') { array_splice($scr2, $i, 1); $i--; }
  }
  $mid  = array("R2", "U2", "R2", "F2", "U2", "R2", "U2", "F2");
  $count = count($scr2)-1;
  switch($scr2[$count]) {
    case 'R2':
      array_splice($scr2, $count, 1);
      array_splice($mid, 0, 1);
      break;
    case "R'":
      $scr2[$count] = 'R';
      array_splice($mid, 0, 1);
      break;
    case 'R':
      $scr2[$count] = "R'";
      array_splice($mid, 0, 1);
      break;
  }
  $count = count($mid)-1;
  switch($scr_rev[0]) {
    case 'F2':
      array_splice($scr_rev, 0, 1);
      array_splice($mid, $count, 1);
      break;
    case "F'":
      $scr_rev[0] = 'F';
      array_splice($mid, $count, 1);
      break;
    case 'F':
      $scr_rev[0] = "F'";
      array_splice($mid, $count, 1);
      break;
  }
  //if (substr($scr2[count($scr2)-1], 0, 1) == 'R') unset($scr2[count($scr2)-1]);
  //if (substr($scr_rev[0], 0, 1) == 'F') unset($scr_rev[0]);
  return implode(" ", $scr2).' '.implode(" ", $mid).' '.implode(" ", $scr_rev);

}

function inverse_2x2x2($move) {
  if (strlen($move) == 1) return $move."'";
  if (substr($move, 1, 1) == "'") return substr($move, 0, 1);
  return $move;
  //if (substr($move, 1, 1) != "2") return $move."'";
}

///// 2x2x2 END /////



///// pyraminx START /////
$moves_pyraminx = array("U","L","R","B");
$directions_pyraminx = array("","'");

function scramble_pyraminx($rand_num = 20, $tips = true) {
	$scramble = "";
	$rands = array();
	global $moves_pyraminx;
	global $directions_pyraminx;
	if ($tips) {
		if (1 == rand(0,1)) {
			$scramble .= strtolower($moves_pyraminx[0]).$directions_pyraminx[rand(0,1)].' ';
		}
		if (1 == rand(0,1)) {
			$scramble .= strtolower($moves_pyraminx[1]).$directions_pyraminx[rand(0,1)].' ';
		}
		if (1 == rand(0,1)) {
			$scramble .= strtolower($moves_pyraminx[2]).$directions_pyraminx[rand(0,1)].' ';
		}
		if (1 == rand(0,1)) {
			$scramble .= strtolower($moves_pyraminx[3]).$directions_pyraminx[rand(0,1)].' ';
		}
	}
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,3);
		if ($i>0) {
			while($rand1==$rands[$i-1]) {
				$rand1 = rand(0,3);
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,1);
		$scramble .= $moves_pyraminx[$rand1].$directions_pyraminx[$rand2].' ';
	}
	return $scramble;
}
///// pyraminx END /////


///// 4x4x4 START /////
$moves_4x4x4 = array("U","D","R","L","F","B","Uw","Dw","Rw","Lw","Fw","Bw");
$directions_4x4x4 = array("","'","2");

function get_move_opposite_4x4x4($scr) {
	switch($scr) {
		case 0:
		case 6:
			return 1;
		case 1:
		case 7:
			return 0;
		case 2:
		case 8:
			return 3;
		case 3:
		case 9:
			return 2;
		case 4:
		case 10:
			return 5;
		case 5:
		case 11:
			return 4;
		default:
			return false;
	}
}

function get_move_opposite_4x4x4_lowercased($scr) {
	switch($scr) {
		case 0:
		case 6:
			return 7;
		case 1:
		case 7:
			return 6;
		case 2:
		case 8:
			return 9;
		case 3:
		case 9:
			return 8;
		case 4:
		case 10:
			return 11;
		case 5:
		case 11:
			return 10;
		default:
			return false;
	}
}

function scramble_4x4x4($rand_num = 40) {
	$scramble = "";
	$rands = array();
	global $moves_4x4x4;
	global $directions_4x4x4;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,11);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] ||
				      ($rand1==$rands[$i-2] && (get_move_opposite_4x4x4($rand1)==$rands[$i-1] || get_move_opposite_4x4x4_lowercased($rand1)==$rands[$i-1])) ||
					  get_move_opposite_4x4x4_lowercased($rand1)==$rands[$i-2] ||
					  get_move_opposite_4x4x4($rand1)==$rands[$i-2] ||
					  ($rands[$i-1] > 5 && $rand1 > 5 && $rands[$i-1] == get_move_opposite_4x4x4_lowercased($rand1)) ) {
					$rand1 = rand(0,11);
				}
			} else {
				while($rand1==$rands[$i-1] || ($rands[$i-1] > 5 && $rand1 > 5 && $rands[$i-1] == get_move_opposite_4x4x4_lowercased($rand1))) {
					$rand1 = rand(0,11);
				}
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_4x4x4[$rand1].$directions_4x4x4[$rand2].' ';
	}
	return $scramble;
}
///// 4x4x4 END /////


///// 5x5x5 START /////
$moves_5x5x5 = array("U","D","R","L","F","B","Uw","Dw","Rw","Lw","Fw","Bw");
$directions_5x5x5 = array("","'","2");

function get_move_opposite_5x5x5($scr) {
	switch($scr) {
		case 0:
		case 6:
			return 1;
		case 1:
		case 7:
			return 0;
		case 2:
		case 8:
			return 3;
		case 3:
		case 9:
			return 2;
		case 4:
		case 10:
			return 5;
		case 5:
		case 11:
			return 4;
		default:
			return false;
	}
}

function get_move_opposite_5x5x5_lowercased($scr) {
	switch($scr) {
		case 0:
		case 6:
			return 7;
		case 1:
		case 7:
			return 6;
		case 2:
		case 8:
			return 9;
		case 3:
		case 9:
			return 8;
		case 4:
		case 10:
			return 11;
		case 5:
		case 11:
			return 10;
		default:
			return false;
	}
}

function scramble_5x5x5($rand_num = 60) {
	$scramble = "";
	$rands = array();
	global $moves_5x5x5;
	global $directions_5x5x5;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,11);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] || ($rand1==$rands[$i-2] && (get_move_opposite_5x5x5($rand1)==$rands[$i-1] || get_move_opposite_5x5x5_lowercased($rand1)==$rands[$i-1]))
              || get_move_opposite_5x5x5_lowercased($rand1)==$rands[$i-2] || get_move_opposite_5x5x5($rand1)==$rands[$i-2]) {
					$rand1 = rand(0,11);
				}
			} else {
				while($rand1==$rands[$i-1]) {
					$rand1 = rand(0,11);
				}
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_5x5x5[$rand1].$directions_5x5x5[$rand2].' ';
	}
	return $scramble;
}
///// 5x5x5 END /////


///// 6x6x6 START /////
$moves_6x6x6 = array("U","D","R","L","F","B","2U","2D","2R","2L","2F","2B","3U","3D","3R","3L","3F","3B");
$directions_6x6x6 = array("","'","2");

function get_move_opposite_6x6x6($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 1;
		case 1:
		case 7:
		case 13:
			return 0;
		case 2:
		case 8:
		case 14:
			return 3;
		case 3:
		case 9:
		case 15:
			return 2;
		case 4:
		case 10:
		case 16:
			return 5;
		case 5:
		case 11:
		case 17:
			return 4;
		default:
			return false;
	}
}

function get_move_opposite_6x6x6_lowercased($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 7;
		case 1:
		case 7:
		case 13:
			return 6;
		case 2:
		case 8:
		case 14:
			return 9;
		case 3:
		case 9:
		case 15:
			return 8;
		case 4:
		case 10:
		case 16:
			return 11;
		case 5:
		case 11:
		case 17:
			return 10;
		default:
			return false;
	}
}

function get_move_opposite_6x6x6_lowercased_double($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 13;
		case 1:
		case 7:
		case 13:
			return 12;
		case 2:
		case 8:
		case 14:
			return 15;
		case 3:
		case 9:
		case 15:
			return 14;
		case 4:
		case 10:
		case 16:
			return 17;
		case 5:
		case 11:
		case 17:
			return 16;
		default:
			return false;
	}
}

function scramble_6x6x6($rand_num = 80) {
	$scramble = "";
	$rands = array();
	global $moves_6x6x6;
	global $directions_6x6x6;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,17);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] ||
				    ($rand1==$rands[$i-2] && (get_move_opposite_6x6x6($rand1)==$rands[$i-1] || get_move_opposite_6x6x6_lowercased($rand1)==$rands[$i-1] || get_move_opposite_6x6x6_lowercased_double($rand1)==$rands[$i-1])) ||
					  get_move_opposite_6x6x6_lowercased_double($rand1)==$rands[$i-2] ||
					  get_move_opposite_6x6x6_lowercased($rand1)==$rands[$i-2] ||
					  get_move_opposite_6x6x6($rand1)==$rands[$i-2] ||
					  ($rands[$i-1] > 11 && $rand1 > 11 && $rands[$i-1] == get_move_opposite_6x6x6_lowercased_double($rand1)) ) {
					$rand1 = rand(0,17);
				}
			} else {
				while($rand1==$rands[$i-1] || ($rands[$i-1] > 11 && $rand1 > 11 && $rands[$i-1] == get_move_opposite_6x6x6_lowercased_double($rand1)) ) {
					$rand1 = rand(0,17);
				}
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_6x6x6[$rand1].$directions_6x6x6[$rand2].' ';
	}
	return $scramble;
}
///// 6x6x6 END /////


///// 7x7x7 START /////
$moves_7x7x7 = array("U","D","R","L","F","B","2U","2D","2R","2L","2F","2B","3U","3D","3R","3L","3F","3B");
$directions_7x7x7 = array("","'","2");

function get_move_opposite_7x7x7($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 1;
		case 1:
		case 7:
		case 13:
			return 0;
		case 2:
		case 8:
		case 14:
			return 3;
		case 3:
		case 9:
		case 15:
			return 2;
		case 4:
		case 10:
		case 16:
			return 5;
		case 5:
		case 11:
		case 17:
			return 4;
		default:
			return false;
	}
}

function get_move_opposite_7x7x7_lowercased($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 7;
		case 1:
		case 7:
		case 13:
			return 6;
		case 2:
		case 8:
		case 14:
			return 9;
		case 3:
		case 9:
		case 15:
			return 8;
		case 4:
		case 10:
		case 16:
			return 11;
		case 5:
		case 11:
		case 17:
			return 10;
		default:
			return false;
	}
}

function get_move_opposite_7x7x7_lowercased_double($scr) {
	switch($scr) {
		case 0:
		case 6:
		case 12:
			return 13;
		case 1:
		case 7:
		case 13:
			return 12;
		case 2:
		case 8:
		case 14:
			return 15;
		case 3:
		case 9:
		case 15:
			return 14;
		case 4:
		case 10:
		case 16:
			return 17;
		case 5:
		case 11:
		case 17:
			return 16;
		default:
			return false;
	}
}

function scramble_7x7x7($rand_num = 100) {
	$scramble = "";
	$rands = array();
	global $moves_7x7x7;
	global $directions_7x7x7;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,17);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] || ($rand1==$rands[$i-2] && (get_move_opposite_7x7x7($rand1)==$rands[$i-1] || get_move_opposite_7x7x7_lowercased($rand1)==$rands[$i-1] || get_move_opposite_7x7x7_lowercased_double($rand1)==$rands[$i-1])) ||
              get_move_opposite_7x7x7_lowercased_double($rand1)==$rands[$i-2] || get_move_opposite_7x7x7_lowercased($rand1)==$rands[$i-2] || get_move_opposite_7x7x7($rand1)==$rands[$i-2]) {
					$rand1 = rand(0,17);
				}
			} else {
				while($rand1==$rands[$i-1]) {
					$rand1 = rand(0,17);
				}
			}
		}
		$rands[$i] = $rand1;
		$rand2 = rand(0,2);
		$scramble .= $moves_7x7x7[$rand1].$directions_7x7x7[$rand2].' ';
	}
	return $scramble;
}
///// 7x7x7 END /////


///// megaminx (pochmann) START /////
$moves_mp = array("++","--");
$umoves_mp = array("&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;","'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;");

function scramble_megaminx_pochmann($rand_num = 70) {
	$scramble = "";
	$rands = array();
	global $moves_mp;
	global $umoves_mp;
	for ($i=1;$i<=$rand_num;$i++) {
		if (($i % 2) == 0) {
			$scramble .= 'D'.$moves_mp[rand(0,1)].' ';
		} else {
			$scramble .= 'R'.$moves_mp[rand(0,1)].' ';
		}
		if (($i % 10) == 0) {
			$scramble .= 'U'.$umoves_mp[rand(0,1)];
		}
	}
	$scramble .= ' <a href="http://www.stefan-pochmann.info/spocc/other_stuff/tools/scramble_megaminx/" target="_blank">Pochmann Scramble</a>';
	return $scramble;
}
///// megaminx (pochmann) END /////



///// floppy START /////
$moves_floppy = array("U2","D2","R2","L2");

function get_move_opposite_floppy($scr) {
	switch($scr) {
		case 0:
			return 1;
		case 1:
			return 0;
		case 2:
			return 3;
		case 3:
			return 2;
		default:
			return false;
	}
}

function scramble_floppy($rand_num = 10) {
	$scramble = "";
	$rands = array();
	global $moves_floppy;
	for ($i=0;$i<$rand_num;$i++) {
		$rand1 = rand(0,3);
		if ($i>0) {
			if ($i>1) {
				while($rand1==$rands[$i-1] || ($rand1==$rands[$i-2] && get_move_opposite_floppy($rand1)==$rands[$i-1]) || get_move_opposite_floppy($rand1)==$rands[$i-2]) {
					$rand1 = rand(0,3);
				}
			} else {
				while($rand1==$rands[$i-1]) {
					$rand1 = rand(0,3);
				}
			}
		}
		$rands[$i] = $rand1;
		$scramble .= $moves_floppy[$rand1].' ';
	}
	return $scramble;
}

///// floppy END /////
?>