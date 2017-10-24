<ul class='events_list_container'>
    @foreach($events as $event)
        <li class="ui card fluid">
            <div class="content">
                <div class="right floated meta" style='padding-top:3px'>{{ $event->whenCreatedForHuman() }}</div>
                <img class="ui avatar image" src="{{ asset('images/users/'. $event->createdBy()->userPic()) }}">
                <a href="{{ route('focus_user', ['id' => $event->createdBy()->id]) }}">
                    {{ $event->createdBy()->firstName }} <b>{{ $event->createdBy()->lastName }}</b>
                </a>
            </div>
            
            <div class='content item ui grid'>
                <div class='date_info three wide column'>
                </div>
                <div class="image three wide column">
                    <img />
                </div>
                <div class="content ten wide column">
                    <a class="header">{{ $event->title }}</a>
                    <div class="meta">
                        <span>Description</span>
                    </div>
                    <div class="description">
                        <p>{{ $event->description }}</p>
                    </div>
                    <div class="extra">
                        Organisation: orga
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="ui mini labeled button right floated" tabindex="0">
                    <a href="{{ route('like_this_event', ['id' => $event->id]) }}" class="ui red button">
                        @if ( !$event->AuthHasLiked() )
                            <i class="empty heart icon"></i> 
                            Aimer
                        @else 
                            <i class="heart icon"></i>
                            Ne plus aimer
                        @endif
                    </a>
                    <a class="ui basic red left pointing label">
                        
                    </a>
                </div>
                
                <i class="comment icon"></i>
            </div>
        </li>
    @endforeach
</ul>