<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">              
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Reviews</title>
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <style>
form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

label {display: block;}

input[type=text], select {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

button[type=add] {
  width: 40%;
  align-items: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px;
  margin: 20px 300px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
    <div class="container mt-4">        
        @yield('content')
    </div>
</body>
</html>