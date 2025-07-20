<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url('/')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{url('category')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('post')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('about-us')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('contact-us')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('privacy-policy')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('advertisement')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{url('quick-links')}}</loc>
        <lastmod>2023-07-25T19:12:31+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    {{-- category sitemape section start --}}
    @foreach ($categorys as $category)
    <url>
        <loc>{{ url('category/' . $category->slug) }}</loc>
        <lastmod>{{ $category->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <priority>0.80</priority>
    </url>
    @endforeach
    {{-- category sitemape section end --}}
    {{-- posts sitemape section start --}}
    @foreach ($posts as $post)
    <url>
        <loc>{{ url('post/' . $post->slug) }}</loc>
        <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <priority>1.00</priority>
    </url>
    @endforeach
    {{-- posts sitemape section end --}}
</urlset>
