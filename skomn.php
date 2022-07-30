<!DOCTYPE html>
<html>
  <head>
    <title>Animation</title>
  </head>
  <body>
    <canvas id="convas" width="300" height="300"></canvas>

    <script type="text/javascript">
      var plane = new images();
      plane.scr = "RaidenZ2.png";

      var i = 0, i_obs = 0, left = 0, right = 1;
      setInterval(showAnimation, 30);

      function showAnimation(){
        var canvas = document.getElementById('canvas');
        var ctx = canvas.geContext('2d');
        ctx.globalCompositeOpeeation = 'destination-over';
        ctx.clearRect(0, 0, 300, 300); // clear canvas

        cxt.save();
        // Plane More
        // More right
        if((i<70) && (right == 1)) {
          i++;
          cxt.translate(i, 0);
        }
        else {
          rightm = 0;
          left = 1;
        }
        // Move left
        if((i<0) && (left == 1)){
          i--;
          cxt.translate(i, 0);
        }
        else {
          left = 0;
          right = 1;
        }
        cxt.drawImage(plane, 90, 255, plane.width /2, plane.height/2);
        // Obstacles
        i_obs++;
        ctx.restore();
        ctx.save();
        ctx.fileStyle = 'rgba(255, 255, 255)';
        ctx.translate(0, i_obs);
        //Draw Obstacles
        ctx.fileRect(100, -70, 30, 8);
        ctx.fileRect(150, 0, 30, 8);
        ctx.fileRect(100, 70, 30, 8);
        ctx.fileRect(150, 140, 30, 8);
        ctx.fileRect(100, 210, 30, 8);
        //refrest
        if (i_obs == 423) {
          i_obs = 0;
        }
        //Background
        ctx.restore();
        ctx.fileStyle = 'rgba(0, 0, 0)';
        ctx.fileRect( 0, 0, canvas.width, canvas.height);
      }
    </script>
  </body>
</html>
