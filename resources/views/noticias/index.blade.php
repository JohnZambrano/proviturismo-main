@extends('layouts.myappCF')

@section('content')
<div class="container">
    <h1 class="title">📢 Lista de Noticias publicadas🍣</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($noticias->isEmpty())
        <p>No hay publicaciones.</p>
    @else
        <div class="card-container">
            @foreach ($noticias as $noticia)
                <div class="card">
                    @if ($noticia->imagen)
                        <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="Imagen del restaurante">
                    @else
                        <img src="https://via.placeholder.com/400x200" alt="Sin imagen">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                        <p><strong>Noticia:</strong> {{ Str::limit($noticia->descripcion, 1000, '...') }}</p>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="actions d-flex gap-2 align-items-center">
                            <button id="likeButton" class="like-button">
                            ❤️ Like <span id="likeCount" class="like-count">91</span>
                            </button>
                            @can('editar-noticia')
                             <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-primary">Editar</a>
                            @endcan
                            @can('borrar-noticia')
                            <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta publicación de noticias?')">Eliminar</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $noticias->links() }}
        </div>
    @endif

    
</div>
@can('crear-noticia')
<a href="{{ route('noticias.create') }}" class="btn">➕ Crear publicación de noticia</a>
@endcan

<script>
document.querySelectorAll('.like-btn').forEach(button => {
    button.addEventListener('click', function() {
        const noticeId = this.dataset.id;
        const isLiked = this.dataset.liked === 'true';
        
        fetch(`/restaurantes/${noticeId}/like`, {
            method: isLiked ? 'DELETE' : 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                this.dataset.liked = !isLiked;
                this.querySelector('.like-count').textContent = data.likesCount;
                this.querySelector('i').style.color = isLiked ? '#6c757d' : '#dc3545';
                this.classList.toggle('btn-outline-primary', isLiked);
                this.classList.toggle('btn-danger', !isLiked);
            }
        });
    });
});
</script>
    
@endsection