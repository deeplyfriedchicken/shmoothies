@extends('admin/master')
@section('main')

  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Shmoothies Pending Admins
          <small>Approve or Deny a user</small>
        </h3>
      </div>
    </div>
    <div class="box">
      <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Date Posted</th>
                  <th>Views</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                @foreach($blogs as $blog)
                <tr>
                  <td>{{ $blog->id }}</td>
                  <td>{{ $blog->blog_title }}</td>
                  <td>{{ $blog->date_posted->format('F j, Y') }}</td>
                  <td>{{ $blog->blog_views }}</td>
                  <td>{{ $blog->heading }}</td>
                  <td><a href="edit/{{ $blog->id }}" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
  </div>
@endsection
