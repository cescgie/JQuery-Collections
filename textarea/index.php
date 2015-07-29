<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <script type="text/javascript" src="lib/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.livepreview.js"></script>
    <script type="text/javascript" src="lib/jquery.flexibleArea.js"></script>
    <link rel="stylesheet" href="style/style.css" type="text/css" />
  </head>
<body>
  <label>Jquery & Javascript</label>
  <ul>
    <li>Live Preview Texting Texarea</li>
    <li>Show and Hide div</li>
    <li>Flexible Textarea</li>
  </ul>
  <button id="click">SHOW / HIDE</button>
  <div id="show">
    <br>
    <textarea rows="4" cols="50" id="NoteText" class="source"></textarea>
    <div class="preview"></div>
  </div>
  <script type="text/javascript">
      $(function() {
          $('textarea.source').livePreview({
              previewElement: $('div.preview'),
              allowedTags: ['p', 'strong', 'br', 'em', 'strike'],
              interval: 20
          });
      });
  </script>
  <script type="text/javascript">
      $(function() {
        $(".source").flexible();
      });
  </script>
  <script>
    var button = document.getElementById('click'); // Assumes element with id='button'
    var div = document.getElementById('show');
    div.style.display = 'none';

    button.onclick = function() {
        if (div.style.display != 'block') {
            div.style.display = 'block';
        }
        else {
            div.style.display = 'none';
        }
    };
  </script>
</body>
</html>
