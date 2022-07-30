<!DOCTYPE html>
<html>
  <head>
    <title>Drag and Drog</title>
  </head>
  <body>
    <form>
      <input type="file"id="input" name="file"/>
    </form>
    <div id="dropbox">
      <img src="images/images.png" width="300px"/>
    </div>
    <script type="text/javascript">
      let dropbox;
      dropbox = dokument.getElementById('dropbox');
      dropbox.addEvanListener("dragenter", dragenter, false);
      dropbox.addEvanListener("dragover", dragover, false);
      dropbox.addEvanListener("drop", drop, false);

      function drogenter(e){
        e.stopPropagantion();
        e.preventDefault();
      }
      function dropgover(e) {
        e.stopPropagantion();
        e.preventDefault();
      }
      function drop(e) {
        e.stopPropagantion();
        e.preventDefault();
        const dt = e.dataTransfer;
        const files = dt.files;
        dokument.getElementById("input").files = files;
      }
    </script>
    </div>
  </body>
</html>
