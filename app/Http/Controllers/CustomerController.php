<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;
use App\Services\AddressService;
use App\Entities\CustomerEntity;
use Exception;
use Auth;

class CustomerController extends Controller
{
	/**
	 * @var $service
	 */
	protected $service;

    /**
     * @var $addressService
     */
    protected $addressService;

	/**
	 * load class instance
	 * @param LeadService $service
	 */
    public function __construct(CustomerService $service, AddressService $addressService)
    {
    	$this->service = $service; 
        $this->addressService = $addressService; 
    }

    public function index(Request $request)
    {
    	# all leads list where user status active.
    	$leads = $this->service->getLeads($request->all());

    	# return view.
    	return view('dashboard.pages.customer', [
    		'leads' => $leads,
    	]); 
    }

    public function addCustomer(Request $request)
    {
        return view('dashboard.pages.customer-add');
    }

    /**
     * customer create
     * @param  $request
     * @param  CustomerEntity $entity
     * @return return view.
     */
    public function storeCustomer(Request $request, CustomerEntity $entity)
    {
        try {
            $inputs = $request->all();
            $entity = $entity->setEntities($inputs)->setUserId(Auth::user()->id); 
            $customer = $this->service->create($entity);
            $addressEntity = $entity->setAddressEntity($inputs)
                                    ->setCustomerId($customer->id);
            $address = $this->addressService->create($addressEntity);

            return view('dashboard.pages.customer-add')
                        ->with('success', 'Customer Added Successfully.');
        
        } catch (Exception $e) {

            $message = trans('messages.user.duplicate');
            return redirect()->back()->with('error', $message);
        }
    }
}