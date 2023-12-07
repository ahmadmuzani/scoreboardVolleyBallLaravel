<div class="flex flex-col items-center justify-center">
    <div>
        <button wire:click="increment" class="bg-green-500 btn">&plus;</button>
        <button wire:click="decrement" class="bg-red-500 btn">&minus;</button>
        <span class="font-bold ml-4" wire:transition.fade>{{ $count }}</span>
    </div>

    <div class="mt-16 w-1/2 flex items-center">
        <button wire:click="toggle" class="btn bg-purple-500">Show Secret</button>
        @if($isOpen)
            <span class="ml-4 font-semibold" wire:transition.fade>This was hidden, but now it's shown.</span>
        @endif
    </div>
</div>