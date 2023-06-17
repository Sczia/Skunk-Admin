<?php

namespace App\Http\Livewire\Admin;

use App\Models\Car;
use App\Models\Clients;
use App\Models\Record;
use App\Models\Service;
use App\Models\ServiceSize;
use Livewire\Component;

class ClientRecord extends Component
{
    public $part = 1;
    public $choice = "";
    public $clients;
    /* New */
    public $name, $email, $phone, $address, $company_name;
    /* Old */
    public $client_id, $car_id, $service_id, $size_id, $cars, $services, $sizes;

    /* car */
    public $car_company_name, $car_model, $car_plate_number;


    public $addCar = false;
    protected $rules = [];

    public function userChoice($choice)
    {
        $this->choice = $choice;
        $this->part++;
        if ($this->choice === "old") {
            $this->clients = Clients::where('type', '=', 'old client')->get();
            $this->services = Service::all();
        }
    }

    private function appendRules($rules)
    {
        $this->rules = $rules;
    }
    public function updatingClientId($value)
    {
        $this->cars = Car::where('client_id',$value)->get();
        if (!$this->cars) {
            $this->cars = collect();
        }
    }
    public function updatingCarId($value)
    {
        if ($value === "Add") {
            $this->addCar = true;
        }else{
            $this->addCar = false;

        }

    }
    public function updatingServiceId($value)
    {
        $this->sizes = ServiceSize::where('service_id', $value)->get();
    }
    public function addRecord($choice)
    {
        try {
            if ($choice === "new") {
                $this->appendRules([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'phone' => 'required|string',
                    'address' => 'required|string',
                    'company_name' => 'required|string',

                    'car_company_name' => 'required|string',
                    'car_model' => 'required|string',
                    'car_plate_number' => 'required|string',
                ]);
                $this->validate($this->rules);
                $user_id = Clients::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'company' => $this->company_name,
                    'address' => $this->address,
                    'number' => $this->phone,
                    'type' => "new client",
                ])->id;
                Car::create([
                    'client_id' => $user_id,
                    'vehicle' => $this->car_company_name,
                    'model' => $this->car_model,
                    'plate_number' => $this->car_plate_number,
                ]);

            }
            if ($choice === "old") {
                $rules = [
                    'client_id' => 'required',
                    'car_id' => 'required',
                    'service_id' => 'required',
                    'size_id' => 'required',
                ];
                if ($this->addCar) {
                    $rules = [
                        'client_id' => 'required',
                        'car_id' => 'required',

                        'car_company_name' => 'required|string',
                        'car_model' => 'required|string',
                        'car_plate_number' => 'required|string',


                        'service_id' => 'required',
                        'size_id' => 'required',
                    ];
                }
                $this->validate($rules);
                $car_id = $this->car_id;
                if ($this->addCar) {
                    $car_id =  Car::create([
                        'client_id' => $this->client_id,
                        'vehicle' => $this->car_company_name,
                        'model' => $this->car_model,
                        'plate_number' => $this->car_plate_number,
                    ])->id;
                }
                Record::create([
                    'car_id' => $car_id,
                    'client_id' => $this->client_id,
                    'service_id' => $this->service_id,
                    'size_id' => $this->size_id,
                ]);
            }
            $this->reset();
            return redirect(request()->header('Referer'))->with('successToast', 'Data created successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function mount()
    {
        $this->cars = collect();
        $this->sizes = collect();
    }
    public function render()
    {
        return view('livewire.admin.client-record');
    }
}
