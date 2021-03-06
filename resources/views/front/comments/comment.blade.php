<div class="card-footer card-comments" style="margin-top: 20px;">
    <div class="card-comment" style="margin-left: -20px;">
        <img class="img-circle img-sm" src="/upload/users/{{$comment->user->avata}}" alt="User Image">
        <div class="comment-text">
            <span class="username">
                {{ $comment->user->name }}
                <span class="text-muted">{{ ucfirst (utf8_encode ($comment->created_at->formatLocalized('%A %d %B %Y, %I:%M:%S %p'))) }}
                </span>
                @if(Auth::check() && Auth::user()->name == $comment->user->name)
                    <a href="#" class="fa fa-cog text-muted float-right" style="margin-top: 10px; margin-right: -20px;" data-toggle="dropdown"></a>
                    <div class="dropdown-menu text-center" style="font-size: 14px;">
                        <a class="dropdown-item border-bottom deletecomment" href="javascript:void(0)"><span class="fa fa-trash "> Delete</a>
                       <form action="{{ route('front.comments.destroy', [$comment->id]) }}" method="POST" class="hide">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <a class="dropdown-item editcomment"  id="comment-edit{!! $comment->id !!}" href="#"><span class="fa fa-pencil" ></span> Edit</a>
                    </div>
                @endif
            </span>
            <!-- /.username -->
            <p id="cmt_content{!! $comment->id !!}">{{ $comment->content_cmt }}</p>
            <a href="#" class="link-black text-sm"><i class="fa fa-reply mr-1"></i> Reply </a> |
            <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like (10)</a>
            @if($comment->parent_id == null)
                <div class="card-footer">
                    <img class="img-fluid img-circle img-sm" src="/upload/users/{{$comment->user->avata}}" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                        <input type="text" class="form-control form-control-sm" onclick="submitChildComment({{ $comment->id}})" placeholder="Press enter to post comment" name="message{{ $comment->id }}" id="child-comment{{ $comment->id }}" placeholder="@lang('Your Reply')"  required>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>