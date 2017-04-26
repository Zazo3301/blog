<!DOCTYPE html>

<h1>
    {{ $post->title }}
</h1>
<p class="lead">
    {{$post->body}}
</p>
<p>created at:
    {{ $post->created_at }}
</p>
<p>
    updated at:
    {{ $post->updated_at }}
</p>
<p>
    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
    {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
</p>