<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
        
    </head>
    <body class="antialiased">
            <nav class="navbar bg-dark ">
                    <h1 class=" h2" >&nbsp;&nbsp; <a class="text-decoration-none " href="/">home </a> </h2>
            </nav>
            <div class="row">
                    <div class="col-md-2"> side bare
                            <div id="list-example" class="list-group">
                                    <a class="list-group-item list-group-item-action" href="/">Lister</a>
                                    <a class="list-group-item list-group-item-action" href="create">Ajouter</a>
                                    <a class="list-group-item list-group-item-action" href="max">plus agé</a>
                                    <a class="list-group-item list-group-item-action" href="min">plus jeune</a>
                                   </div>
                    </div>
                    <div class="col-md-10">
        
                    <h1> {{$header}}</h1>
                        <br>
                            <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Prenon</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">date de N.</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Action</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                          
                                      <th scope="row">{{ $table[0]}}</th>
                                          <td>{{ $table[1]}}</td>
                                          <td>{{ $table[2]}}</td>
                                          <td>{{ $table[3]}}</td>
                                          <td>{{ $table[4]}}</td>
                                          <td>{{ $table[5]}}</td>
                                          <td>
                                              <a class="btn btn-primary " href="edit/{{ $table[0]}}"> Modifier</a>
                                              <a class="btn btn-danger " href="supprimer/{{ $table[0]}}"> Supprimer</a>
                                          </td>
                                        </tr>
                                         
                                        
                                     
                                       
                                    </tbody>
                                  </table>
                           
        
                    </div>
        
                </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    </body>
</html>
