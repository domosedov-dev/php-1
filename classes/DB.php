<?php


class DB
{
    protected $dbh;

    public function __construct(array $config)
    {
        $this->dbh = new PDO($config['dsn'], $config['user'], $config['pass']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll();
    }
}
