<?php
require_once "autoload.php";

function echoCurrency()
{
    if (isset($_GET['getData'])){
        if ($_GET['userId'] === '01') {
            $imgArr = ['Taylor_Swift_-_Evermore.png'];
            return json_encode($imgArr);
        }elseif ($_GET['userId'] === '02'){
            $imgArr = ['Taylor_Swift_-_Red.png'];
            return json_encode($imgArr);
        }
    }elseif (isset($_GET['saveMe'])){
        $url = $_GET['saveMe'];
        $fileName =  basename($url);
        file_put_contents($fileName, file_get_contents($url));
        return json_encode($url);
    }
    elseif (isset($_GET['userId'])) {
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
        
        function getUserId()
        {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            return urlParams.get('userId');
        }
        
        function getImg()
        {
            fetch('http://localhost:44000?getData=get&userId=' + getUserId(),{method: 'get'} ) 
            .then(data => data.json().then(result => {
                addImg(result);
            }));
        }
        getImg();
        
        function saveImg()
        {
            const url = document.getElementById('url-input').value;
            fetch('http://localhost:44000?saveMe=' + url,{method: 'get'} ) 
            .then(data => data.json().then(result => {
                addImg([result]);
            }));
        }
        
        function resetForm(id)
        {
            document.getElementById(id).reset()
        }

    </script>
    
    <form id="reset-me">
        enter url: <input id="url-input" type="text" name="Currency">
        <input onclick="saveImg(); resetForm('reset-me')" id="btn" type="button" value="ВЗЯТЬ">
    </form>
HTML;
    }
}

echo echoCurrency();
?>

