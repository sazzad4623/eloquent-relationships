<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Eloquent Relationship</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
        <diV class="col-sm-12">

<h2 class="text-center my-3">Eloquent Relationships</h2>
<table class="table table-bordered">
    {{-- <thead>
        <tr>
            <th>Post</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
        <tr>
            <td>{{$post->title}}</td> --}}
            {{-- <td>
                @foreach($post->comments as $comment)
                {{$comment->comment}}
                @endforeach
            </td> --}}
            {{-- <td>
                @foreach($post->categories as $category)
                {{$category->name}}
            @endforeach
            </td>
        </tr>
        @endforeach

    </tbody> --}}

    {{-- <thead>
        <tr>
            <th>Comments</th>
            <th>Post</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment )
        <tr>
            <td>{{$comment->comment}}</td>
            <td>
               {{$comment->post->title}}
            </td>
        </tr>
        @endforeach

    </tbody> --}}


{{-- Has One Through --}}

<thead>
    <tr>
        <th>Mechanic</th>
        <th>Car Model</th>
        <th>Car Owner</th>
    </tr>
</thead>
<tbody>
    @foreach ($mechanics as $mechanic )
    <tr>
        <td>{{$mechanic->name}}</td>

        <td>{{$mechanic->car->model}}</td>
        <td>{{$mechanic->carOwner->name}}</td>
    </tr>
    @endforeach

</tbody>



</table>
        </div> </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
