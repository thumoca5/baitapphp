<?php
//1. Kiểm tra xem một số có phải số chẵn hay không
function soChan($n){
    if (is_int($n)){
        if($n%2==0){
            echo "$n la so chan";
        } else {echo "$n khong la so chan";}
    } else {echo "Khong la so chan";}
}
$n=10.2;
soChan($n);

//2. Tính tổng của các số từ 1 đến n
function tong($n){
    $sum = 0;
    for($i=1; $i<=$n; $i++){
        $sum=$sum+$i;
    }
    return $sum;
}
$n=10;
echo "Tong cac so tu 1 den $n la: ". tong($n);

//3. In ra bảng cửu chương từ 1 đến 10
function bangCuuChuong($n){
    for ($i=1; $i<=$n; $i++){
        for($j=1; $j<=10; $j++){
            echo "$i x $j = ". $i*$j .'<br>';
        }
    }
}
$n = 4;
bangCuuChuong($n);

//4. Kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
function containsWord($haystack, $needle) {
    $pos = strpos($haystack, $needle);
    return $pos !== false;
}
$stringToCheck = "How to make wise decisions";
$wordToFind = "decisions";
if (containsWord($stringToCheck, $wordToFind)) {
    echo "Chuỗi chứa từ '$wordToFind'.";
} else {
    echo "Chuỗi không chứa từ '$wordToFind'.";
}

//5. Tìm giá trị lớn nhất và nhỏ nhất trong một mảng
$list_number = array(1, 10, -25, 168);
echo "Gia tri lon nhat cua mang tren la: ";
echo max($list_number);
echo "<br> Gia tri nho nhat cua mang tren la: ";
echo min($list_number);

//6. Sắp xếp một mảng theo thứ tự tăng dần
$numbers = array(17, 624, 2, 20, 8, -10);
sort($numbers);
foreach( $numbers as $n) {
    echo "$n <br>";
}
$something = array("Books", "Tables", "Chairs", "Pencils");
sort($something);
foreach( $something as $s) {
    echo "$s <br>";
}

//7. Tính giai thừa của một số nguyên dương
$a = 6;
$b = 7;
$c = 20;
function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
    // tính giai thừa
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");

//8. Tìm số nguyên tố trong một khoảng cho trước
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo ("Các số nguyên tố nhỏ hơn 50 là: <br>");
for($i = 0; $i < 50; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}

//9. Tính tổng của các số trong một mảng
$prime_numbers = array(2, 3, 5, 7);
echo "Tong cua cac so trong mang da cho la: ";
echo array_sum($prime_numbers);

//10. In ra các số Fibonacci trong một khoảng cho trước
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}

//11. Kiểm tra xem một số có phải là số Armstrong hay không
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numberOfDigits = strlen($number);
    
    while ($temp > 0) {
      $remainder = $temp % 10;
      $sum += pow($remainder, $numberOfDigits);
      $temp = floor($temp / 10);
    }
    
    if ($number == $sum) {
      return true;
    } else {
      return false;
    }
}
$number = 158;
if (isArmstrong($number)) {
    echo $number . " Là số Armstrong.";
} else {
    echo $number . " Không phải là số Armstrong.";
}

//12. Chèn một phần tử vào một mảng ở vị trí bất kì
$mang_ban_dau = array( '1','2','3','4','5' );  
		echo 'Mảng ban đầu: '."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
		$phan_tu_can_chen = '6 7';  
		array_splice( $mang_ban_dau, 3, 0, $phan_tu_can_chen);   
		echo "Sau khi chèn phần tử '6 7' thì mảng sẽ như sau: "."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";

//13. Loại bỏ các phần tử trong một mảng
$x = array(0, 1, 2, 3, 4);  
			var_dump($x);  
			unset($x[3]);  
			$x = array_values($x);  
			echo '';  
			var_dump($x);
     
//14. Tìm vị trí của một phần tử trong một mảng
// Mảng đầu vào
$numbers = array(1, 2, 3, 4, 5);
// Phần tử cần tìm
$searchNumber = 3;
// Tìm vị trí của phần tử trong mảng
$position = array_search($searchNumber, $numbers);
// Kiểm tra xem phần tử có tồn tại trong mảng hay không
if ($position !== false) {
    echo "Phần tử $searchNumber được tìm thấy tại vị trí $position.";
} else {
    echo "Phần tử $searchNumber không tồn tại trong mảng.";
}

//15. Đảo ngược một chuỗi
echo "Chuỗi ban đầu là: 123456789" .'<br>';
echo "Chuỗi đảo ngược là: ";
echo strrev(123456789);

//16. Tính số lượng phần tử trong một mảng
$list_prime_number = array(6, 8, 9, 7, 11, 31, 91, 10, 22);
echo "Tổng số phần tử trong mảng đã cho là: ";
echo count($list_prime_number);

//17. Kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
    //(là chuỗi có dạng đọc xuôi hay đọc ngược đều như nhau)
function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo kiem_tra_chuoi_palindrome('coccoc')."<br>";

//18. Đếm số lần xuất hiện của một phần tử trong một mảng
$array = array(
    'jisoobp',
    'jisoobp',
    'lisabp',
    'jenniebp',
    'rosebp',
    'rosebp'
);
echo '<pre>';
print_r(array_count_values($array));

//19. Sắp xếp một mảng theo thứ tự giảm dần
$numbers = array(17, 624, 2, 20, 8, -10);
rsort($numbers);
foreach( $numbers as $n) {
    echo "$n <br>";
}
$something = array("Books", "Tables", "Chairs", "Pencils");
rsort($something);
foreach( $something as $s) {
    echo "$s <br>";
}

//20. Thêm một phần tử vào đầu hoặc cuối của một mảng
    // Thêm phần tử vào đầu mảng
function addElementToStart($array, $element){
    array_unshift($array, $element);
    return $array;
}
// Thêm phần tử vào cuối mảng
function addElementToEnd($array, $element){
    $array[] = $element;
    return $array;
}
// Sử dụng các hàm để thêm phần tử
$myArray = [1, 2, 3, 4, 5];
$newArrayStart = addElementToStart($myArray, 0);
$newArrayEnd = addElementToEnd($myArray, 6);
// In kết quả
echo "Mảng sau khi thêm phần tử vào đầu: ";
echo "Mảng sau khi thêm phần tử vào cuối: ";
//21. Tìm số lớn thứ hai trong một mảng
$my_array = array(3, 2, 1, 5, 4);
rsort($my_array);
$second_largest = $my_array[1];
echo "Số lớn thứ 2 trong mảng trên là: $second_largest";

//22. Tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
$a = 40;
$b = 42;
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
echo ("BSCNN của $a và $b là: " . BSCNN($a, $b));

//23. Kiểm tra xem một số có phải là số hoàn hảo hay không 
    //(Số hoàn hảo có tổng các ước nguyên dương chính thức của nó bằng chính nó. VD 6=1+2+3)
function find_perfect_num($n){
        // flag = 1 => số hoàn hảo
        // flag = 0 => không phải số hoàn hảo
        $flag = 0; $total = 0;
        //Tìm tổng ước số   
        for ($i=1;$i<$n; $i++){
             if ($n % $i == 0) $total+=$i;//Nếu là ước số thì cộng vào tổng
        }
        //So sánh tổng ước số với số đã cho để tìm ra số hoàn hảo
        if ($total == $n & $n!=0) $flag = 1;
        return $flag;
    }
    $array= array(3,6,8);  
    foreach($array as $n){
        $check = find_perfect_num($n);
        if( $check == 1 ) echo $n."là số hoàn hảo" .'<br>';
        else echo $n." không phải là số hoàn hảo" .'<br>';
    }

//24. Tìm số lẻ lớn nhất trong một mảng
function findLargestOdd($array) {
    $largestOdd = PHP_INT_MIN;
    foreach ($array as $number) {
        if ($number % 2 == 1 && $number > $largestOdd) {
            $largestOdd = $number;
        }
    }
    return ($largestOdd == PHP_INT_MIN) ? null : $largestOdd;
}
$array = array(1, 3, 5, 7, 9);
// Gọi hàm để tìm số lẻ lớn nhất trong mảng
$largestOdd = findLargestOdd($array);
// In kết quả
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOdd";
} else {
    echo "Không có số lẻ nào trong mảng.";
}

//25. Kiểm tra xem một số có phải là số nguyên tố hay không
function check_prime($n){
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
$n = 673;
if(check_prime($n)) {
    echo "{$n} là số nguyên tố";
} else {
    echo "{$n} là hợp số";
}

//26. Tìm số dương lớn nhất trong một mảng
function findLargestPositive($array) {
    $largestPositive = null;
    foreach ($array as $number) {
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }
    return $largestPositive;
}
$array = array(1, -3, 5, 7, -9);
// Gọi hàm để tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($array);
// In kết quả
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive";
} else {
    echo "Không có số dương trong mảng.";
}

//27. Tìm số âm lớn nhất trong một mảng
function findLargestNegative($array) {
    $largestNegative = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
            $largestNegative = $number;
        }
    }
    return $largestNegative;
}
$array = array(1, -3, 5, 7, -9);
// Gọi hàm để tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($array);
// In kết quả
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative";
} else {
    echo "Không có số âm trong mảng.";
}

//28. Tính tổng các số lẻ từ 1 đến n
function tong_so_le($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $tong += $i;
        }
    }
    return $tong;
}
$n = 30;
echo "Tổng các số lẻ từ 1 den $n la: ". tong_so_le($n);

//29. Tìm số chính phương trong một khoảng cho trước
function tim_so_chinh_phuong($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            echo $i . " ";
        }
    }
}
$start = 3;
$end = 50;
echo "Số chính phương trong khoảng đã chọn là: ";
tim_so_chinh_phuong($start, $end);

//30. Kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
$str = 'Hello world !'; //Chuỗi ban đầu
$sub = 'world'; //Chuỗi con
if (strlen(strstr($str, $sub)) > 0) {
echo 'Là chuỗi con';
} else {
echo 'Không phải là chuỗi con';
}

?>