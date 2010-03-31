<?php

/**
 * BaseaBlogCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property Doctrine_Collection $Pages
 * @property Doctrine_Collection $Items
 * @property Doctrine_Collection $Posts
 * @property Doctrine_Collection $Events
 * @property Doctrine_Collection $aBlogPageCategory
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getDescription()       Returns the current record's "description" value
 * @method Doctrine_Collection getPages()             Returns the current record's "Pages" collection
 * @method Doctrine_Collection getItems()             Returns the current record's "Items" collection
 * @method Doctrine_Collection getPosts()             Returns the current record's "Posts" collection
 * @method Doctrine_Collection getEvents()            Returns the current record's "Events" collection
 * @method Doctrine_Collection getABlogPageCategory() Returns the current record's "aBlogPageCategory" collection
 * @method aBlogCategory       setId()                Sets the current record's "id" value
 * @method aBlogCategory       setName()              Sets the current record's "name" value
 * @method aBlogCategory       setDescription()       Sets the current record's "description" value
 * @method aBlogCategory       setPages()             Sets the current record's "Pages" collection
 * @method aBlogCategory       setItems()             Sets the current record's "Items" collection
 * @method aBlogCategory       setPosts()             Sets the current record's "Posts" collection
 * @method aBlogCategory       setEvents()            Sets the current record's "Events" collection
 * @method aBlogCategory       setABlogPageCategory() Sets the current record's "aBlogPageCategory" collection
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaBlogCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_blog_category');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('aPage as Pages', array(
             'refClass' => 'aBlogPageCategory',
             'local' => 'blog_category_id',
             'foreign' => 'page_id'));

        $this->hasMany('aBlogItem as Items', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('aBlogPost as Posts', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('aBlogEvent as Events', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('aBlogPageCategory', array(
             'local' => 'id',
             'foreign' => 'blog_category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable();
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}