// JavaScript Document
window.onload=function ()
{
	var oDiv=document.getElementById('one');
	var aBtn=oDiv.getElementsByTagName('li');
	var aTex=oDiv.getElementsByTagName('div');
	for(var i=0;i<aBtn.length;i++)
	{
		aBtn[i].index=i;
		aBtn[i].onclick=function ()
		{
			for(var i=0;i<aBtn.length;i++)
			{
				aBtn[i].className='';
				aTex[i].style.display='none';
				}
			this.className='action';
			aTex[this.index].style.display='block';
			};
		}
	};