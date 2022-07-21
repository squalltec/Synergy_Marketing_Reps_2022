<?php
session_start();
?>
<body id="exportContent">
   
  <h1 align='center'>  <img align='center' style='width:5%;' src='https://t-synergies.com/systemm/DISTI/qr/logosmall.png'></h1>
   <h1 align='center'> Synergy Marketing Reps </h1>
   
   
   
   <p align='center'><nonsense style='position:absolute; bottom:0;'>Phone:<?php echo ' '. $_SESSION['user_contact']." | ";?> Email: <?php echo $_SESSION['user_email']." | ";?> Website:<?php echo $_SESSION['user_website'];?></nonsense></p>
   
</body>
<!--<button onclick="Export2Word('exportContent', 'word-content.docx');">Export as .docx</button>-->
<script>
function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    
    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);
}
</script>