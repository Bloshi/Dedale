<ul class='events_list_container' style='padding-left:0;'>
    @foreach($events as $event)
        <li class="ui card fluid">
            <div class="content">
                <div class="right floated meta" style='padding-top:3px'>{{ Date::parse($event->created_at)->diffForHumans() }}</div>
                <img class="ui avatar image" src="{{ asset('images/users/'. $event->createdBy()->userPic()) }}">
                <a href="{{ route('focus_user', ['id' => $event->createdBy()->id]) }}">
                    {{ $event->createdBy()->firstName }} <b>{{ $event->createdBy()->lastName }}</b>
                </a>
            </div>
            
            <div class='content item ui grid'>
                <div class='date_info two wide column' style='padding-left:0'>
                    <div class='sexy_date'>
                        <span class="day">{{ strtoupper(Date::parse($event->date_start)->format('l')) }}</span>
                        <span class="date">{{ Date::parse($event->date_start)->format('j') }}</span>
                        <span class='hour'>{{ Date::parse($event->date_start)->format('H:i') }}</span>
                    </div>
                </div>
                <div class="image four wide column">
                    <img />
                </div>
                <div class="content ten wide column">
                    <a href="{{ route('focus_event', ['id' => $event->id]) }}" class="header">{{ $event->title }}</a>
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
                {{--  <div class='ui right floated right labeled button' style='max-height: 30px'>
                    
                    <a href='#' class='ui mini basic label'>{{ $event->likers($event->id) }}</a>
                </div>  --}}
                <a href="{{ route('focus_event', ['id' => $event->id]) }}" class="ui mini primary button" style='float:right;margin-left:10px'>
                    En savoir plus
                </a>
                <a  href="{{ route('like_this_event', ['id' => $event->id]) }}"
                    class="ui primary button mini basic"
                    style='float:right'>
                    @if ( !$event->AuthHasLiked() )
                        <i class="empty heart icon"></i> 
                        Aimer
                    @else 
                        <i class="heart icon"></i>
                        Ne plus aimer
                    @endif
                </a>

                <i class="comment icon" style='margin-top:5px'></i>
            </div>
        </li>
    @endforeach
</ul>