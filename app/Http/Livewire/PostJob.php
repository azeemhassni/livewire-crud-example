<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class PostJob extends Component
{
    /**
     * @var Job
     */
    public $job;

    public $name;
    public $body;

    public function mount()
    {
        if($this->job) {
           $this->name = $this->job->name;
           $this->body = $this->job->body;
        }
    }

    public function render()
    {
        return view('livewire.post-job');
    }

    public function store()
    {
        Job::create([
            'name' => $this->name,
            'body' => $this->body
        ]);

        return redirect()->to('/jobs');
    }


    public function update()
    {
        if(!$this->job) {
            // throw exception or show error, job not found.
            return;
        }

        // Update the Job
        $this->job->update([
            'name' => $this->name,
            'body' => $this->body,
        ]);

        return redirect()->to("/jobs/{$this->job->id}");
    }
}
