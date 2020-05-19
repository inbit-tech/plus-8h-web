<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Homepage
	public function home(){
		return view('index');
	}

	//  Contact Us
	public function contact(){
		return view('contact.contact');
	}

	// About Us
	public function about(){
		return view('about.about');
	}

	// Our Services
	public function services(){
		return view('services.services');
	}

	// Our services – E-commerce
	public function commerce(){
		return view('commerce.commerce');
	}

	// Our services - E-commerce - Own Site
	public function ownsite(){
		return view('commerce.ownsite');
	}

	// Our services - E-commerce - Marketplace
	public function marketplace(){
		return view('commerce.marketplace');
	}

	// Our services - E-commerce - Cross boarder
	public function crossboarder(){
		return view('commerce.crossboarder');
	}

	// Our services - Payment solution
	public function payment(){
		return view('payment.payment');
	}

	// Our Insights
	public function insights(){
		return view('insights.insights');
	}
}
