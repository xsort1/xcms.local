@extends('body')

@section('centerbox')
    <div class="column column-3-4">
        <div class="blog clearfix">
            <div class="post single">
                <ul class="post-details">
                    <li class="date template-calendar">@include('partials.date',['date'=>$data->created_at])</li>
                    <li class="template-eye">{{ $data->views }}</li>
                    <!--<li class="template-bubble"><a href="#comments-list" class="scroll-to-comments" title="5 Comments">5</a></li>-->
                </ul>
                <div class="post-content">
                    @if ($data->getMainPhoto() !== null)

                        <img src="{!!  URL::to('uploaded/'.$data->getMainPhoto()) !!}" width="100%" alt="{{ $data->name }}">

                    @endif
                    <ul class="post-content-details clearfix post-info">
                        @foreach($data->tags as $tag)
                            <li>
                                <a href="{!!  URL::to('tags/' . $tag->id) !!}" title="{{ $tag->name }}">{{ $tag->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h2 class="box-header align-left" style="text-transform: uppercase;">{{ $data->name }}</h2>
                    <p>{!! $data->description !!}</p>
                </div>
            </div>
        </div>

        <div class="row page-margin-top">
            <h3 class="box-header" style="margin-bottom: 70px; font-family: 'Open Sans', sans-serif;">ОСТАВЬТЕ КОММЕНТАРИЙ</h3>

            <div id="hypercomments_widget"></div>
            <script type="text/javascript">
                _hcwp = window._hcwp || [];
                _hcwp.push({widget:"Stream", widget_id: 73772});
                (function() {
                    if("HC_LOAD_INIT" in window)return;
                    HC_LOAD_INIT = true;
                    var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                    var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                    hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/73772/"+lang+"/widget.js";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hcc, s.nextSibling);
                })();
            </script>
            <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>
        </div>
    </div>

@stop