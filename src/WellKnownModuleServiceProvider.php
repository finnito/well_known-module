<?php namespace Finnito\WellKnownModule;

use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class WellKnownModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        "admin/well_known/" =>  "Finnito\WellKnownModule\Http\Controller\Admin\ConfigurationController@index",
    ];

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router, SettingRepositoryInterface $settings)
    {
        $wellKnownSettings = $settings->findAllByNamespace("finnito.module.well_known");

        foreach ($wellKnownSettings as $key => $setting) {
            if ((strpos($key, "enabled") !== false) & ($setting->value)) {
                /**
                 * Transform the link key:
                 * "finnito.module.well_known::change_password_enabled"
                 * into
                 * "change_password"
                 */
                $truncatedLinkKey = str_replace("_enabled", "", explode("::", $key)[1]);

                /**
                 * Make the /.well-known/{url}
                 * e.g. /.well-known/change-password
                 */
                $wellKnown = "/.well-known/" . kebab_case($truncatedLinkKey);

                /**
                 * Transform $truncatedLinkKey into
                 * it's camelCase self.
                 * e.g. changePassword
                 */
                $controllerFunction = camel_case($truncatedLinkKey);

                $router->any(
                    $wellKnown,
                    ["uses" => "Finnito\WellKnownModule\Http\Controller\WellKnownController@{$controllerFunction}"]
                );
            }
        }
    }
}
