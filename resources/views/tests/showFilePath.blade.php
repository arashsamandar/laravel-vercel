<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>File Path :

    <!-- Display the relative path of this file -->
    @php
        $filePath = __FILE__;
        $relativePath = str_replace(base_path(), '', $filePath);
    @endphp

</h3>

<p>The relative path of this file is: {{ $relativePath }}</p>

</body>
</html>
