
    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('💔', ['class' => "btn btn-warnig btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('❤', ['class' => "btn btn-warning btn-xs"]) !!}
            
            
        {!! Form::close() !!}
    @endif
