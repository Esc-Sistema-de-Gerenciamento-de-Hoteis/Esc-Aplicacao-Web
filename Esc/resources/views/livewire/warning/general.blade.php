<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="/css/warning/style.css">

    
    <title>'{{$title}}'</title>

    <style>
    body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
    }
    </style>

</head>
<body>
    <script>
        Swal.fire({
          icon: '{{$icon}}',
          title: '{{$title}}',
          text: '{{$message}}',
          footer: '<a href="/"></a>'
        }).then((result) => {
            console.log(result)
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location = '{{$route}}';
  } 
});
        
    </script>
</body>
</html>