<!DOCTYPE html>
<html>
	<title>Kết quả kiểm tra điểm</title>
	<body>
		<?php
			function GiaiThua($x) {
				$result = 1;
				for ($i = 1; $i <= $x; $i++) {
					$result *= $i;
				}
				return $result;
			}
			$x = $_POST["x"];
			$y = $_POST["y"];
			$f = $_POST["f"];
			if ($f == 0) {
				echo GiaiThua($x);
			}
			else {
				echo $x ** $y;
			}
		?>
	</body>
</html>