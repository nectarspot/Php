const tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";

const firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let player;
let videoInterval;
let videoEventName = "video-demo-page";
let passedBreakpoint = 0;
const breakpoints = [0.25, 0.5, 0.75];

function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    height: "315",
    width: "560",
    videoId: "9KORxC2xUqs",
    origin: "http://localhost:9090",
    events: {
      onStateChange: onPlayerStateChange
    }
  });
}

let done = false;

function onPlayerStateChange(event) {
  if (
    !done &&
    event.data === YT.PlayerState.PLAYING &&
    parseInt(player.getCurrentTime(), 10) === 0
  ) {
    ORIBI.api("track", `clicked-${videoEventName}`);
    videoInterval = setInterval(checkVideoState, 1000);
  }

  if (event.data === YT.PlayerState.ENDED) {
    done = true;
    ORIBI.api("track", `watched-${viORIBIdeoEventName}-100%`);
    clearInterval(videoInterval);
  }
}

function checkVideoState() {
  const viewedPercentage = player.getCurrentTime() / player.getDuration();
  breakpoints.forEach((breakpoint) => {
    if (passedBreakpoint < breakpoint && viewedPercentage >= breakpoint) {
      passedBreakpoint = breakpoint;
      ORIBI.api("track", `watched-${videoEventName}-${breakpoint * 100}%`);
    }
  });
}
