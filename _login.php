<?php
	//데이터베이스 접속
	require("_conn.php");
	$id = $_POST['id'];
	$_SESSION['id'] = $id;
	$pw = $_POST['pw'];

	//FROM뒤에 테이블명 적어줌(회원 테이블임) SELECT 조회, INSERT 삽입, DELETE 삭제, UPDATE 변경
	$sql = "SELECT * FROM `user` WHERE id='$id' AND pw='$pw'";
	//conn데이터베이스 실행해서 sql변수를 담는다.
	$result = mysqli_query($conn, $sql);
	$row = $result->num_rows; //결과값을 정수로 변환 1
	if($row > 0){
		//로그인 처리
		require('_loginok.php');
		echo "<script>alert('로그인 완료!');location.href='index.php'</script>";
	} else {
		echo "<script>alert('로그인 실패! 아이디나 비밀번호를 확인해주세요.');location.href='login.php'</script>"; 
	}
?>