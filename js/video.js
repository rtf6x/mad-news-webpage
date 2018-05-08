var canvasVideo = new CanvasVideoPlayer({
  videoSelector: '.animated',
  canvasSelector: '.canvas',
  framesPerSecond: 30,
  hideVideo: true, // should script hide the video element
  autoplay: true,
  // IMPORTANT On iOS can't be used together with autoplay, autoplay will be disabled
  audio: false, // can be true/false (it will use video file for audio), or selector for a separate audio file
  resetOnLastFrame: true, // should video reset back to the first frame after it finishes playing
  loop: true
});
