<?php

class HomeController extends BaseController 
{

	/** 
	 * Method to display home page
	 *
	 * @param null
	 * @return response
	 */
	public function index()
	{		
		return View::make('home.home');
	}


	/** 
	 * Method to display about page
	 *
	 * @param null
	 * @return response
	 */
	public function about()
	{		
		return View::make('home.about');
	}


	/** 
	 * Method to display testimonials page
	 *
	 * @param null
	 * @return response
	 */
	public function testimonials()
	{		
		return View::make('home.testimonials');
	}


	/** 
	 * Method to display latestnews page
	 *
	 * @param null
	 * @return response
	 */
	public function latestnews()
	{		
		return View::make('home.latestnews');
	}

}
