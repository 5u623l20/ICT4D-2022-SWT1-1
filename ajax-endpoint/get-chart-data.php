<?php
use Phppot\Vote;

header('Content-Type: application/json');

require_once __DIR__ . '/../lib/Vote.php';
$vote = new Vote();
$resultYes = $vote->getCallerVoteYes();
$resultNo = $vote->getCallerVoteNo();

$data = array();

$type = "pie";
if (! empty($_GET["chart_type"])) {
    $type = $_GET["chart_type"];
}

switch ($type) {
    case "pie":
        $data[0] = $resultYes;
        $data[1] = $resultNo;
        break;
}
$data = json_encode($data);
echo str_replace("},","},\n",$data);
?>
