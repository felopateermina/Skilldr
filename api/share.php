<?php
function generateSharingLinks($url) {
    $encodedUrl = urlencode($url);
    
    $sharingLinks = array(
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $encodedUrl,
        'twitter' => 'https://twitter.com/intent/tweet?url=' . $encodedUrl,
        'whatsapp' => 'https://api.whatsapp.com/send?text=' . $encodedUrl,
        'messenger' => 'https://www.facebook.com/dialog/send?link=' . $encodedUrl,
        'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $encodedUrl,
        'reddit' => 'https://www.reddit.com/submit?url=' . $encodedUrl,
        'telegram' => 'https://t.me/share/url?url=' . $encodedUrl,
        'pinterest' => 'https://pinterest.com/pin/create/button/?url=' . $encodedUrl,
        'tumblr' => 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=' . $encodedUrl,
        'vk' => 'https://vk.com/share.php?url=' . $encodedUrl,
        'email' => 'mailto:?subject=Check this out&body=' . $encodedUrl
    );
    
    return $sharingLinks;
}

$sharingLinks = generateSharingLinks('https://skilldr.vercel.app | Come And See Now The Free Online Courses In Skilldr Academy - Dark Alpha!');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share - Skilldr</title>
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="../css/share.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: black;
            height: 100vh;
            margin: 0;
        }
        .share {
            background-color: white;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
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
            .share {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<div class="share">
    <a href="<?php echo $sharingLinks['facebook']; ?>">
        <button class="xs" title="Share By Facebook ?">
            <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['twitter']; ?>">
        <button class="xs" title="Share By X/Twitter ?">
            <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
            </svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['whatsapp']; ?>">
        <button class="xs" title="Share By Whatsapp ?">
            <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M19.44 4.552A10.413 10.413 0 0 0 12.044 1.5C6.281 1.5 1.59 6.168 1.588 11.906a10.341 10.341 0 0 0 1.396 5.203L1.5 22.5l5.543-1.447a10.483 10.483 0 0 0 4.997 1.266h.004c5.762 0 10.453-4.669 10.456-10.407a10.32 10.32 0 0 0-3.06-7.36Zm-7.396 16.01h-.004a8.706 8.706 0 0 1-4.423-1.205l-.317-.188-3.29.859.879-3.192-.207-.328a8.6 8.6 0 0 1-1.329-4.602c0-4.768 3.9-8.648 8.694-8.648a8.672 8.672 0 0 1 8.688 8.655c-.002 4.769-3.9 8.65-8.69 8.65Zm4.767-6.477c-.261-.13-1.547-.76-1.785-.847-.238-.086-.414-.13-.588.13-.174.261-.675.845-.827 1.02-.153.176-.305.195-.566.065-.261-.13-1.104-.404-2.102-1.29-.776-.69-1.3-1.541-1.453-1.801-.152-.26-.016-.402.115-.531.117-.117.26-.304.392-.456.13-.152.174-.26.26-.434.087-.173.044-.325-.02-.455-.066-.13-.589-1.41-.806-1.93-.213-.508-.428-.439-.588-.447-.152-.007-.328-.01-.501-.01a.962.962 0 0 0-.697.326c-.24.26-.914.89-.914 2.17 0 1.278.937 2.516 1.067 2.69.129.173 1.842 2.799 4.463 3.925.486.209.984.392 1.49.548.625.198 1.195.17 1.645.103.502-.075 1.546-.63 1.764-1.237.217-.607.217-1.127.152-1.236-.065-.108-.24-.174-.501-.303Z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['linkedin']; ?>">
        <button class="xs" title="Share By LinkedIn ?">
            <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.98 3C3.084 3 1.5 4.584 1.5 6.48S3.084 10 4.98 10c1.896 0 3.48-1.584 3.48-3.48S6.876 3 4.98 3zM2.565 20.25h4.824V9H2.565v11.25zM22.5 20.25h-4.824v-5.835c0-1.464-.028-3.348-2.041-3.348-2.043 0-2.362 1.594-2.362 3.236v6.947H8.518V9h4.615v1.551h.061c.638-1.215 2.2-2.496 4.533-2.496 4.85 0 5.735 3.195 5.735 7.347v6.848z"></path>
            </svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['reddit']; ?>">
        <button class="xs" title="Share By Reddit ?">
        <svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M23.25 9.749a3 3 0 0 0-4.96-2.269c-1.574-.834-3.45-1.34-5.409-1.453l.488-2.925 2.044.319a2.268 2.268 0 1 0 .234-1.481l-2.784-.432a.75.75 0 0 0-.854.62l-.646 3.89c-2.044.084-4.013.59-5.654 1.462a3 3 0 0 0-3.993 4.472A5.756 5.756 0 0 0 1.5 13.5c0 2.053 1.125 3.975 3.178 5.39C6.731 20.306 9.244 21 12 21c2.756 0 5.353-.75 7.322-2.11 1.968-1.36 3.178-3.337 3.178-5.39 0-.52-.073-1.038-.216-1.538a3.036 3.036 0 0 0 .966-2.212Zm-16.5 2.625a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm8.69 4.79a7.51 7.51 0 0 1-6.88 0 .75.75 0 0 1 .684-1.33 6.019 6.019 0 0 0 5.512 0 .75.75 0 0 1 .685 1.33Zm.31-3.29a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"></path>
</svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['telegram']; ?>">
        <button class="xs" title="Share By Telegram ?">
        <svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M21.684 2.971a1.51 1.51 0 0 0-1.528-.253L2.85 9.515a1.481 1.481 0 0 0-.947 1.528 1.5 1.5 0 0 0 1.2 1.34l4.397.873v5.493a1.5 1.5 0 0 0 2.56 1.06l2.437-2.428 3.684 3.243a1.5 1.5 0 0 0 2.1-.11 1.49 1.49 0 0 0 .356-.677l3.525-15.394a1.5 1.5 0 0 0-.478-1.472ZM17.174 19.5 9.45 12.702l11.128-8.034-3.403 14.831Z"></path>
</svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['pinterest']; ?>">
        <button class="xs" title="Share By Pinterest ?">
        <svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M21.75 12.302c-.16 5.11-4.294 9.272-9.403 9.44a9.72 9.72 0 0 1-2.681-.271.384.384 0 0 1-.272-.46l.834-3.319c.76.46 1.634.698 2.522.685 3.469 0 6.253-3.14 5.981-6.881-.244-3.366-3-6.057-6.375-6.235a6.75 6.75 0 0 0-7.106 6.74c.001.868.167 1.727.487 2.532a.753.753 0 1 0 1.397-.562 5.203 5.203 0 0 1-.384-1.885 5.25 5.25 0 0 1 10.5-.084c0 2.69-2.016 4.875-4.5 4.875-.984 0-1.669-.347-2.137-.75l1.368-5.447a.751.751 0 0 0-1.122-.821.753.753 0 0 0-.34.465L8.006 20.392a.375.375 0 0 1-.534.244 9.75 9.75 0 1 1 14.278-8.334Z"></path>
</svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['tumblr']; ?>">
        <button class="xs" title="Share By Tumblr ?">
        <svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.27 7.63A5.76 5.76 0 0 0 10.815 2h3.03v5.152h3.636v3.636h-3.636v5.454c0 .515.197 1.207.91 1.667.473.307 1.483.458 3.03.455V22h-4.242a4.545 4.545 0 0 1-4.546-4.545v-6.667H6.27V7.63Z"></path>
</svg>
        </button>
    </a>
    <a href="<?php echo $sharingLinks['email']; ?>">
        <button class="xs" title="Share By E-mail ?">
        <svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm6 9a3 3 0 0 0 6 0h5V5H4v7h5Z"></path>
</svg>
        </button>
    </a>
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
