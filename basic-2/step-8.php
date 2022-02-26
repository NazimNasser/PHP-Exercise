<?php
function is_Power_of_two($num)
{
    if(($num & ($num - 1)) == 0)
    {
		return "$num is power of 2";
    }else{
		return "$num is not power of 2";
    }
}
echo is_Power_of_two(4)."\n";
echo is_Power_of_two(36)."\n";
echo is_Power_of_two(16)."\n";
?>

<?php
function PowerOfTwo($num)
{
      $x = $num;
      while ($x % 2 == 0) {
      $x /= 2;
      }

	if($x == 1)
    {
		return "$num is power of 2";
    }
    else
    {
		return "$num is not power of 2";
    }
  
}
print_r(PowerOfTwo(4)."\n");
print_r(PowerOfTwo(36)."\n");
print_r(PowerOfTwo(16)."\n");
?>