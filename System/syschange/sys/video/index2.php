<html>

<title>Video Conferencing</title>
<body>

	<div class="zindex1">
  <div class="myelement">
   
  </div>
</div>

	<?php
// Initialize the session
session_start();

if(isset($_SESSION['user_id'])=="") {
header("Location: ../login.php");
}



?>






<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const meeting = new VideoSDKMeeting();

    const config = {
      name: "",
      apiKey: "2aadfa48-5877-4857-88c7-633ce972832c", // generated in step 1
      meetingId: "<?php echo $_SESSION['company'];?>", // enter your meeting id

      containerId: null,
      redirectOnLeave: "https://www.t-synergies.com/systemm/video/invitationend.php",

      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,

      chatEnabled: true,
      screenShareEnabled: true,
      pollEnabled: true,
      whiteBoardEnabled: true,
      raiseHandEnabled: true,

      recordingEnabled: false,
      recordingWebhookUrl: "https://www.videosdk.live/callback",
      participantCanToggleRecording: true,

      brandingEnabled: true,
      brandLogoURL: "http://www.t-synergies.com/systemm/logo.png",
      brandName: "Travel Synergies Conference",
      poweredBy: false,

      participantCanLeave: true, // if false, leave button won't be visible

      // Live stream meeting to youtube
      livestream: {
        autoStart: true,
        outputs: [
          // {
          //   url: "rtmp://x.rtmp.youtube.com/live2",
          //   streamKey: "<STREAM KEY FROM YOUTUBE>",
          // },
        ],
      },

      permissions: {
        askToJoin: false, // Ask joined participants for entry in meeting
        toggleParticipantMic: true, // Can toggle other participant's mic
        toggleParticipantWebcam: true, // Can toggle other participant's webcam
      },

      joinScreen: {
        visible: true, // Show the join screen ?
        title: "Travel Synergies", // Meeting title
        meetingUrl: window.location.href, // Meeting joining url
      },

      pin: {
        allowed: true, // participant can pin any participant in meeting
        layout: "SPOTLIGHT", // meeting layout - GRID | SPOTLIGHT | SIDEBAR
      },
    };

    meeting.init(config);
  });
  </script>
  
  
  <script>

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.1.26/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
  
  
</script>
</body>

</html>