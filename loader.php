<html>
    <head>
        <title>Star technologies</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
        *{
             padding: 0;
            margin: 0;
               }
               .lod{
               position: fixed;
                  z-index: 999999;
               text-align: center;
                background: black;
                width: 100%;
               height: 100%;   
           }
           .lod h3{
             text-align: center;
              font-family: sans-serif;
              font-size: 2rem;
           font-weight: 30px;
          color: orange;
            }
            .lod img{
                width: 600px;
                height: 600px;
                margin: 10px auto;
            }
          @media(max-width:970px){
            .lod img{
             width: 400px;
             height: 400px;
             }
               .lod h3{
                margin-top: 20%;
                font-size: 2rem;
              font-weight: 20px;
             }
             }
        
        </style>
    </head>
    <body>
        
       <div class="lod">
        <link rel="stylesheet" type="text/css" href="loder/index.html">
        <img src="g1.jpg" alt="loding">
           <h3> ॐ नमः शिवाय<br>हर हर महादेव</h3>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        setTimeout(function(){
        $('.lod').fadeToggle();  
        },1500);
    </script>
        
        
    </body>
</html>