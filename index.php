<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Example / Preview</title>
    <link rel="stylesheet" href="easymde.min.css" />
    <script src="easymde.min.js"></script>
    <style>
      body {
        font: 1rem arial;
      }
    </style>
  </head>
  <body>
    <textarea></textarea>
    <script>
      var easyMDE = new EasyMDE({
        autofocus: true,
        autorefresh: true,
        spellChecker: false,
        minHeight: "180px",
        uploadImage: true,
        hideIcons: ["image"],
        showIcons: ["upload-image"],
        imageUploadEndpoint: "http://md.localhost/upload.php",
      });
    </script>
  </body>
</html>
