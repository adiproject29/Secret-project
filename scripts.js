 
 function copy(){
 var copyBtn = document.getElementById("Text_CopBtn");
var textArea = document.querySelector("copy_button");
 textArea.select();
 document.execCommand("copy");

}

copyBtn.onclick = function (){
   navigator.clipboard.writeText(text.value);
   copyBtn.value = "Copied"
   setTimeout(function (){
     copyBtn.value = "copy"

   }, 1500)

}
</script>