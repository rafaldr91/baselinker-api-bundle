<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI;


use Symfony\Component\HttpKernel\Bundle\Bundle;
use Vibbe\BaselinkerAPI\DependencyInjection\VibbeBaselinkerAPIBundleExtension;

class VibbeBaselinkerAPIBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new VibbeBaselinkerAPIBundleExtension();
    }
}