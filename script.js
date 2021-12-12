
      var player = document.getElementById("player");
      var captureButton = document.getElementById("capture");
      var stopButton = document.getElementById("stop");

      var handleSuccess = function (stream) {
        player.srcObject = stream;
      };

      navigator.mediaDevices.getUserMedia({ video: true }).then(handleSuccess);

      stopButton.addEventListener("click", function () {
        stream = player.srcObject;
        tracks = stream.getTracks();
        tracks.forEach(function (track) {
          track.stop();
        });
        player.srcObject = null;
      });
      captureButton.addEventListener("click", async function () {
        net = await mobilenet.load();
        console.log("Successfully loaded model");

        const webcam = await tf.data.webcam(player, {
          resizeWidth: 224,
          resizeHeight: 224,
        });

        const img = await webcam.capture();
        const result = await net.classify(img);

        document.getElementById("console").innerText = `
      	prediction: ${result[0].className}\n
      	probability: ${result[0].probability}
        `;

        img.dispose();
      });
    