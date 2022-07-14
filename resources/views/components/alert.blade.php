@props([
'heading',
'footer',
])
<div class="bg-{{ $type }} p-2">
<h1>{{ $heading }}</h1>
    {{ $message }} 
    <p>{{ $footer }}</p>
</div>