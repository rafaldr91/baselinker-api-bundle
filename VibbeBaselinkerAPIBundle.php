<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI;


use Vibbe\BaselinkerAPI\DependencyInjection\VibbeBaselinkerAPIBundleExtension;

class VibbeBaselinkerAPIBundle
{
    public function getContainerExtension()
    {
        return new VibbeBaselinkerAPIBundleExtension();
    }
}