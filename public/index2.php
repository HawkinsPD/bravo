<?php
require_once "autoload.php";

function echoCurrency()
{
    if (isset($_GET['getUserId'])) {
        return json_encode($_GET['userId']);
    }elseif (isset($_GET['getData'])){
        $imgArr = ['https://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png', 'https://upload.wikimedia.org/wikipedia/en/0/0a/Taylor_Swift_-_Evermore.png', 'https://upload.wikimedia.org/wikipedia/en/9/9f/Midnights_-_Taylor_Swift.png'];
        return json_encode($imgArr);
    }elseif (isset($_GET['userId'])) {
        return <<<HTML
    <script type="text/javascript">
    
        function addImg(source)
        {
            if (typeof(source) === typeof[]) {
            for (let i = 0; i < source.length; i++) {
                const imgElement = document.createElement("img");
                imgElement.src = source[i];
                imgElement.alt = source[i];
                imgElement.id = 'img-' + i;
                document.body.appendChild(imgElement);
                }
            }
        }
        
        function getImg()
        {
            fetch('http://localhost:44000?getData=get',{method: 'get'} ) 
            .then(data => data.json().then(result => {
                addImg(result);
            }));
        }
        getImg();

    </script>

HTML;
    }
}

echo echoCurrency();
?>

