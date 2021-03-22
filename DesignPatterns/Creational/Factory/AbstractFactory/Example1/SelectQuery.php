<?php

interface ISelectQuery{}

class MysqlSelectQuery implements ISelectQuery {}
class OracleSelectQuery implements ISelectQuery {}
class CassandraSelectQuery implements ISelectQuery {}