<?php

/**
 * BaseaCategoryUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $user_id
 * @property aCategory $Category
 * @property sfGuardUser $User
 * 
 * @method integer       getCategoryId()  Returns the current record's "category_id" value
 * @method integer       getUserId()      Returns the current record's "user_id" value
 * @method aCategory     getCategory()    Returns the current record's "Category" value
 * @method sfGuardUser   getUser()        Returns the current record's "User" value
 * @method aCategoryUser setCategoryId()  Sets the current record's "category_id" value
 * @method aCategoryUser setUserId()      Sets the current record's "user_id" value
 * @method aCategoryUser setCategory()    Sets the current record's "Category" value
 * @method aCategoryUser setUser()        Sets the current record's "User" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaCategoryUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_category_user');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('type', 'INNODB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aCategory as Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}