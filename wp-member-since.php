$date2 = new DateTime();
$diff = $date1->diff($date2);
if ($diff->y == 1){echo $diff->y . " year, ";}
elseif ($diff->y >1){echo $diff->y . " years, ";}
if ($diff->m == 1){echo $diff->m." month, ";}
elseif ($diff->m >1){echo $diff->m." months, ";}
if ($diff->d == 1){echo $diff->d." day ";}
elseif ($diff->d >1){echo $diff->d." days ";}
