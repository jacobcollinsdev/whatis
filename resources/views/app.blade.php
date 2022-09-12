<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tiny.cloud/1/1647or253qni05v3vteb6f5g0wpd74mva482bk6vdpwpoqzh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#description'
    });
    </script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>