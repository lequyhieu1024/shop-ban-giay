<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm số lượng</title>
    <style>
        .container {
            margin-top: 200px;
            margin-left: 200px;
        }
    </style>
</head>
<body>

<form class="container">
    <button onclick="decrement()" id="minus" type="button">-</button>
    <input id="soluong" type="number" onchange="thanhtien()" value="1">
    <button onclick="increment()" id="plus" type="button">+</button>
    <input type="submit" value="Gửi">
    <input type="text" id="thanhtien">
</form>

<script>
    function decrement() {
        let soluongInput = document.getElementById('soluong');
        let currentValue = parseInt(soluongInput.value);

        // Kiểm tra nếu giá trị hiện tại là lớn hơn 1, thì mới giảm giá trị
        if (currentValue > 1) {
            soluongInput.value = currentValue - 1;
        }
        
        // Cập nhật thành tiền sau mỗi thay đổi số lượng
        thanhtien();
    }

    function increment() {
        let soluongInput = document.getElementById('soluong');
        let currentValue = parseInt(soluongInput.value);

        // Tăng giá trị
        soluongInput.value = currentValue + 1;

        // Cập nhật thành tiền sau mỗi thay đổi số lượng
        thanhtien();
    }

    function thanhtien() {
        let price = 100000;
        let soluongInput = document.getElementById('soluong');
        let thanhtienElement = document.getElementById('thanhtien');

        // Tính toán thành tiền và cập nhật nội dung của phần tử h1
        thanhtienElement.inputMode = 'Thành tiền: ' + (parseInt(soluongInput.value) * price) + ' VND';
    }
</script>

</body>
</html>
