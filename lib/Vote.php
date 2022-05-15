<?php
namespace Phppot;

class Vote
{
    private $dbConn;

    public function __construct()
    {
        require_once __DIR__ . '/DataSource.php';
        $this->dbConn = new DataSource();
    }

    function getCallerVoteYes()
    {
        $query = "SELECT * FROM bipvote where caller_vote=1";
        $result = $this->dbConn->rows($query);
        return $result;
    }

    function getCallerVoteNo()
    {
        $query = "SELECT * FROM bipvote where caller_vote='0'";
        $result = $this->dbConn->rows($query);
        return $result;
    }
}
