<?php
// POST 데이터 수신
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// 유효성 검사 (간단히 처리)
if (empty($name) || empty($email) || empty($message)) {
    die("모든 필드를 채워 주세요.");
}

// 저장할 파일 경로
$file = 'inquiries.txt';

// 현재 날짜와 시간
$date = date('Y-m-d H:i:s');

// 파일에 데이터 저장
$data = "문의 날짜: $date\n이름: $name\n이메일: $email\n메시지: $message\n\n";

// 파일에 저장 (추가 모드)
file_put_contents($file, $data, FILE_APPEND);

// 사용자에게 응답
echo "문의 내용이 성공적으로 저장되었습니다!";
?>
