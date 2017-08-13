<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <h1>Search Users</h1>
        <form>
          <div class="form-group">
              <label>Search</label>
              <input type="text" class="form-control" id="search-box">
          </div>
        </form>
        <p>suggestions: <span id="output"></span></p>
      </div>
      <script type="text/javascript">
        var searchBox = document.querySelector('#search-box');
        var output = document.querySelector('#output');
        searchBox.addEventListener('keyup', function(e){
              var str = searchBox.value;
              if(str){
                // AJAX REQUEST to search the suggest page and display it in output
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                  if(this.readyState === 4 && this.status === 200){
                    output.textContent = this.responseText;
                  }
                }
                xmlhttp.open('GET', 'suggest.php?q=' + str, true );
                xmlhttp.send();

              }else{
                output.textContent = "";
              }
        });
      </script>
  </body>
</html>
