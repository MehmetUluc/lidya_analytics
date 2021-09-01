<?php

namespace LidyaPos\Analytics;

use LidyaPos\Dashboard\Models\DashboardWidget;
use LidyaPos\Dashboard\Repositories\Interfaces\DashboardWidgetInterface;
use LidyaPos\PluginManagement\Abstracts\PluginOperationAbstract;
use Exception;

class Plugin extends PluginOperationAbstract
{
    /**
     * @throws Exception
     */
    public static function remove()
    {
        $widgets = app(DashboardWidgetInterface::class)
            ->advancedGet([
                'condition' => [
                    [
                        'name',
                        'IN',
                        [
                            'widget_analytics_general',
                            'widget_analytics_page',
                            'widget_analytics_browser',
                            'widget_analytics_referrer',
                        ],
                    ],
                ],
            ]);

        foreach ($widgets as $widget) {
            /**
             * @var DashboardWidget $widget
             */
            $widget->delete();
        }
    }
}
