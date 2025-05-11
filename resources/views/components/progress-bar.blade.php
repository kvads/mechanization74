<div class="mb-8">
    <div class="flex justify-between mb-2">
        <span class="text-sm font-medium text-primary">Прогресс</span>
        <span class="text-sm font-medium" x-text="`${{{ $currentStep }}}/6`"></span>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="progress-bar bg-primary h-2.5 rounded-full" :style="`width: {{{ $progress }}}%`"></div>
    </div>
</div>
