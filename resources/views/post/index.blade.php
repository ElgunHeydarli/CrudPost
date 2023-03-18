<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <h1 style="text-align: center;">Post emeliyyati</h1>
<div class="container">
    <a class="btn btn-success" href="{{route('post.create')}}">Əlavə et</a>

    <div class="row mt-5">
   <table class="table">
       <thead>
       <tr>
           <th scope="col">ID</th>
           <th scope="col">Title</th>
           <th scope="col">Content</th>

           <th scope="col">Action</th>
       </tr>
       </thead>
       <tbody>


       @foreach($posts as $post)


           <tr>
               <th scope="row">{{$post->id}}</th>
               <td>{{$post->title}}</td>
               <td>{{$post->content}}</td>

               <td>
                   <a class="btn btn-primary" href="{{route('post.edit', $post->id)}}">Redakt et</a>

                   <form action="{{route('post.delete', $post->id)}}" method="post">
                       @csrf
                       @method('DELETE')
                       <button onclick="return confirm('silmək isdədiyinizdən əminsinizmi?')"   type="submit" class="btn btn-danger">Sil</button>

                   </form>
  </td>
           </tr>


       @endforeach



       </tbody>
   </table>
    </div>
</div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
