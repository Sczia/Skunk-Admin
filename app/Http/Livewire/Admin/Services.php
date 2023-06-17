<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceSize;
use Livewire\Component;

class Services extends Component
{
    public $add = false;
    public $done = false;
    public $services;
    public $name, $service_id;
    public $price;
    public $size;

    public function add()
    {
        if ($this->add) {
            $this->add = false;
            $this->services = Service::all();
        } else {
            $this->add = true;
            $this->services = collect();
        }
    }

    public function addService()
    {
        try {
            if ($this->add) {
                $this->validate([
                    'name' => 'required',
                    'price' => 'required',
                    'size' => 'required'
                ]);
                $service_id =  Service::create([
                    'service' => $this->name,
                ])->id;
                ServiceSize::create([
                    'service_id' => $service_id,
                    'price' => $this->price,
                    'size' => $this->size
                ]);
                $this->done = true;
            } else {
                $this->validate([
                    'service_id' => 'required',
                    'price' => 'required',
                    'size' => 'required'
                ]);

                $sizes = ServiceSize::with('service')->where('service_id', $this->service_id)->where('size',$this->size)->get();
                if ($sizes->count() > 0) {
                    $this->addError('size', 'duplicate');
                } else {
                    $this->resetErrorBag();

                    ServiceSize::create([
                        'service_id' => $this->service_id,
                        'price' => $this->price,
                        'size' => $this->size
                    ]);
                    $this->done = true;
                }
            }
            if ($this->done) {
                $this->reset();
                return redirect(request()->header('Referer'))->with('successToast', 'Data created successfully.');
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function mount()
    {
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.admin.services');
    }
}
