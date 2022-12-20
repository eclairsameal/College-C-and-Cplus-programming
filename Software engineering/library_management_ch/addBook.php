<?php
	if(!isset($_SESSION)){
		session_start();
	}
	include("db/connect_check.php");
	include("db/db_connect.php");
?>
<html xmlns = "http://www.w3.org/1999/xhtml" > 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<title>中華大學::圖書館管理系統</title>
		<link rel=stylesheet type="text/css" href="css/style.css">
		<script type="text/javascript">
 			function sub(){
    	 		submit.submit();
		  	}
		</script>
	</head>
	<body>
		<div class="header">
			<?php include 'include/header.php'; ?>
		</div>
		<div class="main-body">	
			<center>
				<form name="submit" action="insertBook.php" method="POST">
					<table>
						<tr>
							<td>書籍ID：</td>
							<td><input type="text" name="book_id"></td>
						</tr>
						<tr>
							<td>書籍名稱：</td>
							<td><input type="text" name="book_name"></td>
						</tr>
						<tr>
							<td>出版社：</td>
							<td><input type="text" name="publishing_house"></td>
						</tr>
						<tr>
							<td>作者：</td>
							<td><input type="text" name="author"></td>
						</tr>
						<tr>
							<td>出版日期：</td>
							<td><input type="date" name="date" value="<?php echo date('Y-m-d');?>"></td>
						</tr>

					</table>
					<input type="button" onClick="sub()" value="確認">
					<input type='button' onclick="self.location.href='main.php'" value='取消'>
				</form>
			</center>
		</div>
		<div class="footer">
			<?php include 'include/footer.php'; ?>
		</div>
	</body>
</html>

