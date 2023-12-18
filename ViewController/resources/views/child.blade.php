@extends('layouts.app')

@section('title', 'Tiêu đề trang child')

@section('content')
    <p>
        Nội dung trang con
    </p>

    @isset($post_title)
        <p>Tiêu đề: {{ $post_title }}</p>
    @endisset

    @empty($users)
        <p>Không có user nào!</p>
    @endempty

{{-- 
    <p>
        Họ và tên: {!! $data !!}
    </p> --}}
    @if($data % 2 == 0)
        <p>{{$data}} là số chẳn</p>
    @else
    <p>{{$data}} là số lẻ</p>
    @endif
@endsection
    
@section('sidebar')
    @parent
    <p>
        Sidebar trang con
    </p>
@endsection
