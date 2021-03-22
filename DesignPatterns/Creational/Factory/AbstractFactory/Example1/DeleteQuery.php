<?php

interface IDeleteQuery{}

class MysqlDeleteQuery implements IDeleteQuery{}
class OracleDeleteQuery implements IDeleteQuery{}
class CassandraDeleteQuery implements IDeleteQuery{}
