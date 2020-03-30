<?php

namespace App\Nova;

use App\Exceptions\Handler;
use App\Models\Location;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use App\User as UserModel;
use App\Models\Country as Country;
use App\Models\State as States;
use App\Models\Location as Locations;
use Orlyapps\NovaBelongsToDepend\NovaBelongsToDepend;


class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\User';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),


            Text::make('First Name', 'firstName')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Last Name', 'lastName')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            Text::make('Fargo Rating', 'fargo')
                ->sortable()
                ->rules('nullable'),

            Select::make('9 Ball Skill Level', 'fargoAlt')->options(
                [
                    'professional' => 'A+++ Professional',
                    'semipro' => 'A++ Semi Professional',
                    'advAmateur+' => "A+ Advanced Amateur",
                    'advAmateur' => 'A Advanced Amateur',
                    'openAmateur' => 'B Open Amateur',
                    'intermediateAmateur' => "C - D Amateur",
                ]
            ),
            Text::make('Street Address', 'streetAddress')
                ->rules('required', 'max:255')
                ->onlyOnForms(),

            Text::make('City', 'city')
                ->rules('required', 'max:255'),

            Select::make('Country')->options(Country::pluck('country_name', 'country_code'))
            ->rules('required'),

            Select::make('State', 'state')->options(States::pluck('name', 'short_name'))
            ->rules('required'),
            Text::make('zip')
            ->rules('required'),
            Select::make("Location")->options(Locations::pluck('name', 'name'))
            ->rules('required')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
