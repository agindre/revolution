<?php
/**
 * @package modx
 * @subpackage sqlsrv
 */
$xpdo_meta_map['modElement']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'site_element',
  'extends' => 'modAccessibleSimpleObject',
  'fields' => 
  array (
    'source' => 0,
    'property_preprocess' => 0,
  ),
  'fieldMeta' => 
  array (
    'source' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'fk',
    ),
    'property_preprocess' => 
    array (
      'dbtype' => 'bit',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
  ),
  'composites' => 
  array (
    'Acls' => 
    array (
      'class' => 'modAccessElement',
      'local' => 'id',
      'foreign' => 'target',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
  ),
  'aggregates' => 
  array (
    'PropertySets' => 
    array (
      'class' => 'modElementPropertySet',
      'local' => 'id',
      'foreign' => 'element',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
    'CategoryAcls' => 
    array (
      'class' => 'modAccessCategory',
      'local' => 'category',
      'foreign' => 'target',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
    'Source' => 
    array (
      'class' => 'sources.modMediaSource',
      'local' => 'source',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
  ),
);
