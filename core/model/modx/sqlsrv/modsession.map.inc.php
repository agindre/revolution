<?php
/**
 * @package modx
 * @subpackage sqlsrv
 */
$xpdo_meta_map['modSession']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'session',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => '',
    'access' => NULL,
    'data' => NULL,
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'index' => 'pk',
      'default' => '',
    ),
    'access' => 
    array (
      'dbtype' => 'bigint',
      'phptype' => 'timestamp',
      'null' => false,
    ),
    'data' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'access' => 
    array (
      'alias' => 'access',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'access' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
