@props(['testimonial'])

<div class="testimony-card">
    <div class="flex items-center mb-4">
        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4">
        <div>
            <h4 class="font-bold">{{ $testimonial['name'] }}</h4>
            <p class="text-xs text-slate-500">{{ $testimonial['location'] }}</p>
        </div>
    </div>
    <p class="text-sm text-slate-600 italic">{{ $testimonial['content'] }}</p>
    <div class="flex mt-4 text-orange-400">
        @for($i = 1; $i <= 5; $i++)
            <i class="fas fa-star"></i>
        @endfor
    </div>
</div>