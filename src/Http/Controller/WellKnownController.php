<?php namespace Finnito\WellKnownModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

/**
 * Class WellKnownController
 *
 * @link          https://finnito.nz/
 * @author        Finn LeSueur <finn.lesueur@gmail.com>
 */
class WellKnownController extends PublicController
{

    /**
     * Return a redirect to the change-password URL.
     *
     * @param  SettingRepositoryInterface $settings
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function changePassword(SettingRepositoryInterface $settings)
    {
        return redirect($settings->value("finnito.module.well_known::change_password"));
    }
}
