@extends('admin/master')
@section('main')
<div class="col-md-12">
    @if(Session::has('updated-blog'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Shmoo!</h4>
        {{ Session::get('updated-blog') }}
      </div>
    @endif
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Shmoothies Blog Post
          <small>New Blog Post</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Blog Title</label>
                <input class="form-control" type="text" name="title" value="{{ $blog[0]->blog_title }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Sentence Description</label>
                <input type="text" class="form-control" name="heading" value="{{ $blog[0]->heading }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="category">Category (current: {{ $blog[0]->blog_category }})</label>
                <select name="category" class="form-control">
                  @foreach($category as $cate)
                    <option value="{{ $cate }}" @if($cate == $blog[0]->blog_category) selected @endif>{{ ucwords($cate) }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="tags">Tags <span>(separated by commas)</span></label>
                <select id="tags" name="tags[]" class="form-control" multiple="multiple">
                  @foreach ($tagged as $tag)
                    <option value="{{ $tag->tag }}" selected>{{ $tag->tag }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group" style="">
                <label for="media">Cover Photo (current: <a href="{{ URL::asset('img/blog_covers/'.$blog[0]->media_url )}}") target="_blank">{{ $blog[0]->media_url }}</a>)</label>
                <input id="photo" name="photo" type="file">
                <script>
                $( document ).ready(function() {
                  $("#photo").fileinput({'showUpload':false, 'previewFileType':'any'});
                });
                </script>
              </div>
            </div>
          </div>
          <div class="form-group">
          <textarea name="content" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $blog[0]->content }}</textarea>
          </div>
          <button class="btn btn-primary" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('more-scripts')
  <script>
  $("#tags").select2({
    tags: true
  });
  $('.textarea').wysihtml5();
  </script>
@endsection
