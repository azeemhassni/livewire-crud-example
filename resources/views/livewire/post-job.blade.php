<div>
    <form action="javascript:;">
       <div>
           Name: <br />
           <input wire:model="name" type="text" name="name">
       </div>
       <div>
           Body: <br />
           <textarea wire:model="body" name="body"></textarea>
       </div>
        @if($job)
            <button wire:click.prevent="update">Update</button>
        @else
            <button wire:click.prevent="store">Save</button>
        @endif
    </form>
</div>

@livewireScripts
