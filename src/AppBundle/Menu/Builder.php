<?php
/**
 * Created by PhpStorm.
 * User: optize01
 * Date: 08.11.17
 * Time: 09:29
 */

namespace AppBundle\Menu;

use Knp\Menu\Matcher\Matcher;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('My menu');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', array('uri' => '/'));
        $menu->addChild('Offer', array('route' => 'offer'));
        $menu->addChild('Contact', array('uri' => '/'));
        return $menu;
    }

}