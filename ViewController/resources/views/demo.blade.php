{{-- @for ($i = 2; $i <= $n; $i++)
    <p>Value of i = {{$i}}</p>
@endfor --}}

{{-- @foreach($users as $user)
    <p>{{ $user['name'] }}</p>
@endforeach --}}

{{-- @php
    foreach($users as $user) {
        echo $user['name'], '<br>';
    }
@endphp --}}

@include('inc.comment', ['title' => 'Comment bài viết'])
