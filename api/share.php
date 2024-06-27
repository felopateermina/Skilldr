<?php
function generateSharingLinks($url) {
    $encodedUrl = urlencode($url);
    
    $sharingLinks = array(
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $encodedUrl,
        'twitter' => 'https://twitter.com/intent/tweet?url=' . $encodedUrl,
        'whatsapp' => 'https://api.whatsapp.com/send?text=' . $encodedUrl,
        'messenger' => 'https://www.facebook.com/dialog/send?link=' . $encodedUrl
    );
    
    return $sharingLinks;
}

$currentUrl = 'https://skilldr.vercel.app'; // Replace with your current page URL

$sharingLinks = generateSharingLinks($currentUrl);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks For Sharing...!</title>
    <link rel="shortcut icon" href="../imgs/skilldr-high-resolution-logo-black-transparent.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/share.css">
    <style>
        body{
            justify-content:center;
            text-align:center;
            align-items:center;
            display: 0px;
            background-color: black;
        }
        .share{
            background-color: white;
            position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding:20px;
    border-radius: 20px;
        }
        button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}
@media screen and (max-width: 1023px) {
.share{
    width: 70%;
}
}
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br>
    <div class="share">


    <a href="<?php echo $sharingLinks['facebook']; ?>">
       <button class="fcs">
        <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
          </svg>
       </button>
    </a>
    <a href="<?php echo $sharingLinks['twitter']; ?>">
       <button class="xs">
        <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
          </svg>
       </button>
    </a>
    <a href="<?php echo $sharingLinks['whatsapp']; ?>">
       <button class="whts">
        <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M19.44 4.552A10.413 10.413 0 0 0 12.044 1.5C6.281 1.5 1.59 6.168 1.588 11.906a10.341 10.341 0 0 0 1.396 5.203L1.5 22.5l5.543-1.447a10.483 10.483 0 0 0 4.997 1.266h.004c5.762 0 10.453-4.669 10.456-10.407a10.32 10.32 0 0 0-3.06-7.36Zm-7.396 16.01h-.004a8.706 8.706 0 0 1-4.423-1.205l-.317-.188-3.29.859.879-3.192-.207-.328a8.6 8.6 0 0 1-1.329-4.602c0-4.768 3.9-8.648 8.694-8.648a8.672 8.672 0 0 1 8.688 8.655c-.002 4.769-3.9 8.65-8.69 8.65Zm4.767-6.477c-.261-.13-1.547-.76-1.785-.847-.238-.086-.414-.13-.588.13-.174.261-.675.845-.827 1.02-.153.176-.305.195-.566.065-.261-.13-1.104-.404-2.102-1.29-.776-.69-1.3-1.541-1.453-1.801-.152-.26-.016-.402.115-.531.117-.117.26-.304.392-.456.13-.152.174-.26.26-.434.087-.173.044-.325-.02-.455-.066-.13-.589-1.41-.806-1.93-.213-.508-.428-.439-.588-.447-.152-.007-.328-.01-.501-.01a.962.962 0 0 0-.697.326c-.24.26-.914.89-.914 2.17 0 1.278.937 2.516 1.067 2.69.129.173 1.842 2.799 4.463 3.925.486.209.984.392 1.49.548.625.198 1.195.17 1.645.103.502-.075 1.546-.63 1.764-1.237.217-.607.217-1.127.152-1.236-.065-.108-.24-.174-.501-.303Z" clip-rule="evenodd"></path>
          </svg>
       </button>
    </a>
<br><br>
<strong>Thanks For Sharing <span style="color:blue;font-weight:bold;">©Skilldr </span>...!</strong><br><br>

<i>*You must make an account for you to watch the courses.Notice: This Academy ©Skilldr is made by ©Felopateer. Your go-to platform for mastering essential skills. Our courses empower you to learn Python programming, data science, web development, and more. Join us to enhance your expertise and achieve your professional goals.*</i>
    </div>
    <script>
    // Disable right-click context menu
    document.addEventListener('contextmenu', event => event.preventDefault());

    // Disable specific keyboard shortcuts
    document.addEventListener('keydown', function(event) {
        if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I") || 
            (event.ctrlKey && event.shiftKey && event.key === "J") || 
            (event.ctrlKey && event.key === "U")) {
            event.preventDefault();
        }
    });
</script>

</body>
</html>
