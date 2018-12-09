<?php namespace Finnito\WellKnownModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SettingsModule\Setting\Form\SettingFormBuilder;

/**
 * Class WellKnownController
 *
 * @link          https://finnito.nz/
 * @author        Finn LeSueur <finn.lesueur@gmail.com>
 */
class ConfigurationController extends AdminController
{

    /**
     * Return a rendered settings form builder.
     *
     * @param  SettingFormBuilder $settings
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SettingFormBuilder $settings)
    {
        return $settings->render("finnito.module.well_known");
    }
}
