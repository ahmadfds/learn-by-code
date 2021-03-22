<?php


interface IDatabaseDriverFactory
{
    public function createInsertQuery():IInsertQuery;
    public function createUpdateQuery():IUpdateQuery;
    public function createDeleteQuery():IDeleteQuery;
    public function createSelectQuery():ISelectQuery;
}

class MysqlDriverFactory implements IDatabaseDriverFactory
{

    public function createInsertQuery(): IInsertQuery
    {
        return new MysqlInsertQuery();
    }

    public function createUpdateQuery(): IUpdateQuery
    {
        return new MysqlUpdateQuery();
    }

    public function createDeleteQuery(): IDeleteQuery
    {
        return new MysqlDeleteQuery();
    }

    public function createSelectQuery(): ISelectQuery
    {
        return new MysqlSelectQuery();
    }
}


class OracleDriverFactory implements IDatabaseDriverFactory
{

    public function createInsertQuery(): IInsertQuery
    {
        return new OracleInsertQuery();
    }

    public function createUpdateQuery(): IUpdateQuery
    {
        return new OracleUpdateQuery();
    }

    public function createDeleteQuery(): IDeleteQuery
    {
        return new OracleDeleteQuery();
    }

    public function createSelectQuery(): ISelectQuery
    {
        return new OracleSelectQuery();
    }
}

class CassandraDriverFactory implements IDatabaseDriverFactory
{

    public function createInsertQuery(): IInsertQuery
    {
        return new CassandraInsertQuery();
    }

    public function createUpdateQuery(): IUpdateQuery
    {
        return new CassandraUpdateQuery();
    }

    public function createDeleteQuery(): IDeleteQuery
    {
        return new CassandraDeleteQuery();
    }

    public function createSelectQuery(): ISelectQuery
    {
        return new CassandraSelectQuery();
    }
}



