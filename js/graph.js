window.addEventListener('DOMContentLoaded', graph);

function graph()
{
	const graphs = document.querySelectorAll('.graph');
	
	for(const graph of graphs)
	{
		let maxYears = 0;
		const cols = graph.querySelectorAll('[data-years]');
		
		for(const col of cols)
		{
			const year = parseInt(col.getAttribute('data-years'));
			
			maxYears = Math.max(year, maxYears);
		}
		
		for(const col of cols)
		{
			const year = parseFloat(col.getAttribute('data-years'));
			
			let percent = 1 / (maxYears / year);
			percent *= 75;
			percent += 25;
			
			col.style.height = `${percent}%`;
		}
	}
}