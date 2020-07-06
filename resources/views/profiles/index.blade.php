@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
            <img src="https://instagram.fdps5-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fdps5-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=O8ihOWxGCZ0AX8-RDlw&oh=ed7b86df2cb2a37bd0811490a78d5aed&oe=5F2B1EE7" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>771</strong> followers</div>
                <div class="pr-4"><strong>670</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title  }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
