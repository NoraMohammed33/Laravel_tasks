@extends('layouts.app')
@section('title')
    All posts from database
@endsection

@section('body')
    <h1> All posts </h1>
    <table class="table">
        <tr> 
            <th> ID</th> 
            <th> Title</th> 
            <th> description</th>
            <th>Posted Py</th>
            <th>Created_at</th>
            <th> Show</th> 
            <th> Edit</th> 
            <th> Delete</th> 
        </tr>
        @foreach($posts as $post)
            <!-- @dump($post) -->
            <tr>
                <td> {{$post->id}}</td> 
                <td> {{$post->title}}</td> 
                <td> {{$post->description}}</td>
                <td> {{$post->postedby}}</td>
                <td> {{$post->created_at}}</td>
                <td>  <a href="{{route('iti.show',$post->id)}}"  class="btn btn-info">  Show</a> </td>
                <td>  <a href="{{route('iti.edit',$post->id)}}"  class="btn btn-warning">  Edit</a> </td>
                <td>
                    <form method="post"  action="{{route('iti.destroy', $post->id)}}">
                        @method('delete')
                        @csrf
                        <input name="_method" class="btn btn-danger" type="hidden" value="Delete">
                        <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
    <td>  <a href="{{route('iti.createPost')}}"  class="btn btn-primary">  Create post</a> </td>
    {{ $posts->links() }}
@endsection

