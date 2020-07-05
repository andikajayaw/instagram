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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>19</strong> posts</div>
                <div class="pr-4"><strong>771</strong> followers</div>
                <div class="pr-4"><strong>670</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title  }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row justify-content-center pt-4">
        <div class="col-4">
            <img src="https://instagram.fcgk25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/81227218_569504600423881_5002898419900133500_n.jpg?_nc_ht=instagram.fcgk25-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=71wwHXBqPbQAX88T6Xm&oh=ea7e1126207df4a0682313c719ed9447&oe=5F111643" alt="1" class="w-100 pt-4">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/103491569_2731789523717671_2283239598610367560_n.jpg?_nc_ht=instagram.fcgk25-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=kpAOwpOXVEMAX-Irxyl&oh=c1de6f419a931e802a9e766355a11639&oe=5F128485" alt="1" class="w-100 pt-4">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk25-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/103186636_264985311250138_8208966331772493100_n.jpg?_nc_ht=instagram.fcgk25-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=m57SpCey_CMAX_d5MKK&oh=9f4ff33db884c18a7e85ba48ca063bf7&oe=5F0FF302" alt="1" class="w-100 pt-4">
        </div>
    </div>
</div>
@endsection
