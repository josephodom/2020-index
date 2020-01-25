window.addEventListener('scroll', function(e)
{
	if(document.documentElement.scrollTop > 0)
	{
		document.body.classList.add('scrolled');
	}
	else
	{
		document.body.classList.remove('scrolled');
	}
});