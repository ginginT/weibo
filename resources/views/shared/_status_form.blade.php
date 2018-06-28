<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea style="border: 1px solid #df65ff" name="content" class="form-control" rows="3" placeholder="聊聊新鲜事儿...">{{ old('content') }}</textarea>
    <button style="background-color: #e961e9;" type="submit" class="btn btn-primary pull-right">发布</button>
</form>