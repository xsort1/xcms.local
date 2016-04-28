<div class="tab-pane row" id="photos">
    @foreach ($photos as $photo)

        <li>{{ $photo->source }}</li>

    @endforeach
</div>