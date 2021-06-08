<?php include __DIR__. '/parts-php/config.php'; 

 
// 1. 列表 2. 加入 3. 變更數量 4. 移除項目
// 1. list 2. add 3. update 4. delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; //操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; //商品id
$type = isset($_GET['type']) ? intval($_GET['type']) : 2; //商品id

$output = [
    'success' => false,
    'addOrDel' => '',
    'result' => 0,
];

if (empty($_SESSION['user'])) {
    $output['result'] = -1;
} else {
    // switch ($action) {
    //     case 'add':
    $output['result'] = 1;


    //如果沒有抓到pid
    if (!empty($pid)) {
        $sql = "SELECT * FROM favorites WHERE member_id =? AND `type`=? AND  `target_id`=?"; // 查詢資料表
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_SESSION['user']['id'],
            $type,
            $pid
            ]);

        $row = $stmt->fetch(); //撈出一筆資料
        $output['result'] = ($row);


        if (empty($row)) {

            $output['result'] = 5;
            $output['addOrDel'] = 'add';

            $target_id = $pid;
            $f_sql = "INSERT INTO favorites ( `member_id`, `type`, `target_id`, `date`)
                                            VALUES ( ?, ?, ?, NOW())";
            $f_stmt = $pdo->prepare($f_sql);
            $f_stmt->execute([
                $_SESSION['user']['id'],
                $type,
                $target_id
            ]);

        } else {
            $output['addOrDel'] = 'del';
            $target_id = $pid;
            $df_sql = "DELETE FROM favorites WHERE member_id =? AND `type`=? AND  `target_id`= $target_id";
            $df_stmt = $pdo->prepare($df_sql);
            $df_stmt->execute([
                $_SESSION['user']['id'],
                $type
                ]);
        }
    }
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);