function fetchciti(str)
{
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/AJAX/citi.php?state="+str,true);
	req.send();
	req.onreadystatechange=function()
		{
			if(req.readyState==4&&req.status==200)
			{
				document.getElementById("cit").innerHTML=req.responseText;
			}
		
		};

}