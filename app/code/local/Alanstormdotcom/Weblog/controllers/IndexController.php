<?php

/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 08/07/2015
 */
class Alanstormdotcom_Weblog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function testModelAction()
    {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
        echo "Loading the blogpost with an ID of {$params['id']}";
        $blogpost->load($params['id']);

        $blogpost->setData('title', 'change');
        $data = $blogpost->getData('title');
        var_dump($blogpost->getOrigData('title'));
        var_dump($data);die;
    }
    public function createNewPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->setTitle('Code post!');
        $blogpost->setPost('This post was created form code!');
        $blogpost->save();
        echo 'post created';
    }
    public function editFirstPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->setTitle('The first post has edited');
        $blogpost->save();
        echo 'post edited';
    }
    public function deleteFirstPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post deleted';
    }
    public function showAllBlogPostAction()
    {
        $posts = Mage::getModel('weblog/blogpost')->getCollection();
        var_dump($posts);
    }

    public function indexAction()
    {
        die(__METHOD__);
    }


}