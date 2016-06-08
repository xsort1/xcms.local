<li>
    @if ($n->getMainPhoto() !== null)
    <a href="{!!  URL::to('news/' . $n->slug) !!}" title="{{ $n->name }}" class="post-image">
        <img src="{!!  URL::to('uploaded/thumbs/'.$n->getMainPhoto()) !!}" height="90px" width="90px" alt="{{ $n->name }}">
    </a>
    @endif
    <div class="post-content">
        <a href="{!!  URL::to('news/' . $n->slug) !!}" title="{{ $n->name }}">{{ $n->name }}</a>
        <ul class="post-details">
            <li class="date">@include('partials.date2',['date'=>$n->created_at])</li>
        </ul>
    </div>
</li>