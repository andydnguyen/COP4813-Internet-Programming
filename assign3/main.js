function addNumber()
{
var input = document.getElementById('num').value.split(",");
var list = document.getElementById('list');
var option = document.createElement("OPTION");
list.options.add(option);
option.text = input;
option.value= input;
}

function submit() 
{
var list = new Array();
var select  = document.getElementById('list');

    for(i = 0; i < select.options.length; i++)
    {
        list[i] = parseInt(select.options[i].text);
    }

document.getElementById('mean').value = getMean(list).toFixed(2);
	document.getElementById('mode').value = getMode(list);
	document.getElementById('count').value= getCount(list).toFixed(2);
	document.getElementById('sum').value=getSum(list).toFixed(2);
	document.getElementById('median').value=getMedian(list).toFixed(2);
	document.getElementById('variance').value=getVariance(list).toFixed(2);
	document.getElementById('deviation').value=getStandardDeviation(list).toFixed(2);
}
