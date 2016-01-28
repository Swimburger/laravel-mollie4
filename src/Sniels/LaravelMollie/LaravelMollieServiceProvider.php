<?php namespace Sniels\LaravelMollie;

use Illuminate\Support\ServiceProvider;

class LaravelMollieServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot(){
		$this->package('sniels/laravel-mollie');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mollie'] = new MollieApiClientManager;
	}


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['mollie'];
	}

}
