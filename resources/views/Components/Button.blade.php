@php 
   $icons = [
      'add'    => 'add',
      'edit'   => 'edit',
      'delete' => 'delete',
     
   ];
   $icon = $icons[$type] ?? null;
@endphp
@if($type === 'delete' && isset($action))
    <form action="{{ $action }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-{{ $type }}">
            @if($icon)
                <span class="material-symbols-outlined btn-icon">{{ $icon }}</span>
            @endif
            <span>{{ $label ?: 'Delete' }}</span>
        </button>
    </form>
@else
    <a href="{{ $href }}" class="btn btn-{{ $type }}">
        @if($icon)
            <span class="material-symbols-outlined btn-icon">{{ $icon }}</span>
        @endif
        <span>{{ $label }}</span>
    </a>
@endif
