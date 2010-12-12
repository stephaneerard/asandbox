<?php

/**
 * BaseaBlogItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $author_id
 * @property integer $page_id
 * @property string $title
 * @property boolean $slug_saved
 * @property string $excerpt
 * @property enum $status
 * @property boolean $allow_comments
 * @property string $template
 * @property timestamp $published_at
 * @property string $type
 * @property date $start_date
 * @property time $start_time
 * @property date $end_date
 * @property time $end_time
 * @property string $location
 * @property sfGuardUser $Author
 * @property Doctrine_Collection $Editors
 * @property aPage $Page
 * @property Doctrine_Collection $Categories
 * @property Doctrine_Collection $BlogItemEditors
 * @property Doctrine_Collection $BlogItemCategories
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getAuthorId()           Returns the current record's "author_id" value
 * @method integer             getPageId()             Returns the current record's "page_id" value
 * @method string              getTitle()              Returns the current record's "title" value
 * @method boolean             getSlugSaved()          Returns the current record's "slug_saved" value
 * @method string              getExcerpt()            Returns the current record's "excerpt" value
 * @method enum                getStatus()             Returns the current record's "status" value
 * @method boolean             getAllowComments()      Returns the current record's "allow_comments" value
 * @method string              getTemplate()           Returns the current record's "template" value
 * @method timestamp           getPublishedAt()        Returns the current record's "published_at" value
 * @method string              getType()               Returns the current record's "type" value
 * @method date                getStartDate()          Returns the current record's "start_date" value
 * @method time                getStartTime()          Returns the current record's "start_time" value
 * @method date                getEndDate()            Returns the current record's "end_date" value
 * @method time                getEndTime()            Returns the current record's "end_time" value
 * @method string              getLocation()           Returns the current record's "location" value
 * @method sfGuardUser         getAuthor()             Returns the current record's "Author" value
 * @method Doctrine_Collection getEditors()            Returns the current record's "Editors" collection
 * @method aPage               getPage()               Returns the current record's "Page" value
 * @method Doctrine_Collection getCategories()         Returns the current record's "Categories" collection
 * @method Doctrine_Collection getBlogItemEditors()    Returns the current record's "BlogItemEditors" collection
 * @method Doctrine_Collection getBlogItemCategories() Returns the current record's "BlogItemCategories" collection
 * @method aBlogItem           setId()                 Sets the current record's "id" value
 * @method aBlogItem           setAuthorId()           Sets the current record's "author_id" value
 * @method aBlogItem           setPageId()             Sets the current record's "page_id" value
 * @method aBlogItem           setTitle()              Sets the current record's "title" value
 * @method aBlogItem           setSlugSaved()          Sets the current record's "slug_saved" value
 * @method aBlogItem           setExcerpt()            Sets the current record's "excerpt" value
 * @method aBlogItem           setStatus()             Sets the current record's "status" value
 * @method aBlogItem           setAllowComments()      Sets the current record's "allow_comments" value
 * @method aBlogItem           setTemplate()           Sets the current record's "template" value
 * @method aBlogItem           setPublishedAt()        Sets the current record's "published_at" value
 * @method aBlogItem           setType()               Sets the current record's "type" value
 * @method aBlogItem           setStartDate()          Sets the current record's "start_date" value
 * @method aBlogItem           setStartTime()          Sets the current record's "start_time" value
 * @method aBlogItem           setEndDate()            Sets the current record's "end_date" value
 * @method aBlogItem           setEndTime()            Sets the current record's "end_time" value
 * @method aBlogItem           setLocation()           Sets the current record's "location" value
 * @method aBlogItem           setAuthor()             Sets the current record's "Author" value
 * @method aBlogItem           setEditors()            Sets the current record's "Editors" collection
 * @method aBlogItem           setPage()               Sets the current record's "Page" value
 * @method aBlogItem           setCategories()         Sets the current record's "Categories" collection
 * @method aBlogItem           setBlogItemEditors()    Sets the current record's "BlogItemEditors" collection
 * @method aBlogItem           setBlogItemCategories() Sets the current record's "BlogItemCategories" collection
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaBlogItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_blog_item');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('author_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('page_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('slug_saved', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('excerpt', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('status', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'draft',
              1 => 'pending review',
              2 => 'published',
             ),
             'notnull' => true,
             'default' => 'draft',
             ));
        $this->hasColumn('allow_comments', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('template', 'string', 255, array(
             'type' => 'string',
             'default' => 'singleColumnTemplate',
             'length' => 255,
             ));
        $this->hasColumn('published_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('start_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('start_time', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('end_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('end_time', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('location', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));

        $this->option('type', 'INNODB');

        $this->setSubClasses(array(
             'aBlogPost' => 
             array(
              'type' => 'post',
             ),
             'aEvent' => 
             array(
              'type' => 'event',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as Author', array(
             'local' => 'author_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('sfGuardUser as Editors', array(
             'refClass' => 'aBlogEditor',
             'local' => 'blog_item_id',
             'foreign' => 'user_id'));

        $this->hasOne('aPage as Page', array(
             'local' => 'page_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('aCategory as Categories', array(
             'refClass' => 'aBlogItemToCategory',
             'local' => 'blog_item_id',
             'foreign' => 'category_id'));

        $this->hasMany('aBlogEditor as BlogItemEditors', array(
             'local' => 'id',
             'foreign' => 'blog_item_id'));

        $this->hasMany('aBlogItemToCategory as BlogItemCategories', array(
             'local' => 'id',
             'foreign' => 'blog_item_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $taggable0 = new Taggable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             'builder' => 
             array(
              0 => 'aTools',
              1 => 'slugify',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($taggable0);
        $this->actAs($sluggable0);
    }
}