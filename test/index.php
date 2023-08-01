<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
canvas {
  position: -webkit-sticky;
  position: -moz-sticky;
  position: -o-sticky;
  position: -ms-sticky;
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: center center;
}
#more_content,
#initial_content,
#end_content,
.title_block {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: blue;
  color: white;
  font-size: 3rem;
  font-family: sans-serif;
}
.title_block {
  background-color: green;
}
#end_content {
  background-color: white;
  color: black;
}

  </style>
</head>
<body>
<div id="initial_content">
  <h1>Image Version</h1>
</div>
<div id="img_container">
  <canvas id="img_canvas">
  </canvas>
</div>
<div class="title_block">
  <h1>Video Version</h1>
</div>
<div id="video_container">
  <canvas id="video_canvas">
    <video id="video" tabindex="0" autobuffer="autobuffer" preload="preload" muted playsinline>

      <source type='video/mp4' src="https://static.pkmo.dev/flyover-1600.mp4">
      </source>
      <p>Sorry, your browser does not support the &lt;video&gt; element.</p>
    </video>
  </canvas>
</div>

<div id="end_content">
  <h1>End Content</h1>
</div>
<script>
    const scrollimage = new ScrollPlay({
  speed: 10,
  container: "img_container",
  canvas: "img_canvas",
  frames: 210
});

const scrollvideo = new ScrollPlay({
  speed: 300,
  container: "video_container",
  canvas: "video_canvas",
  video: "video",
  inertia: 6
});

</script>
</body>
</html>