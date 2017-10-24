<div class="ui mini modal open_followers_list">
    @if (!$isAuthUserPage)
        <div class="header">Abonné(s) de {{ $user->firstName }} {{ $user->lastName }}</div>
    @else 
        <div class="header">{{ $howManyFollowers > 1 ? 'Vos abonnés' : 'Votre abonné(e)' }}</div>
    @endif
    <div class='list_follower scrolling content'>
        <div class="ui list">
            @foreach($followers as $follower)
                <div class='item fluid'>
                    <img class="ui avatar image"
                        src="{{ asset('images/users/'. $follower->userPic()) }}"
                        alt="{{ $follower->firstName }} {{ $follower->lastName }} | Playpal"
                    />
                    <div class='content'>
                        <a href="{{ route('focus_user', ['id' => $follower->id]) }}">{{ $follower->firstName }} {{ $follower->lastName }}</a>
                    </div>
                    <a href="{{ route('follow_this_user', ['id' => $follower->id]) }}" class="mini primary ui button right floated">Suivre</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">Ok</div>
    </div>
</div>