@props([
    'type' => 'primary',   
    'label' => null,       
    'href' => null,        
    'action' => null,      
    'method' => 'POST',
    'confirm' => null,    
])

@php
    // Map type directly to icon
    $icons = [
        'back'   => 'arrow_back',
        'edit'   => 'edit',
        'delete' => 'delete',
        'add'    => 'add',
    ];
    $iconName = $icons[$type] ?? null;


    $iconOnly = in_array($type, ['back', 'edit', 'delete']);
@endphp

@if($type === 'delete' && $action)
    <form action="{{ $action }}" method="POST" style="display:inline;" 
    @if($confirm)
      onSubmit="return confirm('Are you sure you want to delete')"
    @endif
      >
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-{{ $type }}">
            @if($iconOnly && $iconName)
                <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
            @elseif($iconName)
                <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
                <span>{{ $label }}</span>
            @else
                <span>{{ $label }}</span>
            @endif
        </button>
    </form>
@elseif($href)
    <a href="{{ $href }}" class="btn btn-{{ $type }}">
        @if($iconOnly && $iconName)
            <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
        @elseif($iconName)
            <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
            <span>{{ $label }}</span>
        @else
            <span>{{ $label }}</span>
        @endif
    </a>
@else
    <button type="{{ $method === 'POST' ? 'submit' : 'button' }}" class="btn btn-{{ $type }}">
        @if($iconOnly && $iconName)
            <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
        @elseif($iconName)
            <span class="material-symbols-outlined btn-icon">{{ $iconName }}</span>
            <span>{{ $label }}</span>
        @else
            <span>{{ $label }}</span>
        @endif
    </button>
@endif