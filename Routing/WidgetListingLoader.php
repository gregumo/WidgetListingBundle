<?php
namespace Victoire\ListingBundle\Routing;


use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

class WidgetListingLoader extends Loader
{
    public function load($resource, $type = null)
    {
        $collection = new RouteCollection();

        $resource = '@VictoireListingBundle/Resources/config/routing.yml';
        $type = 'yaml';

        $importedRoutes = $this->import($resource, $type);

        $collection->addCollection($importedRoutes);

        return $collection;
    }

    public function supports($resource, $type = null)
    {
        return $type === 'victoire';
    }
}