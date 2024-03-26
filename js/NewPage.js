// if(document.getElementById('YoutubeModel')){

//     // To Pause youtube Video
//     const youtubeModal = new bootstrap.Modal(document.getElementById('YoutubeModel'));
    
//     youtubeModal._element.addEventListener('hidden.bs.modal', function () {
//         const iframe = document.getElementById('youtubeIframe');
//         if (iframe) {
//             const src = iframe.src;
//             iframe.src = src;
//         }
//     });
// }
const modalElements = Array.from(document.querySelectorAll('.modal.fade'));
if (modalElements.length > 0) {
  modalElements.forEach(modalElement => {
    // To Pause youtube Video
    const modal = new bootstrap.Modal(modalElement);

    modal._element.addEventListener('hidden.bs.modal', function () {
      const iframe = modalElement.querySelector('iframe');
      if (iframe) {
        const src = iframe.src;
        iframe.src = src;
      }
    });
  });
}
window.addEventListener("DOMContentLoaded", () => {

    const containerArr = Array.from(document.querySelectorAll('.container')).slice(2, Array.from(document.querySelectorAll('.container')).length);
    const screenWidth = window.innerWidth;
    if (screenWidth < 1500) {
        containerArr.forEach(e => {
            if (e.style.maxWidth !== '1500px') {
                e.style.maxWidth = '1140px';
            }
        })
    } else {
        containerArr.forEach(e => e.style.maxWidth = '1500px')
    }
});

function toggleMute() {
    const isSafari = /iPad|iPhone|iPod/i.test(navigator.userAgent || '');
    if (isSafari) {
        wavesurfer.playPause();
    } else {
        wavesurfer.setVolume(audio);
    }
    audio = audio == 1 ? 0 : 1
  }
  
    async function SharePage() {
    if (location.href){
      const shareData = {
        title: "FBSPL | PODCAST",
        text: "FBSPL",
        url: location.href,
      };
      try {
        if (navigator.share) {
          await navigator.share(shareData);
          console.log("shared successfully");
        } else {
          console.log("Share API Not Available");
        }
      } catch (err) {
        console.log(`Error: ${err}`);
      }
    }
  }