<?php

/**
 * BaseaBlogPageCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $page_id
 * @property integer $blog_category_id
 * @property aBlogCategory $aBlogCategory
 * @property aPage $aPage
 * 
 * @method integer           getId()               Returns the current record's "id" value
 * @method integer           getPageId()           Returns the current record's "page_id" value
 * @method integer           getBlogCategoryId()   Returns the current record's "blog_category_id" value
 * @method aBlogCategory     getABlogCategory()    Returns the current record's "aBlogCategory" value
 * @method aPage             getAPage()            Returns the current record's "aPage" value
 * @method aBlogPageCategory setId()               Sets the current record's "id" value
 * @method aBlogPageCategory setPageId()           Sets the current record's "page_id" value
 * @method aBlogPageCategory setBlogCategoryId()   Sets the current record's "blog_category_id" value
 * @method aBlogPageCategory setABlogCategory()    Sets the current record's "aBlogCategory" value
 * @method aBlogPageCategory setAPage()            Sets the current record's "aPage" value
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseaBlogPageCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_blog_page_category');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('page_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('blog_category_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aBlogCategory', array(
             'local' => 'blog_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('aPage', array(
             'local' => 'page_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}