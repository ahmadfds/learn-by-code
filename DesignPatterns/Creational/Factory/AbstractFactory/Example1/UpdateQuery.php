<?php

interface IUpdateQuery{}

class MysqlUpdateQuery implements IUpdateQuery{}
class OracleUpdateQuery implements IUpdateQuery{}
class CassandraUpdateQuery implements IUpdateQuery{}
