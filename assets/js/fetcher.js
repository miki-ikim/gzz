fetch('../../../libs/server.php').then((res) => res.json())
.then(response=>{
    console.log(response);
    let output='';
    for(let i in response){
        output += `<tr> 
        <td>${response[i].customer_id}</td> 
        <td>${response[i].customer_name}</td> 
        <td>${response[i].customer_phone}</td> 
        <td>${response[i].balance}</td>  
        </tr>`;
    }
    document.querySelector('.tbody').innerHTML = output;
}).catch(error=>console.log(error));

$('.table').DataTable();