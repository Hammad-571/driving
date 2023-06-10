function right(id)
{
    document.getElementById('btn'+id).style.backgroundColor = 'green';
    document.getElementById('btn'+id).style.color = '#FFFFFF';

}

function wrong(w,id)
{
    document.getElementById('btn'+id).style.backgroundColor = 'green';
    document.getElementById('btn'+w).style.backgroundColor = 'red';
    document.getElementById('btn'+id).style.color = '#FFFFFF';
    document.getElementById('btn'+w).style.color = '#FFFFFF';
}