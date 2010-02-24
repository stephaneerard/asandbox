<?php

/**
 * BaseTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property boolean $is_triple
 * @property string $triple_namespace
 * @property string $triple_key
 * @property string $triple_value
 * @property Doctrine_Collection $Tagging
 * 
 * @method string              getName()             Returns the current record's "name" value
 * @method boolean             getIsTriple()         Returns the current record's "is_triple" value
 * @method string              getTripleNamespace()  Returns the current record's "triple_namespace" value
 * @method string              getTripleKey()        Returns the current record's "triple_key" value
 * @method string              getTripleValue()      Returns the current record's "triple_value" value
 * @method Doctrine_Collection getTagging()          Returns the current record's "Tagging" collection
 * @method Tag                 setName()             Sets the current record's "name" value
 * @method Tag                 setIsTriple()         Sets the current record's "is_triple" value
 * @method Tag                 setTripleNamespace()  Sets the current record's "triple_namespace" value
 * @method Tag                 setTripleKey()        Sets the current record's "triple_key" value
 * @method Tag                 setTripleValue()      Sets the current record's "triple_value" value
 * @method Tag                 setTagging()          Sets the current record's "Tagging" collection
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7200 2010-02-21 09:37:37Z beberlei $
 */
abstract class BaseTag extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tag');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('is_triple', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('triple_namespace', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('triple_key', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('triple_value', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));


        $this->index('name', array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->index('triple1', array(
             'fields' => 
             array(
              0 => 'triple_namespace',
             ),
             ));
        $this->index('triple2', array(
             'fields' => 
             array(
              0 => 'triple_key',
             ),
             ));
        $this->index('triple3', array(
             'fields' => 
             array(
              0 => 'triple_value',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Tagging', array(
             'local' => 'id',
             'foreign' => 'tag_id'));
    }
}