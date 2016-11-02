

<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
    <channel>
        <title>MOTONET</title>
        <link>http://www.motonet.com.ar</link>
        <description>Publicaciones de Motonet</description>

        @foreach($products as $product)
        <item>
            <g:id>{!!$product->id !!} </g:id>
            <g:title>{!!$product->title !!} </g:title>
            <g:description>{!! \Illuminate\Support\Str::lower($product->models->name)!!} </g:description>
            <g:google_product_category>{!!$product->models->name!!} </g:google_product_category>
            @foreach($product->models->categories as $category)
                <g:product_type>  {!! $category->name !!}  </g:product_type>
            @endforeach
            <g:link>http://www.motonet.com.ar/producto/{!! $product->models->name !!}/{!! $product->id !!}</g:link>
            <g:image_link>http://www.motonet.com.ar/{!! $product->models->images->first()->image !!}</g:image_link>
            <g:condition>new</g:condition>
            <g:availability>in stock</g:availability>
            <g:price>{!!  $product->price !!}</g:price>
            <g:brand>{!!  $product->models->brands->name !!}</g:brand>
        </item>
        @endforeach


    </channel>
</rss>
