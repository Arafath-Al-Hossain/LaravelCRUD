<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @layer utilities{
        .container{
            @apply px-10 mx-auto;
        }
      }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-2xl font-bold  ">
                Create
            </h1>
            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back Home</a>
        </div>
    </div>
</body>

</html>