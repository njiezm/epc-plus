@props(['steps', 'currentStep'])

<div class="mb-8">
    <div class="flex items-center justify-between">
        @foreach($steps as $index => $step)
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full flex items-center justify-center {{ $index <= $currentStep ? 'bg-orange-500 text-white' : 'bg-slate-200 text-slate-500' }}">
                    {{ $index + 1 }}
                </div>
                <span class="ml-2 text-sm {{ $index <= $currentStep ? 'text-orange-500 font-bold' : 'text-slate-500' }}">
                    {{ $step }}
                </span>
            </div>
            @if($index < count($steps) - 1)
                <div class="flex-1 h-1 mx-4 {{ $index < $currentStep ? 'bg-orange-500' : 'bg-slate-200' }}"></div>
            @endif
        @endforeach
    </div>
</div>