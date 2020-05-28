<?php

namespace Xilouet\Laraxel\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
	 * Change this for new package.
	 *
	 * @var string
	 */
    private $packageName = 'laraxel';

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
    protected $defer = false;
    
	public function boot()
	{   
        
	}

	public function register()
	{
        
	}
}
