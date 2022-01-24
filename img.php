<html>
	<body>
    <div class="card">
  		<div class="card-body">
<form action="index.php?page=info" method="post">
<legend class="leg_img">Insira imagens</legend>
<fieldset id="upload_img" class="nf_class upload_img">
    <input type="file" id="files" name="arquivo_foto" multiple accept="image/*" style="display:none;" />
    		<a href="#" id="fileSelect" style="text-align:center;" >selecionar</a>
    <div id="list" style="margin-bottom:0;"></div>
    </div>
</div>
</fieldset>
</form>
	



<script type="text/javascript">
var fileSelect = document.getElementById("fileSelect");
var	fileElem = document.getElementById("files");

fileSelect.addEventListener("click", function(e)
{
	fileSelect.style.cssFloat = "rigth";
	fileSelect.style.marginRight = "3px";
	fileSelect.style.marginTop = "-3px";
	if(fileElem)
	{
		fileElem.click();
	}
	e.preventDefault();
}, false);

function handleFileSelect(evt)
{
	var	list = document.getElementById("list").childElementCount;
	var files = evt.target.files;
    var qtde = files.length;
    var nomes = fileElem.files;
    var nome;
    	
    if(qtde > 2 || list > 1)
    {
    	alert('apenas 2');
    	document.getElementById('files').value = ""; 
    	return;
    }else
    {
    	for(var i = 0, f; f = files[i]; i++)
    	{
    		if(!f.type.match('image.*'))
    		{
        		continue;
        	}
        	var reader = new FileReader();
			reader.onload = (function(theFile)
			{
			   	return function(e)
			   	{
		        	var span = document.createElement('span');
		            span.innerHTML = 
	"<div class='card-deck'><div class='cal-sm-6'><div class='card-body'><a href='#'><img style='float:left;padding: 3px;height: 100px; width: 100px; border: 1px solid #c7c7c7;margin-top:0px; margin-rigth:100px' src='" + e.target.result + "'" + "title='" + escape(theFile.name) + "'/><img class='icon-del-img' style='float:300px;margin-left:-41px;'/></a></div></div></div>";
	
		            document.getElementById('list').insertBefore(span, null);
		            span.children[0].addEventListener("click", function(evt)
		            {
	                	span.parentNode.removeChild(span);
	                });
		        };
		    })(f);
        	reader.readAsDataURL(f);
        } 
        return true;}
}
document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
</html>