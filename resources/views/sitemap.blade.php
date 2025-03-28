{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach([
        '/',
        '/about/index',
        '/about/planes',
        '/about/municipio',
        '/servicios/servicios',
        '/servicios/hoteles'
    ] as $url)
    <url>
        <loc>{{ url($url) }}</loc>
        <lastmod>2025-03-29T00:52:53Z</lastmod>
        <changefreq>{{ in_array($url, ['/', '/servicios/servicios', '/servicios/hoteles']) ? 'weekly' : 'monthly' }}</changefreq>
        <priority>{{ $url === '/' ? '1.0' : (str_contains($url, 'servicios') ? '0.9' : '0.8') }}</priority>
    </url>
    @endforeach
</urlset>