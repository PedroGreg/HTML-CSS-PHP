document.getElementById('logOut').addEventListener('click', () =>{
    switch (document.getElementById('logOut').textContent){
        case 'Sair':
            window.location.href = 'sair.php'
            break
    }
})