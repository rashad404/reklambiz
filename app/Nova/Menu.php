<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Resource;

class Menu extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Menu::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'text'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Textarea::make('Text')
                ->alwaysShow(),

            Number::make('Position')
                ->sortable()
                ->rules('required', 'integer'),

            Boolean::make('Status')
                ->trueValue(1)
                ->falseValue(0)
                ->sortable(),

            Number::make('Parent ID')
                ->sortable()
                ->rules('required', 'integer')
                ->help('ID of the parent menu item (0 if this is a top-level menu)')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return [];
    }
}
