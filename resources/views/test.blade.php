<h1> {{ $content }} - {{ !empty( request()->age ) ? (request()->age) : 'khong co gi'}}<h1>
<h2> {{ $name }}</h2>
@for( $i = 1; $i <= 10; $i++ )
    <li>{{ $i }}</li>
@endfor

@while($id < 10)
    <li> {{ $id }} </li>
    @php
        $id++;
    @endphp
@endwhile

<ul>
@foreach( $girl as $key => $g)
    <li> {{ $g }} - {{ $key }}</li>
@endforeach
</ul>

@forelse($girl as $g)
    <p> Phan tu : {{ $g }}</p>
@empty
    <p>Khong co phan tu nao </p>
@endforelse
