<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
        <div id="rss-fitria" class="row mt-5"></div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let text = ""
        const rssFitria = document.querySelector("#rss-fitria");
        axios("http://127.0.0.1:8001/data").then( res => {
          let data = res.data;
          
          data.forEach(element => {
            rssFitria.innerHTML += `<div class="col">
                <div class="card mb-3" style="width: 400px; height: 600px">
                    <img src="${element.image}" class="card-img-top" alt="..." style="width: 100%; height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="${element.url}">"${element.title}"</a></h5>
                        <p class="card-text ">${element.description}</p>
                    </div>
                </div>
            </div>`
          });
        })
        
      

         let coba = [ {
            id : 1
          },
        {
          id: 2
        }]
       
         

          console.log(text);
          rssFitria.innerHTML = text

        function display (item) {
          text += `<h1>${item.id}</h1>`
        }


       
      

    </script>
  </body>
</html>
