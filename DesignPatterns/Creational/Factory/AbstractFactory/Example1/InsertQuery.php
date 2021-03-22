<?php


interface IInsertQuery{}

class MysqlInsertQuery implements IInsertQuery {}
class OracleInsertQuery implements IInsertQuery {}
class CassandraInsertQuery implements IInsertQuery {}


