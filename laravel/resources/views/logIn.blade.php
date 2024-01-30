<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="formino">
        <div>
            <form action="{{route('fumetti.store')}}" method="POST">
                @csrf 
                <div class="mb-3">
                  <label for="titolo" class="form-label">titolo</label>
                  <input type="text" class="form-control" id="titolo" name="titolo">
                </div>

                <div class="mb-3">
                  <label for="autore" class="form-label">autore</label>
                  <input type="text" class="form-control" id="autore" name="autore">
                </div>

                <div class="mb-3">
                    <label for="casa_editrice" class="form-label">casa_editrice</label>
                    <input type="text" class="form-control" id="casa_editrice" name="casa_editrice">
                </div>

                <div class="mb-3">
                  <label for="copertina" class="form-label">copertina</label>
                  <input type="text" class="form-control" id="copertina" name="copertina">
                </div>

                <div class="mb-3">
                    <label for="genere" class="form-label">genere</label>
                    <input type="text" class="form-control" id="genere" name="genere">
                  </div>
  

                <div class="mb-3">
                    <label for="oscar" class="form-label">oscar</label>
                    <input type="text" class="form-control" id="oscar" name="oscar">
                </div>
  
                <div class="mb-3">
                    <label for="anno" class="form-label">anno</label>
                    <input type="text" class="form-control" id="anno" name="anno">
                </div>
  
    
                
           
                <button type="submit" class="btn btn-primary">INVIA</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<style>
    .formino>div{
        width: 50%;
    }
    .formino{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>