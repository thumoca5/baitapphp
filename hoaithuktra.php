<?php
//Đặng Hoài Thu - K57SD1 - 21D191128

//Đáp án trắc nghiệm
    //Câu 1: In ra màn hình kết quả là: 5
    //Câu 2: D
    //Câu 3: D
    //Câu 4: A
    //Câu 5: A

//Bài 1 
function isPrimeNumber($n) {
    //Số nguyên n < 2 không phải là số nguyên tố
    if ($n < 2) {
        return false;
    }
    //Kiểm tra số nguyên tố khi >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo ("Các số nguyên tố từ 1 đến 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}

//Bài 2:
    //Tạo mảng kết hợp chứa thông tin sản phẩm
$product_info = array(
    array("name" => "Product 1", "price" => 10, "quantity" => 5),
    array("name" => "Product 2", "price" => 20, "quantity" => 10),
    array("name" => "Product 3", "price" => 30, "quantity" => 15)
);
    //Hiển thị thông tin sản phẩm trong mảng
foreach ($product_info as $product) {
    echo "<br> Name: " . $product["name"] . ", Price: " . $product["price"] . ", Quantity: " . $product["quantity"] . "<br>";
}
    //Tính tổng giá trị sản phẩm 
$total_value = 0;
foreach ($product_info as $product) {
    $total_value += $product["price"] * $product["quantity"];
}
    //In ra kết quả
echo "<br> Total value: " . $total_value;

?>
